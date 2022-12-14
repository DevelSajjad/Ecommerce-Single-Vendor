<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShipareaController;
use App\Http\Controllers\Admin\SlideController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\User\CheckoutController;
use App\Http\Controllers\User\StripeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class,'index'])->name('home');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//*********************************************Admin Route******************************************** */

Route::group(['prefix' => 'admin', 'middleware' => ['admin', 'auth'], 'namespace' => 'App\Http\Controllers\Admin'], function () {
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
    // **************************Admin Profile***************************
    Route::get('edit-page',[AdminController::class,'editPage'])->name('edit-page');
    Route::post('admin-update-profile',[AdminController::class,'adminUpdate'])->name('admin.update.profile');
    Route::get('admin/image',[AdminController::class,'showImage'])->name('admin-image');
    Route::post('admin/update/image',[AdminController::class,'adminUpdateImage'])->name('admin-image-update');
    Route::get('change/password',[AdminController::class,'adminPassword'])->name('admin-password');
    Route::post('admin/update/password',[AdminController::class,'updatePassword'])->name('admin-update-password');
    // **************************Brand***********************
    Route::get('/brands',[BrandController::class,'brands'])->name('brands');
    Route::post('/add_brand',[BrandController::class,'addBrand'])->name('add-brand');
    Route::get('/edit-brand/{brand_id}',[BrandController::class,'edit']);
    Route::get('/delete/brand/{brand_id}',[BrandController::class,'brandDelete']);
    Route::post('/brand-update',[BrandController::class,'brandUpdate'])->name('brand-update');
    // ***************************Category********************
    Route::get('/category',[CategoryController::class,'categoryView'])->name('category');
    Route::post('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/delete-category/{catId}',[CategoryController::class,'deleteCat']);
    Route::get('/edit-category/{editId}',[CategoryController::class,'editShow']);
    Route::post('/update-category',[CategoryController::class,'updateCat'])->name('update-category');

    // *********************Sub Category*******************
    Route::get('/subcategory',[CategoryController::class,'subCategory'])->name('sub-category');
    Route::post('/addSubCategory',[CategoryController::class,'addSubcategory'])->name('add-subcategory');
    Route::get('/editSubCategory/{subId}',[CategoryController::class,'subEditShow']);
    Route::post('/updateSubcategory',[CategoryController::class,'updateSubcategory'])->name('update-subcategory');
    Route::get('deleteSubCategory/{deleteId}',[CategoryController::class,'deleteSub']);
    //********************SubsubCategory********************* */
    Route::get('/SubSubCategory',[CategoryController::class,'subSubCategory'])->name('sub-sub-category');
    Route::get('/subcategory/ajax/{cat_id}',[CategoryController::class,'getSubCat']);
    Route::post('/addSubSubCategory',[CategoryController::class,'addSubSubCategory'])->name('add-sub-sub-category');
    Route::get('/editSubSubCat/{editSubId}',[CategoryController::class,'subSubEditShow']);
    Route::post('/updateSubSubCategory',[CategoryController::class,'updateSubSubCat'])->name('Update-Sub-Sub');
    Route::get('/deleteSubSubCategory/{deleteId}',[CategoryController::class,'deleteSubSub']);
    // ***************Product****************
    Route::get('/add-product', [ProductController::class,'addProduct'])->name('add-product');
    Route::get('/subsubcategory/ajax/{subcatId}', [ProductController::class,'getSubSubCat']);
    Route::post('/store-product', [ProductController::class,'storeProduct'])->name('store-product');
    Route::get('/Manage_Product', [ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/edit-product/{id}', [ProductController::class,'editProduct']);
    Route::post('/update_product', [ProductController::class,'updateProduct'])->name('update-product');
    Route::get('multiImage-delete/{id}',[ProductController::class, 'deleteMultiImage']);
    Route::post('multiImage-update',[ProductController::class,'multiImageUpdate'])->name('multi-image-update');
    Route::post('thumb-image-update',[ProductController::class,'thumbImageUpdate'])->name('thumb-image-update');
    Route::get('/status-inactive/{id}',[ProductController::class,'statusInactive']);
    Route::get('/status-active/{id}',[ProductController::class,'statusActive']);
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct']);
    ///////////////////Slider//////////////////
    Route::get('/slider',[SlideController::class,'showSlide'])->name('slider');
    Route::post('/store-slide',[SlideController::class,'saveSlide'])->name('add-slide');
    Route::get('/slide-edit/{id}',[SlideController::class,'slideEdit']);
    Route::post('/slide-update',[SlideController::class,'slideUpdate'])->name('slide-update');
    Route::get('/delete-slide/{id}',[SlideController::class,'slideDelete']);
    Route::get('/slide-status-inactive/{id}',[SlideController::class,'statusInactive']);
    Route::get('/slide-status-active/{id}',[SlideController::class,'statusActive']);
    //////////////////////Coupon//////////////////////
    Route::get('/coupon', [CouponController::class, 'couponPage'])->name('coupon');
    Route::post('/add/coupon', [CouponController::class, 'addCoupon'])->name('add-coupon');
    Route::any('/edit-coupon/{couponId?}', [CouponController::class, 'editCoupon'])->name('update-coupon');
    Route::get('/delete/coupon/{couponId?}', [CouponController::class, 'deleteCoupon']);
    ///////////////////Admin Ship Area//////////////////////
    Route::get('/division_page', [ShipareaController::class, 'divisionPage'])->name('add-division-page');
    Route::post('/add_division', [ShipareaController::class, 'addDivision'])->name('add-division');
    Route::get('/edit_division/{division_id}', [ShipareaController::class, 'editDivisionPage']);
    Route::post('/update_division', [ShipareaController::class, 'updateDivision'])->name('update-division');
    Route::get('/delete/division/{id}', [ShipareaController::class, 'deleteDivision']);
    Route::get('/district_page', [ShipareaController::class, 'districtPage'])->name('add-district-page');
    Route::post('/add_district', [ShipareaController::class, 'addDistrict'])->name('add-district');
    Route::get('/delete/district/{district_id}', [ShipareaController::class, 'deleteDistrict']);
    Route::match(['get', 'post'], '/edit_district/{district_id}', [ShipareaController::class, 'editUpdateDistrict'])->name('edit-update');
    Route::get('/add-state-page', [ShipareaController::class, 'statePage'])->name('add-state-page');
    /////////////Get District with Ajax
    Route::get('/get_district/{district_id}', [ShipareaController::class, 'getDistrict']);
    ////End Ajax///////
    Route::post('/add_state', [ShipareaController::class, 'addState'])->name('add-state');
    Route::get('/edit_state/{id}', [ShipareaController::class, 'editState']);
    Route::post('/update_state', [ShipareaController::class, 'updateState'])->name('update-state');    
    Route::get('/delete/state/{id}', [ShipareaController::class, 'deleteState']); 
    
    //Orders
        
    Route::get('/pending/order', [OrderController::class, 'pendingOrder'])->name('pending-order');
});

//*********************************************User Route*********************************************** */
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::post('/update/profile',[UserController::class,'updateProfile'])->name('update.profile');
    Route::get('/userimage',[UserController::class,'userImage'])->name('user-image');
    Route::post('/update-profile-image',[UserController::class,'updateImage'])->name('update-profile-image');
    Route::get('/update-password',[UserController::class,'updatePasswordPage'])->name('update-password');
    Route::post('change-password',[UserController::class,'changePassword'])->name('change-password');
    // ===========Wishlist===========
    Route::get('/wishlist/view', [WishlistController::class, 'wishlistView']);
    Route::get('/wishlist/data', [WishlistController::class, 'wishlistData']);
    Route::get('/wishlist/remove/{wishlist_id}', [WishlistController::class, 'wishlistRemove']);
    /////////////Get District with Ajax
    Route::get('/get_district/{division_id}', [CheckoutController::class, 'getDistrict']);
    Route::get('/get_state/{district_id}', [CheckoutController::class, 'getState']);
    ////End Ajax///////
    ////////Payment//////////
    Route::post('/payment/info/store', [CheckoutController::class, 'paymentInfoStore'])->name('payment-info-store');
    Route::post('/payment/order/store', [StripeController::class, 'paymentOrderStore'])->name('stripe-order');
    ////////EndPayment//////////

    /////Order Route
    Route::get('/order', [UserController::class, 'orders'])->name('order-list');
    Route::get('order-view/{order_id}', [UserController::class, 'viewOrder']);
    Route::get('invoice-download/{order_id}', [UserController::class, 'invoiceDownload']);
});
Route::group(['middleware' => ['user', 'auth']], function () {
    // SSLCOMMERZ Start
    Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
    Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

    Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
    Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

    Route::post('/success', [SslCommerzPaymentController::class, 'success']);
    Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
    Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

    Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
    //SSLCOMMERZ END
});

