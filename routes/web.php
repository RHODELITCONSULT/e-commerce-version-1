<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Front\IndexController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\WishlistController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('App\Http\Controllers\Front')->group(function () {
    Route::get('/', [IndexController::class, 'index']);

// Listing /Categories Routes
    $catUrls = Category::select('url')->where('status', 1)->get()->pluck('url');
// dd($catUrls);
    foreach ($catUrls as $key => $url) {
        Route::get($url, 'ProductController@listing');
    }

    // Product Details Page
    Route::get('product/{id}', 'ProductController@detail')->name("product.detail");

    // Get Product Attribute Price
    Route::post('get-attribute-price', 'ProductController@getAttributePrice');

    // Add to Cart
    Route::post('/add-to-cart', 'ProductController@addToCart');

    // Shopping Cart
    Route::get('cart', 'ProductController@cart');

    // Update Cart Item Quantity
    Route::post('update-cart-item-qty', 'ProductController@updateCartItemQty');

    // Delete Cart Item
    Route::post('delete-cart-item', 'ProductController@deleteCartItem');

    // Empty Cart
    Route::post('empty-cart', 'ProductController@emptyCart');

    // User Login
    Route::match(['get', 'post'], 'user/login', 'Usercontroller@loginUser')->name('login');

    // User Register
    Route::match(['get', 'post'], 'user/register', 'Usercontroller@registerUser');

    // Add Subscriber Email
    Route::post('add-subscriber-email', 'NewsletterController@addSubscriber');

    // Add Rating/Review
    Route::post('add-rating', 'RatingController@addRating');

    // User Confirm Account
    Route::match(['get', 'post'], 'user/confirm/{code}', 'Usercontroller@confirmAccount');

    // Search Product
    Route::get('search-products', 'ProductController@listing');

    Route::group(['middleware' => ['auth']], function () {

        // User Account
        Route::match(['get', 'post'], 'user/account', 'Usercontroller@account');

        // User Change Password
        Route::match(['get', 'post'], 'user/update-password', 'Usercontroller@updatePassword');

        // User Logout
        Route::get('user/logout', 'Usercontroller@logoutUser');

        // Apply Coupon
        Route::post('/apply-coupon', 'ProductController@applyCoupon');

        // Checkout
        Route::match(['get', 'post'], '/checkout', 'ProductController@checkout');

        // Save Delivery Address
        Route::post('save-delivery-address', 'AddressController@saveDeliveryAddress');

        // Get Delivery Address
        Route::post('get-delivery-address', 'AddressController@getDeliveryAddress');

        // Remove Delivery Address
        Route::post('remove-delivery-address', 'AddressController@removeDeliveryAddress');

        // Set Default Delivery Address
        Route::post('set-default-delivery-address', 'AddressController@setDefaultDeliveryAddress');

        // Order Thanks Page
        Route::get('/thanks', 'ProductController@thanks');

        // My Orders
        Route::get('/user/orders', 'OrderController@orders');

        // Order Details
        Route::get('/user/orders/{id}', 'OrderController@orderDetails');

        // Paypal
        Route::get('/paypal', 'PaypalController@paypal');
        Route::post('pay', 'PaypalController@pay')->name('payment');
        Route::get('success', 'PaypalController@success');
        Route::get('error', 'PaypalController@error');

        // TODO=>WISHLIST ROUTES
        Route::get("/wishlist",[WishlistController::class,"wishlists"])->name("wishlists");
        Route::get("/clear/wishlist",[WishlistController::class,"remove_wishlists"])->name('clear.wishlists');
        Route::get("/add/wishlist/{product_id}",[WishlistController::class,"add_to_wishlist"])->name("add.wishlist");
        Route::get("/remove/product/wishlist/{product_id}",[WishlistController::class, "remove_product"])->name("wishlist.remove");

    });

    // Forget Password
    Route::match(['get', 'post'], 'user/forgot-password', 'Usercontroller@forgotPassword');

    // Reset Password
    Route::match(['get', 'post'], 'user/reset-password/{code?}', 'Usercontroller@resetPassword');

});

