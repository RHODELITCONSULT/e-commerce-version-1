<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//* Models
//* Utilities
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    //Todo => View the wishlist page
    public function wishlists(){
        try{
            $user = Auth::user();
            if(!$user){
                return back()->with('error_message',"Sorry, you must be logged in to access this site");
            }
            $user_wishlists = $user->wishlists()->get();
            return view("front.wishlist.wishlist",["wishlists"=>$user_wishlists]);

        }catch(\Exception $e){
            Log::error("WISHLIST ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, wishlist view is not available at the moment");
        }
    }

    //Todo=>Add to Wishlist
    public function add_to_wishlist($product_id){
        try{
            $user = Auth::user();
            if(!$user){
                return back()->with('error_message',"Sorry, you must be logged in to access this site");
            }
            //* Adding to the wishlist
            $user->wishlists()->updateOrCreate(
                [
                    "user_id"   =>$user->id,
                    "product_id"=>$product_id
                ],
                [
                    "product_id"=>$product_id,
                ]
            );
            return back()->with('success-message','Successfully added to wishlist');

        }catch(\Exception $e){
            Log::error("WISHLIST ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, wishlist Addition is not available at the moment");
        }
    }


    //Todo => Clear wishlists
    public function remove_wishlists(){
        try{
            $user = Auth::user();
            if(!$user){
                return back()->with('error_message',"Sorry, you must be logged in to access this site");
            }
            $user->wishlists()->delete();
            return back()->with('success_message','You have successfully cleared all products from your wishlist');

        }catch(\Exception $e){
            Log::error("WISHLIST ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, you cannot clear your wishlist at the moment");        }
    }

    //Todo => Remove a product from the wishlist
    public function remove_product($product_id){
        try{
            $user = Auth::user();
            if(!$user){
                return back()->with('error_message',"Sorry, you must be logged in to access this site");
            }
            $product = $user->wishlists()->where('product_id',$product_id)->where("user_id",$user->id)->first();
            if(!$product){
                return back()->with("error_message","Sorry, product not found. Please try again later");
            }
            $product->delete();
            return back()->with('success_message','You have successfully cleared this product from your wishlist');

        }catch(\Exception $e){
            Log::error("WISHLIST ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, you cannot clear your wishlist at the moment");
        }
    }
}
