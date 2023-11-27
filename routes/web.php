<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\CategotyController;
use App\Http\Controllers\user\BusinessListingController;
use App\Http\Controllers\admin\AuthenticationController;

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



// User Login Page:
Route::get('user/register', [AuthenticationController::class, 'userRegisterPage'])->name('user.registerPage');
Route::post('user/store', [AuthenticationController::class, 'userRegister'])->name('user.register');
Route::get('user/login-page', [AuthenticationController::class, 'userLoginPage'])->name('user.loginPage');
Route::post('user/login', [AuthenticationController::class, 'userLogin'])->name('user.login');
Route::post('user/logout', [AuthenticationController::class, 'userLogout'])->name('user.logout');
Route::get('user/dashboard', [AuthenticationController::class, 'userDashboard'])->name('user.dashboard');

// User Business Listing Page:
Route::get('/business-listing', [BusinessListingController::class, 'businessListing'])->name('business_listing');
Route::get('/business-listing/add', [BusinessListingController::class, 'add'])->name('business_listing_add');
Route::post('/business-listing/store', [BusinessListingController::class, 'store'])->name('business_listing_store');
Route::get('/business-listing/show', [BusinessListingController::class, 'show'])->name('business_listing_show');


// ADMIN BELOW

Route::get('admin/login', [AuthenticationController::class, 'loginPage'])->name('admin.loginPage');
Route::post('admin/store', [AuthenticationController::class, 'login'])->name('admin.login');
Route::post('admin/admin-logout', [AuthenticationController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function () 
{
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/category-listing', [CategotyController::class, 'index'])->name('category_listing');
    Route::get('/category-listing/add', [CategotyController::class, 'add'])->name('category_listing_add');
    Route::post('/category-listing/store', [CategotyController::class, 'store'])->name('category_listing_store');
    Route::get('/category-listing/edit/{id}', [CategotyController::class, 'edit'])->name('category_listing_edit');
    Route::put('/category-listing/update/{id}', [CategotyController::class, 'update'])->name('category_listing_update');
    Route::get('/category-listing/delete/{id}', [CategotyController::class, 'delete'])->name('category_listing_delete');
    Route::post('/user/status-change', [CategotyController::class, 'statusChange'])->name('statusChange');   

    Route::get('/business-listing/show', [BusinessListingController::class, 'edit'])->name('business_listing_edit');

});