Route::get('dowmload-order-pdf-invoice/{id}', 'App\Http\Controllers\Admin\OrderController@printPDFOrderInvoice');

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::match(['get', 'post'], 'login', 'AdminController@login');

    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', 'AdminController@dashboard');
        Route::match(['get', 'post'], 'update-password', 'AdminController@updatePassword');
        Route::match(['get', 'post'], 'update-details', 'AdminController@updateDetails');
        Route::post('check-update-password', 'AdminController@checkCurrentPassword');
        Route::get('logout', 'AdminController@logout');

        //Display CMS Pages (CRUD - READ)
        Route::get('cms-pages', 'CmsController@index');
        Route::post('update-cms-page-status', 'CmsController@update');
        Route::match(['get', 'post'], 'add-edit-cms-page/{id?}', 'CmsController@edit');
        Route::get('delete-cms-page/{id?}', 'CmsController@destroy');

        //Subadmins
        Route::get('subadmins', 'AdminController@subadmins');
        Route::post('update-subadmin-status', 'AdminController@updateSubadminStatus');
        Route::match(['get', 'post'], 'add-edit-subadmin/{id?}', 'AdminController@addEditSubadmin');
        Route::get('delete-subadmin/{id?}', 'AdminController@deleteSubadmin');
        Route::match(['get', 'post'], 'update-role/{id}', 'AdminController@updateRole');

        //Categories
        // Route::get('categories','CategoryController@categories');
        Route::get('categories', [CategoryController::class, 'categories']);
        Route::post('update-category-status', 'CategoryController@updateCategoryStatus');
        Route::get('delete-category/{id?}', 'CategoryController@deleteCategory');
        Route::get('delete-category-image/{id?}', 'CategoryController@deleteCategoryImage');
        // Route::match(['get','post'],'add-edit-category/{id?}','CategoryController@addEditCategory');
        Route::match(['get', 'post'], 'add-edit-category/{id?}', [CategoryController::class, 'addEditCategory']);

        //Products
        // Route::get('products','ProductsController@products');
        Route::get('products', [ProductsController::class, 'products'])->name("products");
        Route::post('update-product-status', 'ProductsController@updateProductStatus');
        Route::get('delete-product/{id?}', 'ProductsController@deleteProduct');
        Route::match(['get', 'post'], 'add-edit-product/{id?}', 'ProductsController@addEditProduct');

        // Product Images
        Route::get('delete-product-image/{id?}', 'ProductsController@deleteProductImage');

        // Product Video
        Route::get('delete-product-video/{id?}', 'ProductsController@deleteProductVideo');

        // Product Attributes
        Route::post('update-attribute-status', 'ProductsController@updateAttributeStatus');
        Route::get('delete-attribute/{id?}', 'ProductsController@deleteAttribute');

        // Brands
        Route::get('brands', 'BrandController@brands');
        Route::post('update-brand-status', 'BrandController@updateBrandStatus');
        Route::get('delete-brand/{id?}', 'BrandController@deleteBrand');
        Route::match(['get', 'post'], 'add-edit-brand/{id?}', 'BrandController@addEditBrand');
        Route::get('delete-brand-image/{id?}', 'BrandController@deleteBrandImage');
        Route::get('delete-brand-logo/{id?}', 'BrandController@deleteBrandLogo');

        // Banners
        Route::get('banners', 'BannersController@banners');
        Route::post('update-banner-status', 'BannersController@updateBannerStatus');
        Route::get('delete-banner/{id?}', 'BannersController@deleteBanner');
        Route::match(['get', 'post'], 'add-edit-banner/{id?}', 'BannersController@addEditBanner');

        // Coupons
        Route::get('coupons', 'CouponsController@coupons');
        Route::post('update-coupon-status', 'CouponsController@updateCouponStatus');
        Route::get('delete-coupon/{id?}', 'CouponsController@deleteCoupon');
        Route::match(['get', 'post'], 'add-edit-coupon/{id?}', 'CouponsController@addEditCoupon');

        // Users
        Route::get('users', 'Usercontroller@users');
        Route::post('update-user-status', 'Usercontroller@updateUserStatus');

        // View Orders
        Route::get('orders', 'OrderController@orders');

        // Order Details
        Route::get('orders/{id}', 'OrderController@orderDetails');

        // Update Order Status
        Route::post('/update-order-status', 'OrderController@updateOrderStatus');

        // Print HTML Order Invoice
        Route::get('print-order-invoice/{id}', 'OrderController@printHTMLOrderInvoice');

        // Print PDF Order Invoice
        Route::get('print-pdf-order-invoice/{id}', 'OrderController@printPDFOrderInvoice');

        // Shipping Charges
        Route::get('shipping-charges', 'ShippingController@shippingCharges');
        Route::post('/update-shipping-status', 'ShippingController@updateShippingStatus');
        Route::match(['get', 'post'], 'edit-shipping-charges/{id?}', 'ShippingController@editShippingCharges');

        // Newsletters Subsribers
        Route::get('subscribers', 'NewsletterController@subscribers');
        Route::post('update-subscriber-status', 'NewsletterController@updateSubscriberStatus');
        Route::get('delete-subscriber/{id?}', 'NewsletterController@deleteSubscriberStatus');
        Route::get('export-subscribers', 'NewsletterController@exportSubscribers');

        // Ratings
        Route::get('ratings', 'RatingController@ratings');
        Route::post('update-rating-status', 'RatingController@updateRatingStatus');
        Route::get('delete-rating/{id?}', 'RatingController@deleteRatingStatus');

        // Add Subscriber Email
        Route::post('add-subscriber-email', 'NewsletterController@addSubscriber');
    });
});

// TODO=>PAYSTACK ROUTES
Route::post('paystack/web_hook',[PaystackWebhookController::class,'handle']);
Route::post('paystack/callback',[PaystackWebhookController::class,'callback']);
