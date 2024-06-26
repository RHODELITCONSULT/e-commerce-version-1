<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminsRole;
use App\Models\Category;
use App\Models\Product;
use Auth;
use Illuminate\Http\Request;
use Image;
use Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categories()
    {
        Session::put('page', 'categories');
        $categories = Category::with('parentcategory')->get();

        // Set Admin/Subadmins Permission for Categories
        $categoriesModuleCount = AdminsRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'categories'])->count();
        $categoriesModule = array();
        if (Auth::guard('admin')->user()->type == "admin") {
            $categoriesModule['view_access'] = 1;
            $categoriesModule['edit_access'] = 1;
            $categoriesModule['full_access'] = 1;
        } else if ($categoriesModuleCount == 0) {
            $message = "This feature is restricted for you!";
            return redirect('admin/dashboard')->with('error_message', $message);
        } else {
            $categoriesModule = AdminsRole::where(['subadmin_id' => Auth::guard('admin')->user()->id, 'module' => 'categories'])->first()->toArray();
        }

        return view('admin.categories.categories')->with(compact('categories', 'categoriesModule'));
    }

    public function updateCategoryStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;
            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            Category::where('id', $data['category_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'category_id' => $data['category_id']]);
        }
    }

    public function deleteCategory($id)
    {
        //Delete Category
        Category::where('id', $id)->delete();
        return redirect()->back()->with('success_message', 'Category deleted successfully!');
    }

    public function addEditCategory(Request $request, $id = null)
    {
        $getCategories = Category::getCategories();
        if ($id == "") {
            // Add category
            $title = "Add Category";
            $category = new Category;
            $message = "Category added successfully!";
        } else {
            // Edit category
            $title = "Edit Category";
            $category = Category::find($id);
            $message = "Category updated successfully!";
        }
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre"; print_r($data); die;

            if ($id == "") {
                $rules = [
                    'category_name' => 'required',
                    'url' => 'required|unique:categories',
                ];
            } else {
                $rules = [
                    'category_name' => 'required',
                    'url' => 'required',
                ];
            }

            $customMessages = [
                'category_name.required' => 'Category Name is required',
                'url.required' => 'Category URL is required',
                'url.unique' => 'Unique Category URL is required',
            ];

            $this->validate($request, $rules, $customMessages);

            // Unload Category Image
            if ($request->hasFile('category_image')) {
                $image_tmp = $request->file('category_image');
                if ($image_tmp->isValid()) {
                    //Get Image Extension
                    $extension = $image_tmp->getClientOriginalExtension();
                    //Generate New Image
                    $imageName = rand(111, 99999) . '.' . $extension;
                    $image_path = 'front/images/categories/' . $imageName;
                    // Upload the Category Image
                    // dd($image_tmp);
                    Image::make($image_tmp)->save($image_path);
                    $category->category_image = $imageName;
                }
            } else {
                $category->category_image = "";
            }
            if (empty($data['category_discount'])) {
                $data['category_discount'] = 0;
                if ($id != "") {
                    $categoryProducts = Product::where('category_id', $id)->get()->toArray();
                    foreach ($categoryProducts as $key => $product) {
                        // echo "<pre>"; echo "<pre>"; print_r($product); die;
                        if ($product['discount_type'] == "category") {
                            Product::where('id', $product['id'])->update(['discount_type' => '', 'final_price' => $product['product_price']]);
                        }
                    }
                }
            }

            $category->category_name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->url = Str::slug($data['category_name']);
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = 1;
            $category->save();
            return redirect('admin/categories')->with('success_message', $message);
        }
        return view('admin.categories.add_edit_category')->with(compact('title', 'getCategories', 'category'));
    }

    public function deleteCategoryImage($id)
    {
        // Get Category Image
        $categoryImage = Category::select('category_image')->where('id', $id)->first();

        // Get Category Image Path
        $category_image_path = 'front/images/categories/';

        // Delete Category Image from Categories folder if exists
        if (file_exists($category_image_path . $categoryImage->category_image)) {
            unlink($category_image_path . $categoryImage->category_image);
        }

        //Delete Category Image from categories table
        Category::where('id', $id)->update(['category_image' => '']);

        return redirect()->back()->with('success_message', 'Categoty image deleted successfully!');
    }

}