//******************************************FrontEnd Route************************************************* */

Route::get('/english-language', [LanguageController::class, 'englishLanguage'])->name('english-language');
Route::get('/bangla-language', [LanguageController::class, 'banglaLanguage'])->name('bangla-language');
Route::get('/single-product-detail/{id}/{slug}',[IndexController::class, 'productDetail']);
// ===================Tag Wise Product=====================
Route::get('/tag/wise/product/{tag}', [IndexController::class, 'tagWiseProduct']);
//====================Subcategory Wise Product=====================
Route::get('/subcategory/product/{id}/{slug}', [IndexController::class, 'subCategoryWiseProduct']);
//====================Subsubcategory Wise Product=====================
Route::get('/subsubcategory/product/{id}/{slug}', [IndexController::class, 'subSubCategoryWiseProduct']);
Route::get('/product/view/model/{id}', [IndexController::class, 'productViewAjax']);
Route::post('/add/cart/data/{id}', [CartController::class, 'addCartData']);
Route::get('/cart/view/data', [CartController::class, 'viewCart']);
Route::get('/cart/remove/{rowId}', [CartController::class, 'removeCart']);
Route::get('/cart/list/page', [CartController::class, 'cartListView'])->name('cart-list');
Route::get('/cart/list/view', [CartController::class, 'cartListData']);
Route::get('/cart/quantity/increment/{rowId}', [CartController::class, 'cartQuantityIncrement']);
Route::get('/cart/quantity/decrement/{rowId}', [CartController::class, 'cartQuantityDecrement']);
// =====Wishlist=======
Route::post('add/wishlist/{id}', [CartController::class, 'addWishlist']);
////////Coupon///////////////
Route::post('/coupon_apply', [CartController::class, 'couponApply']);
Route::get('/coupon/calculation', [CartController::class, 'couponCalculation']);
Route::get('/coupon/remove', [CartController::class, 'couponRemove']);
/////////CheckOut//////////
Route::get('/user/checkout', [CartController::class, 'checkout'])->name('checkout');

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back()->with('message', 'All Cache Has Been Cleared');
});