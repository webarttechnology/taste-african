<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\CategotyController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\user\BusinessListingController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\business\BusinessAuthenticationController;
use App\Http\Controllers\admin\AdminAmenityController;
use App\Http\Controllers\admin\AdminBusinessListingController;
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

//All Pages
    Route::get('/', [HomeController::class, 'front'])->name('front');
    Route::get('/authorDetails', [HomeController::class, 'authorDetails'])->name('authorDetails');

//Login Pages
    Route::get('login', [UserAuthController::class, 'loginForm'])->name('login');
    Route::post('login', [UserAuthController::class, 'login'])->name('user.login');


 // Business Owner register Page:
 Route::get('business/register', [BusinessAuthenticationController::class, 'registerForm'])->name('business.registerForm');
 Route::post('business/register', [BusinessAuthenticationController::class, 'businessRegister'])->name('business.register');


  // User register Page:
  Route::get('user/register', [UserAuthController::class, 'registerForm'])->name('user.registerPage');
  Route::post('user/register', [UserAuthController ::class, 'register'])->name('user.register');

  Route::middleware('auth')->group(function () 
  {
    // User Forget Passwordd Page:
    Route::get('user/forget-password', [BusinessAuthenticationController::class, 'forgot_Pass'])->name('user.forgot_Pass');
    Route::post('user/forget-password', [BusinessAuthenticationController::class, 'sendResetLink'])->name('user.forgot_Pass_action');
    Route::post('user/logout', [BusinessAuthenticationController::class, 'userLogout'])->name('user.logout');

    // Business Listing Dashboard Page:
     Route::get('/business-listing', [BusinessListingController::class, 'businessListing'])->name('business_listing');

    // Business Listing Page:
    Route::get('/business-listing', [BusinessListingController::class, 'businessListing'])->name('business_listing');
    Route::get('/business-listing/add', [BusinessListingController::class, 'add'])->name('business_listing_add');
    Route::post('/business-listing/store', [BusinessListingController::class, 'store'])->name('business_listing_store');
    Route::get('/business-listing/show', [BusinessListingController::class, 'show'])->name('business_listing_show');
    Route::get('/business-listing/details/{id}', [BusinessListingController::class, 'viewDetails'])->name('business_viewDetails');
    Route::get('/business-listing/edit/{id}', [BusinessListingController::class, 'edit'])->name('business_edit');
    Route::put('/business-listing/update/{id}', [BusinessListingController::class, 'update'])->name('business_update');
    Route::get('/business-listing/delete/{id}', [BusinessListingController::class, 'delete'])->name('business_delete');
    Route::post('/delete-image',  [BusinessListingController::class, 'deleteImage'])->name('delete.image');


    // User Profile Page:
    Route::get('/user/profile', [UserProfileController::class, 'profile'])->name('user.profile');
    Route::get('/user/password', [UserProfileController::class, 'changepassword'])->name('user.changepassword');
    Route::post('/user/password', [UserProfileController::class, 'changepasswordStore'])->name('user.changepasswordStore');
    Route::post('/user/update', [UserProfileController::class, 'updateOrCreate'])->name('user.updateOrCreate');
    
  });

Route::middleware(['auth', 'checkRole:user'])->group(function () {
    Route::get('user/dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
});

Route::middleware(['auth', 'checkRole:business_owner'])->group(function () {
    Route::get('business/dashboard', [BusinessAuthenticationController::class, 'businessDashboard'])->name('business.dashboard');
});










// ADMIN BELOW
Route::get('admin/login', [AuthController::class, 'loginPage'])->name('admin.loginPage');
Route::post('admin/store', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')->group(function () 
{
    Route::get('/dashboard', [AuthController::class, 'index'])->name('admin.dashboard');

    Route::get('/category-listing', [CategotyController::class, 'index'])->name('category_listing');
    Route::get('/category-listing/add', [CategotyController::class, 'add'])->name('category_listing_add');
    Route::post('/category-listing/store', [CategotyController::class, 'store'])->name('category_listing_store');
    Route::get('/category-listing/edit/{id}', [CategotyController::class, 'edit'])->name('category_listing_edit');
    Route::put('/category-listing/update/{id}', [CategotyController::class, 'update'])->name('category_listing_update');
    Route::get('/category-listing/delete/{id}', [CategotyController::class, 'delete'])->name('category_listing_delete');

    Route::get('/amenities', [AdminAmenityController::class, 'index'])->name('amenities');
    Route::get('/amenities/add', [AdminAmenityController::class, 'add'])->name('amenities_add');
    Route::get('/amenities/edit/{id}', [AdminAmenityController::class, 'edit'])->name('amenities_edit');
    Route::post('/amenities/storeOrUpdate/{id?}', [AdminAmenityController::class, 'storeOrUpdate'])->name('amenities.storeOrUpdate');
    Route::get('/amenities/delete/{id}', [AdminAmenityController::class, 'delete'])->name('amenities_delete');

    Route::get('/business-listing/show', [AdminBusinessListingController::class, 'businessListing'])->name('admin.business_listing_show');

});