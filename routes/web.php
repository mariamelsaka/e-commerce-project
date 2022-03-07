<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Dashboard\IndexDashboardController;
use App\Http\Controllers\Dashboard\UserDashboardController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ProductController;






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

Route::group(['prefix'=>'login'],function (){

    Route::get('/',[AuthController::class,"getLoginView"])->name('login');
    Route::post('/',[AuthController::class,"doLogin"]);



});


Route::group(['prefix'=>'register'],function (){

    Route::get('/',[AuthController::class,"getRegisterView"]);
    Route::post('/',[AuthController::class,"doRegister"]);
});

Route::get('logout',[AuthController::class,"doLogout"]);





Route::group(['prefix'=>'home','middleware'=>'auth'],function (){
    Route::get('/',[HomeController::class,"getBriefView"]);
    Route::get('/',[HomeController::class,"getIndex"]);


});

Route::group(['prefix'=>'about','middleware'=>'auth'],function (){
    Route::get('/',[AboutController::class,"getAboutView"]);
});


Route::group(['prefix'=>'/'],function (){
    Route::get('/menu',[\App\Http\Controllers\MenuController::class,"index"]);
    Route::post('/menu',[\App\Http\Controllers\MenuController::class,"addToCart"]);

});



Route::group(['prefix'=>'shopping-cart'],function (){
   Route::get('/',[\App\Http\Controllers\CartController::class,"index"]);
   Route::post('/delete',[\App\Http\Controllers\CartController::class,"deleteItemFromCart"]);
   Route::post('/delete-all',[\App\Http\Controllers\CartController::class,"deleteCart"]);
});






Route::group(['prefix'=>'tests'],function (){
    Route::get('/upload-file',[TestController::class,"getUploadView"]);
    Route::post('/upload-file',[TestController::class,"doUpload"]);
});


Route::group(['prefix'=>'/admin','middleware'=>'isAdmin'],function (){
   Route::get('/',[IndexDashboardController::class,"index"])->name('dashboard');
   Route::get('/users',[UserDashboardController::class,"index"])->name('dashboard');
    Route::get('/logout',[IndexDashboardController::class,"doLogout"])->name('users');
});

Route::group(['prefix'=>'/users','middleware'=>'isAdmin'],function (){
   Route::get('/',[UserDashboardController::class,"index"]);

});
Route::group(['prefix'=>'/index','middleware'=>'isAdmin'],function (){
   Route::get('/',[UserDashboardController::class,"index"]);

});

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::group(['prefix'=>'category','middleware'=>'auth'],function (){
    Route::get('/',[ProductController::class,"getCategoryView"]);


});
