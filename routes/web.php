<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\CategotyController;
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

Route::get('/', [HomeController::class, 'front'])->name('front');

 // Business Owner Login Page:
Route::get('business/register', [BusinessAuthenticationController::class, 'userRegisterPage'])->name('business.registerPage');
Route::post('business/store', [BusinessAuthenticationController::class, 'userRegister'])->name('business.register');
Route::get('login', [BusinessAuthenticationController::class, 'userLoginPage'])->name('login');
Route::post('business/login', [BusinessAuthenticationController::class, 'userLogin'])->name('user.login');


 // User Login Page:
 Route::get('user/register', [UserAuthController::class, 'registerPage'])->name('user.registerPage');
 Route::post('store', [UserAuthController ::class, 'register'])->name('user.register');
 Route::get('user/login', [UserAuthController::class, 'login'])->name('user.loginPage');


Route::get('/authorDetails', [HomeController::class, 'authorDetails'])->name('authorDetails');

Route::middleware('auth')->group(function () 
{
    // User Login Page:
    Route::post('user/logout', [BusinessAuthenticationController::class, 'userLogout'])->name('user.logout');



    // User Login Page:
    Route::get('user/forget-password', [BusinessAuthenticationController::class, 'forgot_Pass'])->name('user.forgot_Pass');
    Route::post('user/forget-password', [BusinessAuthenticationController::class, 'sendResetLink'])->name('user.forgot_Pass_action');

    // User Business Listing Page:
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

    // Route::middleware('checkRole')->group(function () {
    //   Route::get('user/dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
    //   Route::get('business/dashboard', [BusinessAuthenticationController::class, 'userDashboard'])->name('business.dashboard');
    // });

    Route::middleware(['checkRole:user'])->group(function () {
        Route::get('user/dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
    });

    Route::middleware(['checkRole:business_owner'])->group(function () {
        Route::get('business/dashboard', [BusinessAuthenticationController::class, 'businessDashboard'])->name('business.dashboard');
    });
    
});

// ADMIN BELOW

Route::get('admin/login', [BusinessAuthenticationController::class, 'loginPage'])->name('admin.loginPage');
Route::post('admin/store', [BusinessAuthenticationController::class, 'login'])->name('admin.login');
Route::post('admin/admin-logout', [BusinessAuthenticationController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function () 
{
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/category-listing', [CategotyController::class, 'index'])->name('category_listing');
    Route::get('/category-listing/add', [CategotyController::class, 'add'])->name('category_listing_add');
    Route::post('/category-listing/store', [CategotyController::class, 'store'])->name('category_listing_store');
    Route::get('/category-listing/edit/{id}', [CategotyController::class, 'edit'])->name('category_listing_edit');
    Route::put('/category-listing/update/{id}', [CategotyController::class, 'update'])->name('category_listing_update');
    Route::get('/category-listing/delete/{id}', [CategotyController::class, 'delete'])->name('category_listing_delete');
    // Route::post('/user/status-change', [CategotyController::class, 'statusChange'])->name('statusChange');   


    Route::get('/amenities', [AdminAmenityController::class, 'index'])->name('amenities');
    Route::get('/amenities/add', [AdminAmenityController::class, 'add'])->name('amenities_add');
    Route::get('/amenities/edit/{id}', [AdminAmenityController::class, 'edit'])->name('amenities_edit');
    Route::post('/amenities/storeOrUpdate/{id?}', [AdminAmenityController::class, 'storeOrUpdate'])->name('amenities.storeOrUpdate');
    Route::get('/amenities/delete/{id}', [AdminAmenityController::class, 'delete'])->name('amenities_delete');

    Route::get('/business-listing/show', [AdminBusinessListingController::class, 'businessListing'])->name('admin.business_listing_show');

});
