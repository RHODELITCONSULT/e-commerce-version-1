<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\contactUs;

class ContactUsController extends Controller
{
    public function contactUs(){
        return view('front.contacts.contactUs');
        if($request->ajax()){
            $data = $request->all();
             // echo "<pre>"; print_r($data); die;
            $getContactUs = ContactUs::where('email',$data['email'],'subject',$data['subject'],'message',$data['message'])->count();
            if($contactUsCount>0){
                return "exists";
            }else{
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
}
