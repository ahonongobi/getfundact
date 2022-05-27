<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BanqucaireController;
use App\Http\Controllers\CampagneController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\CNIController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContrubutionController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\OrgController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WithdrawalController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PourcentageController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SecureProtocolController;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('index');
});
// route for send data to database
Route::get('/faq', function () {
    return view('faq');
});


Route::get('/contact', function () {
    return view('contact');
});
Route::get('/termes', function () {
    return view('termes');
});
Route::get('/how-work', function () {
    return view('how-work');
});

Route::get('/why-choose-us', function () {
    return view('why-choose-us');
});
Route::get('/sucess', function () {
    return view('sucess');
});
//404 page not found function
Route::get('*', function () {
    return view('404');
});
//tarifs page 
Route::get('/tarifs', function () {
    return view('tarifs');
});
Route::get('login',[LoginController::class,'view'])->name('login');
Route::get('register',[RegisterController::class,'view'])->name('regiter');
Route::get('about',[MainController::class,'view'])->name('about');
Route::get('all-campagnes',[CampagneController::class,'view'])->name('all-campagnes');
Route::get('campagnes/{campagnes}',[CampagneController::class,'campagneCategory'])->name('campagne-category');
Route::post('search-compagn',[SearchController::class,'search'])->name('search');
Route::post('contact-nous',[ContactController::class,'send_mail'])->name('contact-nous');
//post route start here 
Route::post('register',[RegisterController::class,'register'])->name('regiter.post');
Route::post('login',[LoginController::class,'login']);
Route::get('auth/google', [LoginController::class,'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class,'handleGoogleCallback']);

Route::get('auth/facebook', [LoginController::class,'redirectToFacebook']);
Route::get('auth/facebook/callback', [LoginController::class,'handleFacebookCallback']);
//start here password forget 
Route::get('/password-forget',function()
{
   return view('forget-password');  
});
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
//end here password forget 
//middleware route
Route::group(["middleware"=>["auth","throttle:uploads"]],function(){
Route::get('my_space',[MainController::class,'indexUserDash']);
Route::get('campagne',[MainController::class,'indexCampagne']);
Route::get('profile',[MainController::class,'profile']);
Route::get('/my-campagne',[MainController::class,'myCampagne'])->name('my-campagne');
Route::get('/donation-details/{id}/{name}',[MainController::class,'donationDetails'])->name('donation-details');
Route::get('/donation-details-org/{id}/{name}',[MainController::class,'donationDetailsOrg'])->name('donation-details');

Route::get('/contributions',[MainController::class,'contributions'])->name('contributionss');
Route::get('/logout',[LoginController::class,'logout']);
Route::get('/edit/{id}',[EditController::class,'edit']);
Route::get('list-withdrawal',[WithdrawalController::class,'listWithdrawal']);
Route::any('listWithdrawal',[WithdrawalController::class,'listWithdrawalPost']);
//route for getlistWithdrawal
Route::get('/getlistWithdrawal',[WithdrawalController::class,'getlistWithdrawal']);
Route::get('user_dash.withdrawal',[WithdrawalController::class,'withdrawalTotal']);
//route org
Route::get('/my_org',[OrgController::class,'index']);
Route::get('/profile-org',[OrgController::class,'profileOrg']);
Route::get('/contributions-org',[OrgController::class,'contributionsOrg']);

Route::get('/my-campagne-org',[OrgController::class,'mycampagneOrg'])->name('my-campagne-org');
Route::get('withdrawal',[WithdrawalController::class,'view']);

Route::get('compagnes-org/{campagnes}',[OrgController::class,'campagneCategoryOrg'])->name('campagne-category-org');
//post
Route::post('addProfile',[ProfileController::class,'addProfile']);
Route::post('addBancaire',[BanqucaireController::class,'addBancaire']);
Route::post('changePassword',[ChangePasswordController::class,'updatePassword']);
Route::post('cni',[CNIController::class,'sendCNI']);
Route::post('addcampagnes',[CampagneController::class,'addCamapagnes']);
Route::post('/editcampagnes/{id}',[EditController::class,'editPost']);
Route::post('/withdrawal',[WithdrawalController::class,'withdrawal']);

Route::get('/notifications', function(){
             return view('admin.notifications');
});
Route::get('/delete-post/{id}',[CampagneController::class,'deletePost']);
//secure protocol route
Route::get('/secure-protocol',[SecureProtocolController::class,'index']);
Route::post('/code-verification',[SecureProtocolController::class,'codeVerification']);

});
Route::get('/state/{type}/{email}',[MainController::class,'viewSeparateFinale']);
Route::get('/separate/{email}',[MainController::class,'viewSeparate'])->name('separate');
Route::get('/getfund-donation-details/{id}/{name}',[MainController::class,'donationDetails'])->name('donation-details');
Route::get('/collecte/{id}',[MainController::class,'donationDetailsWithoutName'])->name('WithoutName');

Route::post('/contribution',[ContrubutionController::class,'sendMoney']);
Route::any('/checkout',[ContrubutionController::class,'checkout']);


Route::get('/my_org_social',[OrgController::class,'index']);
Route::get('my_space_social',[MainController::class,'indexUserDash']);
//route 
//midelware auth and throttle:uploads


Route::group(["middleware"=>["auth","throttle:uploads"]],function(){
    //admin
Route::get('/administration',[AdminController::class,'index']);
Route::get('/withdarwal',[AdminController::class, 'withdarwalView']);
Route::get('/campagnes-inactif',[AdminController::class,'campagnes_inactif']);
Route::get('/campagnes-actif',[AdminController::class,'campagnes_actif']);
Route::get('/users',[AdminController::class,'users']);
Route::get('/dashboard-interface',[AdminController::class,'index2']);

Route::get('/see-more/{id}',[AdminController::class,'see']);
Route::get('/see-more-campagne/{id}',[AdminController::class,'seeMoreCampagne']);

Route::get('/valider/{id}',[JuryController::class,'validatePost']);
Route::get('/unvalider/{id}',[JuryController::class,'unvalidatePost']);
Route::get('/activePost/{id}',[JuryController::class,'validateCampagne']);
Route::get('/unactivePost/{id}',[JuryController::class,'unvalidateCampagne']);


Route::get('/delete/{id}',[JuryController::class,'deleteUser']);

//start pay user here


Route::get('/pay/{id}',[JuryController::class,'pay']);
Route::get('/unpay/{id}',[JuryController::class,'unpay']);

//Search in admin Route
Route::post('search',[AdminController::class,'search']);
//POurcenrage route 
Route::get('/percentage',[AdminController::class,'percentage']);
//post route of percentage
Route::post('/percentage',[PourcentageController::class,'percentagePost']);
// create admin.percentage.delete route
Route::get('/percentage/delete/{id}',[PourcentageController::class,'percentageDelete'])->name('admin.percentage.delete');
});


//kkiapay
Route::get('callback/{slug}/{email}', [PaymentController::class, 'callback'])->name('callback');




