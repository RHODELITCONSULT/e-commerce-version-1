<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\contactUs;
use App\Models\Message;
use App\Notifications\Admin\ReplyEmailNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ContactUsController extends Controller
{
    public function contactUs()
    {
        return view('front.contacts.contactUs');
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            $getContactUs = ContactUs::where('email', $data['email'], 'subject', $data['subject'], 'message', $data['message'])->count();
            if ($contactUsCount > 0) {
                return "exists";
            } else {
                // Add Contact Us Details in table
                $contactUs = new ContactUs;
                $contactUs->user_id = $user_id;
                $contactUs->email = $data['email'];
                $contactUs->subject = $data['subject'];
                $contactUs->message = $data['message'];
                $contactUs->status = 1;
                $contactUs->save();
                return "saved";
            }
        }
    }

    public function message()
    {
        try {
            $rules = [
                "subject" => "required|string",
                "name" => "required|string|max:255",
                "email" => "required|email",
                "message" => "required|string",
            ];

            $validation = Validator::make(request()->all(), $rules);
            if ($validation->fails()) {
                return back()->with('error_message', $validation->errors()->first());
            }

            //* Make an entry in the database
            $message = Message::query()->create([
                "name" => request()->name,
                "email" => request()->email,
                "subject" => request()->subject,
                "message_text" => request()->message,
            ]);

            if ($message) {
                return back()->with('success_message', 'Your message has been sent!!');
            } else {
                return back()->with('error_message', 'Sorry, your message was not sent!!');
            }

        } catch (\Exception $e) {
            Log::error("MESSAGE_US_ERROR" . $e->getMessage());
            return back()->with('error_message', 'Sorry, your message was not sent');
        }
    }

    //TODO=> Extract all the messages of a user
    public function all_messages()
    {
        try {
            $messages = Message::query()->orderBy('created_at','DESC')->paginate(50);
            $query = "inbox";
            if (request()->input('query') === "sent") {
                $query = "sent";
                $messages = Message::query()->where('reply_status', true)->orderBy('updated_at','DESC')->paginate(50);
            }
            return view('admin.messages.inbox', ['messages' => $messages,"query"=>$query]);

        } catch (\Exception $e) {
            Log::error("MESSAGE_US_ERROR" . $e->getMessage());
            return back()->with('error_message', 'Sorry, your message was not sent');
        }
    }

    public function read_message($id)
    {
        try {
            $message = Message::query()->find($id);
            $message->update(['read_at' => \Carbon\Carbon::now()]);
            return view('admin.messages.read', ['message' => $message]);

        } catch (\Exception $e) {
            Log::error("MESSAGE_US_ERROR" . $e->getMessage());
            return back()->with('error_message', 'Sorry, your message was not sent');
        }
    }

    public function compose_message($id)
    {
        try {
            $message = Message::query()->find($id);
            return view('admin.messages.compose', ['message' => $message]);

        } catch (\Exception $e) {
            Log::error("MESSAGE_US_ERROR" . $e->getMessage());
            return back()->with('error_message', 'Sorry, your message was not sent');
        }
    }

    public function reply_message($id)
    {
        try {
            $rules = [
                "email"   => "required|email",
                "subject" => "required|string|max:255",
                "message" => "required|string",
            ];
            $validation = Validator::make(request()->all(), $rules);
            if ($validation->fails()) {
                return back()->with('error_message', $validation->errors()->first());
            }
            $message = Message::query()->where('id', $id)->first();
            if (!$message) {
                return back()->with('error_message', "Sorry, this message was not found!!");
            }

            $reply_message_data = [
                "name" => $message->name,
                "message" => request()->message,
            ];

            $reply = Notification::route('mail', request()->email)->notify(new ReplyEmailNotification($reply_message_data, request()->subject));

            //* Update the message entry
            $message->update([
                "reply_status"  => true,
                "replied_at"    => \Carbon\Carbon::now(),
                "reply_text"    => request()->message
            ]);
            return route("send:reply")->with('success_message', 'Your message has been sent!!');

        } catch (\Exception $e) {
            Log::error("MESSAGE_US_ERROR" . $e->getMessage());
            return back()->with('error_message', 'Sorry, your message was not sent');
        }
    }

}
