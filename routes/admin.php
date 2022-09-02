<?php

use App\Http\Controllers\Admin\QuestionOptionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\PushNotificationController;
use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

// Admin Login and Registration Here
    Route::namespace('auth')->group(function () {
    Route::get('/login',[LoginController::class,'show_login_form'])->name('admin.showlogin');
    Route::post('/login',[LoginController::class,'process_login'])->name('admin.storelogin');
    Route::get('/register',[LoginController::class,'show_signup_form'])->name('admin.showregister');
    Route::post('/register',[LoginController::class,'process_signup'])->name('admin.storeregister');
    Route::post('/logout',[LoginController::class,'logout'])->name('admin.logout');
    Route::get('reset_password', [LoginController::class,'passwordResetForm'])->name('admin.reset-form');
    Route::post('reset_password_forgot', [LoginController::class,'forgot'])->name('admin.forgot');
    Route::get('confirm-form', [LoginController::class,'confirmForm'])->name('admin.confirm-form');
    Route::post('reset_password_confirm', [LoginController::class,'reset'])->name('admin.pass.code');
     });

// Admin Protected Route Here
  Route::group(['middleware' => ['admin']], function () {
    Route::get('/', [AdminController::class,'index']);
    Route::resource('push-notification', PushNotificationController::class);
    Route::post('send-notification', [PushNotificationController::class,'sendNotification'])->name('send.notification');

    // Product Form Page
    Route::get('/addProduct',[AdminController::class,'addProduct'])->name('admin.product');

    // Store Product
    Route::post('/store', [AdminController::class, 'storeData']);

    // Featured Product
    Route::post('/feature', [AdminController::class, 'feature']);
    
    // Update Product
    Route::post('/update', [AdminController::class, 'update']);
    
    // Delete Product
    Route::post('/delete', [AdminController::class, 'delete']);
    
    // Order list
    Route::get('/quote', [AdminController::class, 'quote']);
    
    // Order Detail
    Route::post('/quote_detail', [AdminController::class, 'quote_detail']);
    
    // Order Approve
    Route::post('/most_purchase', [AdminController::class, 'most_purchase']);
    
    // User list
    Route::get('/user_list', [AdminController::class, 'user_list']);
    
    // Driver list 
    Route::get('/driver_list', [AdminController::class, 'driver_list']);
    
    // Driver Approve
    Route::post('/approve', [AdminController::class, 'approve']);


    });
