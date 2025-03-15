<?php
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
//Front Route
Route::name('front.')->controller(FrontController::class)->group(function () {
    //======================home page
    Route::get('/', 'index')->name('index');

    //======================subscripe
    Route::post('/subscriber/store', 'storeSubscribe')->name('subscribe.store');


    //======================contct
    Route::post('/message/store', 'storeMessage')->name('message.store');

    //======================about page
    Route::get('/about', 'about')->name('about');

    //======================service page
    Route::get('/service', 'service')->name('service');

    //======================contact page
    Route::get('/contact', 'contact')->name('contact');
});

//Admin Route
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {

    Route::middleware('auth')->group(function () {
        //======================home page
        Route::view('/', 'admin.index')->name('index');
        //======================Services
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });
        //======================features
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });
        //======================Message
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });
        //======================subscribers
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });
        //======================Testimonial
        Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });
        //======================Setting
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
        //======================Company
        Route::controller(CompanyController::class)->group(function () {
            Route::resource('companies', CompanyController::class);
        });
    });
    require __DIR__.'/auth.php';
});
