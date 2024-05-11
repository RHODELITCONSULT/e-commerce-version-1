<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Coupon;
use App\Models\AdminsRole;
use App\Models\Category;
use App\Models\Brand;
use App\Models\User;
use Validator;
use Session;
use Auth;

class CouponsController extends Controller
{
    public function Coupons(){
         Session::put('page','coupons');
        $coupons = coupon::get()->toArray();

        // Set Admin/Subadmins Permission for Coupons 
       $couponsModuleCount = AdminsRole::where(['subadmin_id'=>Auth::guard('admin')->user()->id,'module'=>'coupons'])->count();
       $couponsModule = array();
       if(Auth::guard('admin')->user()->type=="admin"){
            $couponsModule['view_access'] = 1;
            $couponsModule['edit_access'] = 1;
            $couponsModule['full_access'] = 1; 
       }else if($couponsModuleCount==0){
            $message = "This feature is restricted for you!";
            return redirect('admin/dashboard')->with('error_message',$message);
       }else{
            $couponsModule = AdminsRole::where(['subadmin_id'=>Auth::guard('admin')->user()->id,'module'=>'coupons'])->first()->toArray();
       }

        return view('admin.coupons.coupons')->with(compact('coupons','couponsModule'));
    }

     public function updateCouponStatus(Request $request)
    {
        if($request->ajax()){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if($data['status']=="Active"){
                $status = 0;
            }else{
                $status  = 1;
            }
            Coupon::where('id',$data['coupon_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'coupon_id'=>$data['coupon_id']]);
        }
    }

    public function deleteCoupon($id)
    {
        //Delete Coupon
        Coupon::where('id',$id)->delete();
        return redirect()->back()->with('success_message','Coupon deleted successfully!');
    }

    public function addEditCoupon(Request $request, $id=null){
        if($id==""){
            // Add Coupon
            $coupon = new Coupon;
            $selCats = array();
            $selUsers = array();
            $selBrands = array();
            $title = "Add Coupon";
            $message = "Coupon added successfully!";
        }else{
            // Edit Coupon
            $coupon = Coupon::find($id);
            $selCats = explode(",",$coupon['categories']);
            $selUsers = explode(",",$coupon['users']);
            $selBrands = explode(",",$coupon['brands']);
            $title = "Edit Coupon";
            $message = "Coupon updated successfully!";
        }

        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            if($id==""){
                // Product Validation
                $rules = [
                    'categories' => 'required',
                    'brands' => 'required',
                    'coupon_option' => 'required',
                    'coupon_type' => 'required',
                    'amount_type' => 'required',
                    'amount' => 'required|numeric',
                    'expiry_date' => 'required',
                    'coupon_code' => 'Unique:coupons',
                ];
            }else{
                // Product Validation
                $rules = [
                    'categories' => 'required',
                    'brands' => 'required',
                    'coupon_option' => 'required',
                    'coupon_type' => 'required',
                    'amount_type' => 'required',
                    'amount' => 'required|numeric',
                    'expiry_date' => 'required',
                ];

            }

             $customMessages = [
                'categories.required' => 'Select Categories',
                'brands.required' => 'Select Brands',
                'coupon_option.required' => 'Select Coupon Option',
                'coupon_type.required' => 'Select Coupon type',
                'amount_type.required' => 'Select Amount Type',
                'amount.required' => 'Enter Amount',
                'amount.numeric' => 'Enter Valid Amount',
                'expiry_date.required' => 'Enter Expiry Date',
            ];

            $this->validate($request,$rules,$customMessages);


            // Convert Categories Array to String
            if(isset($data['categories'])){
                $categories = implode(',',$data['categories']);
            }else{
                $categories = "";
            }

            // Convert Brands Array to String
            if(isset($data['brands'])){
                $brands = implode(',',$data['brands']);
            }else{
                $brands = "";
            }

             // Convert Users Array to String
            if(isset($data['users'])){
                $users = implode(',',$data['users']);
            }else{
                $users = "";
            }

            if($data['coupon_option']=="Automatic"){
                $coupon_code = Str::random(8);
            }else{
                $coupon_code = $data['coupon_code'];
            }

            $coupon->coupon_option = $data['coupon_option'];
            if($id==""){
                $coupon->coupon_code = $coupon_code;
            }
            $coupon->categories = $categories;
            $coupon->brands = $brands;
            $coupon->users = $users;
            $coupon->coupon_type = $data['coupon_type'];
            $coupon->amount_type = $data['amount_type'];
            $coupon->amount = $data['amount'];
            $coupon->expiry_date = $data['expiry_date'];
            $coupon->status = 1;
            $coupon->save();
            return redirect('admin/coupons')->with('success_message',$message);
        }

        //Get Categories and their Sub Categories
        $getCategories = Category::getCategories();

        // Get Brands
        $getBrands = Brand::where('status',1)->get()->toArray();

        // Get User Emails
        $getUsers = user::select('email')->where('status',1)->get()->toArray();

        return view('admin.coupons.add_edit_coupon')->with(compact('title','coupon','getCategories','getBrands','getUsers','selCats','selUsers','selBrands'));
    }
}
