<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\user\UserDashboardController;
use App\Http\Controllers\admin\CategotyController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\business\BusinessListingController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\UserAuthController;
use App\Http\Controllers\user\UserReviewController;
use App\Http\Controllers\business\BusinessAuthenticationController;
use App\Http\Controllers\admin\AdminAmenityController;
use App\Http\Controllers\admin\AdminBusinessListingController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\PrivacyPolicyController;
use App\Http\Controllers\admin\TermConditionsController;

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
Route::get('/about', [HomeController::class, 'about'])->name('front.about');
Route::get('/blog', [HomeController::class, 'blog'])->name('front.blog');
Route::get('/blog/{slug}', [HomeController::class, 'blogDetails'])->name('front.blog.details');
Route::get('/faq', [HomeController::class, 'faq'])->name('front.faq');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('front.pricing');
Route::get('/contact', [HomeController::class, 'contact'])->name('front.contact');
Route::post('/email-send', [HomeController::class, 'emailSend'])->name('emailSend');
Route::post('/subscribe-store', [HomeController::class, 'subscribeStore'])->name('subscribe_store');
Route::post('/search', [HomeController::class, 'search'])->name('front.search');
Route::get('/get-cities/{category}',[HomeController::class, 'searchCity'])->name('front.search.city');
Route::get('/all-listings', [HomeController::class, 'allListings'])->name('front.allListing');
Route::get('/business-listing/details/{id}', [BusinessListingController::class, 'viewDetails'])->name('business_viewDetails');
Route::get('/privacy-policy',[HomeController::class, 'privacyPolicy'])->name('front.privacypolicy');
Route::get('/terms-conditions',[HomeController::class, 'termCondition'])->name('front.termcondition');
Route::get('/smart-search', [HomeController::class, 'smartSearch'])->name('smartSearch');
    Route::post('/listings/search', [UserDashboardController::class, 'search'])->name('listings.search');
    
Route::group(['middleware' => 'guest'], function () {

    //Login Pages
    Route::get('login', [UserAuthController::class, 'loginForm'])->name('login');
    Route::post('login', [UserAuthController::class, 'login'])->name('user.login');
    Route::get('verify/{string}', [UserAuthController::class, 'verify'])->name('user.verify');
    Route::get('user/forget-password', [BusinessAuthenticationController::class, 'forgot_Pass'])->name('user.forgot_Pass');
    Route::post('user/forget-password', [BusinessAuthenticationController::class, 'sendResetLink'])->name('user.forgot_Pass_action');
    Route::get('user/reset-password/{token}', [BusinessAuthenticationController::class, 'showResetForm'])->name('password.reset');
    Route::post('user/reset-password', [BusinessAuthenticationController::class, 'resetPassword'])->name('user.reset_password');

    // Business Owner register Page:
    Route::get('business/register', [BusinessAuthenticationController::class, 'registerForm'])->name('business.registerForm');
    Route::post('business/register', [BusinessAuthenticationController::class, 'businessRegister'])->name('business.register');

    // User register Page:
    Route::get('user/register', [UserAuthController::class, 'registerForm'])->name('user.registerPage');
    Route::post('user/register', [UserAuthController::class, 'register'])->name('user.register');
});

Route::middleware('auth')->group(function () {
    // User Forget Password Page:

    Route::post('user/logout', [BusinessAuthenticationController::class, 'userLogout'])->name('user.logout');

    // User Profile Page:
    Route::get('/user/profile', [UserProfileController::class, 'profile'])->name('user.profile');
    Route::get('/user/password', [UserProfileController::class, 'changepassword'])->name('user.changepassword');
    Route::post('/user/password', [UserProfileController::class, 'changepasswordStore'])->name('user.changepasswordStore');
    Route::post('/user/update', [UserProfileController::class, 'updateOrCreate'])->name('user.updateOrCreate');
    Route::get('/user/delete', [UserProfileController::class, 'deleteProfile'])->name('user.deleteprofile');
});

Route::middleware(['auth', 'checkRole:user,business_owner,admin'])->group(function () {
    // Route::get('user/dashboard', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('listing', [UserDashboardController::class, 'userDashboard'])->name('user.dashboard');
    Route::get('author-deatils/{listing_user_id}', [UserDashboardController::class, 'authorDetails'])->name('user.authorDetails');
    Route::get('user/author-listing-details/{id}', [UserDashboardController::class, 'viewDetails'])->name('user_listing_viewDetails');
    Route::post('user/review', [UserReviewController::class, 'review'])->name('user.review');

    Route::post('/listings/category/search', [UserDashboardController::class, 'categorySearch'])->name('listings.category.search');
  
});

Route::get('/category/listings/{id}', [HomeController::class, 'listingByCategory'])->name('category.listings');

