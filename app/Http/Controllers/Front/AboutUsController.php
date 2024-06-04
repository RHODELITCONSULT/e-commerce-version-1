<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * Models
use App\Models\About;

//* Utilities
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    //Todo => View the about us page
    public function about_us(){
        try{
            $about = About::query()->where("info_type","about-us")->first();
            return view('about.about',["about"=>$about]);
        }catch(\Exception $e){
            Log::error("ABOUT_US_ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, about us page not loading up at the moment");
        }
    }
    //Todo => View the terms and conditions page
    public function terms_and_conditions(){
        try{
            $term = About::query()->where("info_type","terms-and-conditions")->first();
            return view('about.terms_and_conditions',["term"=>$term]);
        }catch(\Exception $e){
            Log::error("ABOUT_US_ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, about us page not loading up at the moment");
        }
    }

    public function admin_view_about(){
        try{
            return view('admin.pages.admin_about');
        }catch(\Exception $e){
            Log::error("ABOUT_US_ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, about us page not loading up at the moment");
        }
    }

    public function admin_view_terms(){
        try{
            return view('admin.pages.terms');
        }catch(\Exception $e){
            Log::error("ABOUT_US_ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, terms and conditions page not loading up at the moment");
        }
    }

    //Todo => Add about us information to the site(Only added by admins)
    public function add_about_us_info(Request $request){
        try{
            $validation_rules = [
                "company_name"=>"required|string|max:255",
                "information"=>"nullable|string",
                "terms"=>"nullable|string"
            ];
            $validation = Validator::make($request->all(),$validation_rules);
            if($validation->fails()){
                return back()->with('error_message',$validation->errors()->first());
            }

            if(request()->input("type")==="about_us"){
                $company_info = About::query()->updateOrCreate(
                    [
                        "info_type" =>"about-us"
                    ],
                    [

                        "info_type"     =>"about-us",
                        "company_name"  =>$request->company_name,
                        "information"   =>$request->information
                    ]
                );
            }
            elseif(request()->input("type")==="terms_and_conditions"){
                $company_info = About::query()->updateOrCreate(
                    [
                        "info_type" =>"terms-and-conditions"
                    ],
                    [

                        "info_type"=>"terms-and-conditions",
                        "company_name"=>$request->company_name,
                        "terms_and_conditions"=>$request->terms
                    ]
                );
            }

            if($company_info){
                return back()->with('success_message',"Platform Information has been successfully updated");
            }
            else{
                return back()->with('error_message',"Sorry, Platform information update encountered a problem");
            }

            $user = Auth::guard('admin')->user();
            if(!$user){
                return back()->with('error_message',"Sorry, you must be an admin to access this site");
            }

        }catch(\Exception $e){
            Log::error("ABOUT_US_ERROR".$e->getMessage());
            return back()->with('error_message',"Sorry, Site encountered a problem please try again later!!");
        }
    }
}
