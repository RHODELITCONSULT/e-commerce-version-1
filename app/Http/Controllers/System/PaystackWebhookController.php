<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;

//* Models
use App\Models\Order;
use App\Models\User;

//* utilities
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class PaystackWebhookController extends Controller
{
    //Todo => Handle the paystack webhook return data
    public function handle(Request $request)
    {

        //?Info => Writing the paystack data to txt file
        $input = @file_get_contents("php://input");
        $event = json_decode($input);
        file_put_contents("paystack.txt", $input);

        if ($event->event === "charge.success") {
            if ($event->data->metadata->payment_type === "OrderPayment") {
                $metadata = $event->data->metadata;

                //Todo => Find the person who made the order
                $user = User::where('id', $metadata->user_id)->first();
                if (!$user) {
                    Log::error("PAYSTACK_WEBHOOK_ERROR", "User not found Error");
                    return response()->json(['status' => 'failed', 'message' => "User not found"]);
                }

                //Todo => Update the order Details
                $orderDetails = Order::with('orders_products', 'user')->where('id', $metadata->order_id)->first();
                $order_details = $orderDetails->toArray();
                $orderDetails->update(["order_status" => "Payment Captured"]);

                //Todo => Send email to user
                $email = $user->email;
                $messageData = [
                    'email' => $email,
                    'name' => $user->name,
                    'order_id' => $metadata->order_reference,
                    'orderDetails' => $order_details,
                ];
                Mail::send('emails.order', $messageData, function ($message) use ($email) {
                    $message->to($email)->subject('Order confirmed - RHODEL-ECOMMERCE');
                });
                return response()->json(['status' => 'success', 'message' => "Payment Captured"]);
            }
        }
    }

    //Todo => Callback method to handle redirection to the checkout page
    public function callback()
    {
        return redirect("/thanks");
    }
}
