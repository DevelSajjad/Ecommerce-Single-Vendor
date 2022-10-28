<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[IndexController::class,'index']);

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

});

//*********************************************User Route*********************************************** */
Route::group(['prefix' => 'user', 'middleware' => ['user', 'auth'], 'namespace' => 'User'], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::post('/update/profile',[UserController::class,'updateProfile'])->name('update.profile');
    Route::get('/userimage',[UserController::class,'userImage'])->name('user-image');
    Route::post('/update-profile-image',[UserController::class,'updateImage'])->name('update-profile-image');
    Route::get('/update-password',[UserController::class,'updatePasswordPage'])->name('update-password');
    Route::post('change-password',[UserController::class,'changePassword'])->name('change-password');
});

//******************************************FrontEnd Route************************************************* */


