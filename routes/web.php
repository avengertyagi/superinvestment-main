<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DealController as AdminDealController;
use App\Http\Controllers\Admin\CompareController as AdminCompareController;
use App\Http\Controllers\Admin\AssetController as AdminAssetController;
use App\Http\Controllers\Admin\PaymentController as AdminPaymentController;
use App\Http\Controllers\Admin\FaqController  as AdminFaqController;
use App\Http\Controllers\Admin\DealDetailsController;
use App\Http\Controllers\Admin\FactorSettingsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Customer\LoginController;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Assets\AssetController;
use App\Http\Controllers\Customer\ProfileController;
use App\Http\Controllers\Deals\DealController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'home'])->name('home');
Route::get('/about-us', function () {
    return view('About');
});
Route::get('/message', function () {
    return view('started');
});


Route::get('/Finance', function () {
    return view('finance');
});
Route::get('/Term&condition', function () {
    return view('Terms');
});
Route::get('/invest', function () {
    return view('Howtoinvest');
})->name('invest');
Route::get('/Riskdisclosure', function () {
    return view('risk');
});
Route::get('/PaymentSchedule', function () {
    return view('payment');
});
Route::get('/wereach', function () {
    return view('wereach');
});
Route::get('/deals', ['middleware' => 'auth',function () {
    return view('deals');
}]);
Route::get('/active-deal', function () {
    return view('deal');
});
Route::get('/completed-deal', function () {
    return view('deal_completed');
});
Route::get('/dealdetail', function () {
    return view('deals.dealdetail');
});
Route::get('/dealsummary', function () {
    return view('deals.dealsummary');
});

Route::get('/Bank', function () {
    return view('Bank');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/kyc', function () {
    return view('kyc');
});

Route::get('/faq', [WelcomeController::class, 'faqPage'])->name('faqs');;

Route::post('/login',[LoginController::class, 'sendOtpToEmail'])->name('login');

Route::get('/otp/{token}', [LoginController::class, 'showOtpForm'])->name('otp.screen');

Route::post('/verify-otp', [LoginController::class, 'otpVerify'])->name('otp.verify');

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

    Route::post('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
    Route::post('/profile/uploadImage', [ProfileController::class, 'uploadImage'])->name('profile.uploadImage');

    Route::get('/kyc', [\App\Http\Controllers\Customer\KycController::class, 'startKyc'])->name('kyc.start');
    Route::post('/kyc/upload-file', [\App\Http\Controllers\Customer\KycController::class, 'uploadFile'])->name('kyc.uploadFile');
    Route::get('/kyc/confirm-e-sign', [\App\Http\Controllers\Customer\KycController::class, 'confirmESign'])->name('kyc.confirmESign');
    Route::post('/kyc/confirm-e-sign', [\App\Http\Controllers\Customer\KycController::class, 'confirmESign'])->name('kyc.confirmESign');
    Route::get('/kyc/bank-info', [\App\Http\Controllers\Customer\KycController::class, 'bankInfo'])->name('kyc.bankInfo');
    Route::post('/kyc/bank-info', [\App\Http\Controllers\Customer\KycController::class, 'bankInfo'])->name('kyc.bankInfo');
    Route::get('/kyc/bank-docs', [\App\Http\Controllers\Customer\KycController::class, 'bankDocs'])->name('kyc.bankDocs');
    Route::post('/kyc/bank-docs', [\App\Http\Controllers\Customer\KycController::class, 'bankDocs'])->name('kyc.bankDocs');


    Route::get('/deals', [Dealcontroller::class, 'showActiveDeals'])->name('deals');

    Route::get('/completed-deals', [Dealcontroller::class, 'showCompletedDeals'])->name('deals.complete');

    Route::get('/deal/{slug}', [Dealcontroller::class, 'showDeal'])->name('deals.show');

    Route::post('/asset/store', [AssetController::class, 'store'])->name('assets.store');

    Route::get('/dealsummary/{id}',[AssetController::class, 'dealSummary'])->name('assets.deals.summary');

    Route::post('/asset/payment-success',[AssetController::class, 'paymentSuccess'])->name('assets.payment.success');

    Route::get('/MyPortfolio', [ProfileController::class, 'myPortfolio'])->name('portfolio');


});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::namespace('Auth')->group(function(){

        //Login Routes
        Route::get('/login', [AdminLoginController::class, 'showLoginForm'])->name('login');

        Route::post('/login', [AdminLoginController::class, 'login'])->name('login');

        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');

        //Forgot Password Routes
        //Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        //Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

        //Reset Password Routes
        //Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
        //Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');

        // Email Verification Route(s)
        //Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
        //Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        //Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::redirect('/', '/admin/dashboard');

    Route::middleware(['auth:admin'])->group(function () {

        Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

        Route::resource('users', UserController::class);

        //Route::resource('permissions', PermissionController::class);

        //Route::resource('roles', RoleController::class);

        Route::resource('deals', AdminDealController::class);
        Route::post('deals/updateStatus', [AdminDealController::class, 'updateStatus'])->name('deals.updateStatus');


        Route::post('update-deals', [DealDetailsController::class, 'updateDeals'])->name('dealDetails.update');
        Route::post('update-deals/uploadFile', [DealDetailsController::class, 'uploadFile'])->name('dealDetails.uploadFile');

        Route::get('settings', [FactorSettingsController::class, 'showSettings'])->name('show.settings');

        Route::post('settings/update', [FactorSettingsController::class, 'updateSettings'])->name('update.settings');

        Route::resource('compares', AdminCompareController::class);
        Route::post('compares/updateLogo', [AdminCompareController::class, 'updateLogo'])->name('compares.updateLogo');

        Route::resource('faqs', AdminFaqController::class);





        Route::get('/customers', [CustomerController::class,'index'])->name('customers');
        Route::get('/customers/{id}', [CustomerController::class,'show'])->name('customers.view');

        Route::get('/assets', [AdminAssetController::class,'index'])->name('assets');
        Route::get('/assets/{id}', [AdminAssetController::class,'show'])->name('assets.view');

        Route::get('/payments', [AdminPaymentController::class,'index'])->name('payments');
        Route::get('/payments/{id}', [AdminPaymentController::class,'show'])->name('payments.view');


    });



});
