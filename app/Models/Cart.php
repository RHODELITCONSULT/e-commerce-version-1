<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
use Auth;

class Cart extends Model
{
    use HasFactory;

    public static function getCartItems(){
        if(Auth::check()){
            // If the user is logged in, check from Auth (user_id)
            $user_id = Auth::user()->id;
            $getCartItems = Cart::with('product')->where('user_id',$user_id)->get()->toArray();
        }else{
           /// If the is not logged in, check from Session (seesion_id) 
           $session_id = Session::get('session_id');
           $getCartItems = Cart::with('product')->where('session_id',$session_id)->get()->toArray();
        }  
        return $getCartItems;
    }

     public function product(){
        return $this->belongsTo('App\Models\Product','product_id')->with('brand','images');
    }
}