Route::middleware(['auth', 'checkRole:business_owner'])->group(function () {
    Route::get('business/dashboard', [BusinessAuthenticationController::class, 'businessDashboard'])->name('business.dashboard');
    Route::get('/business-listing', [BusinessListingController::class, 'businessListing'])->name('business_listing');
    Route::get('/business-listing/add', [BusinessListingController::class, 'add'])->name('business_listing_add');
    Route::post('/business-listing/store', [BusinessListingController::class, 'store'])->name('business_listing_store');
    Route::get('/business-listing/show', [BusinessListingController::class, 'show'])->name('business_listing_show');
    // Route::get('/business-listing/details/{id}', [BusinessListingController::class, 'viewDetails'])->name('business_viewDetails');
    Route::get('/business-listing/edit/{id}', [BusinessListingController::class, 'edit'])->name('business_edit');
    Route::put('/business-listing/update/{id}', [BusinessListingController::class, 'update'])->name('business_update');
    Route::get('/business-listing/delete/{id}', [BusinessListingController::class, 'delete'])->name('business_delete');
    Route::post('/delete-image', [BusinessListingController::class, 'deleteImage'])->name('delete.image');
    Route::post('/add-country', [BusinessListingController::class, 'addCountry'])->name('addCountry');
});

// ADMIN BELOW
Route::get('admin/login', [AuthController::class, 'loginPage'])->name('admin.loginPage');
Route::get('admin/register', [AuthController::class, 'registerPage'])->name('admin.registerPage');
Route::post('admin/register', [AuthController::class, 'register'])->name('admin.register');
Route::post('admin/store', [AuthController::class, 'login'])->name('admin.login');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [AuthController::class, 'index'])->name('admin.dashboard');
    Route::get('forgot-password',[ AuthController::class, 'forgot_Pass'])->name('admin.forgot_Pass');
    Route::post('forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('admin.password.email');
    Route::get('reset-password/{token}', [AuthController::class, 'showResetForm'])->name('admin.password.reset');
    Route::post('reset-password', [AuthController::class, 'reset'])->name('admin.password.update');
    Route::get('/user-profile', [AuthController::class, 'userProfile'])->name('admin.userProfile');
    Route::get('/user-profile/delete/{id}/{status}', [AuthController::class, 'statusChange'])->name('statusChange');
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
    Route::post('/business-listing/status-change', [AdminBusinessListingController::class, 'statusChange'])->name('admin.statusChange');

    Route::get('/about', [AboutController::class, 'index'])->name('admin.about');
    Route::get('/about/add', [AboutController::class, 'add'])->name('admin.about_add');
    Route::post('/about/store', [AboutController::class, 'store'])->name('admin.about_store');
    Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('admin.about_edit');
    Route::put('/about/update/{id}', [AboutController::class, 'update'])->name('admin.about_update');
    Route::get('/about/delete/{id}', [AboutController::class, 'delete'])->name('admin.about_delete');

    Route::get('/contact', [ContactController::class, 'index'])->name('admin.contact');
    Route::get('/contact/add', [ContactController::class, 'add'])->name('admin.contact_add');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('admin.contact_store');
    Route::get('/contact/edit/{id}', [ContactController::class, 'edit'])->name('admin.contact_edit');
    Route::put('/contact/update/{id}', [ContactController::class, 'update'])->name('admin.contact_update');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('admin.contact_delete');

    Route::get('/faq', [FaqController::class, 'index'])->name('admin.faq');
    Route::get('/faq/add', [FaqController::class, 'add'])->name('admin.faq_add');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('admin.faq_store');
    Route::get('/faq/edit/{id}', [FaqController::class, 'edit'])->name('admin.faq_edit');
    Route::put('/faq/update/{id}', [FaqController::class, 'update'])->name('admin.faq_update');
    Route::get('/faq/delete/{id}', [FaqController::class, 'delete'])->name('admin.faq_delete');
    
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/blog/add', [BlogController::class, 'add'])->name('admin.blog_add');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog_store');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('admin.blog_edit');
    Route::put('/blog/update/{id}', [BlogController::class, 'update'])->name('admin.blog_update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'delete'])->name('admin.blog_delete');


    Route::get('/privacy-policy', [PrivacyPolicyController::class, 'index'])->name('admin.privacy_policy');
    Route::get('/privacy-policy/add', [PrivacyPolicyController::class, 'add'])->name('admin.privacy_policy_add');
    Route::post('/privacy-policy/store', [PrivacyPolicyController::class, 'store'])->name('admin.privacy_policy_store');
    Route::get('/privacy-policy/edit/{id}', [PrivacyPolicyController::class, 'edit'])->name('admin.privacy_policy_edit');
    Route::put('/privacy-policy/update/{id}', [PrivacyPolicyController::class, 'update'])->name('admin.privacy_policy_update');
    Route::get('/privacy-policy/delete/{id}', [PrivacyPolicyController::class, 'delete'])->name('admin.privacy_policy_delete');


    // Route::get('/terms-and-condition', [TermConditionsController::class, 'index'])->name('admin.terms_and_conditions');
    Route::post('/terms-and-condition/store', [TermConditionsController::class, 'store'])->name('admin.terms_and_conditions_store');
    Route::get('/terms-and-condition/edit/{id}', [TermConditionsController::class, 'edit'])->name('admin.terms_and_conditions_edit');
    Route::put('/terms-and-condition/update/{id}', [TermConditionsController::class, 'update'])->name('admin.terms_and_conditions_update');
    
});


Route::get('/non-existent-route', function () {
    abort(404);
});
