<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\DriverController;
use App\Http\Controllers\Api\CustomerController;
use App\Exports\UserDataExport;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

//User Auth Api Route
Route::post('login', [UserController::class, 'login']);
Route::post('register', [UserController::class, 'register']);
Route::post('forgot', [UserController::class, 'forgot']);
Route::post('confirm-code', [UserController::class, 'confirmCode']);
Route::post('reset', [UserController::class, 'reset']);
Route::post('change-password', [UserController::class, 'changePassword']); //Bear Token Needed
Route::post('edit', [UserController::class, 'edit']);
Route::post('verify', [UserController::class, 'verifyEmail']);
Route::get('details', [UserController::class, 'details']); //Bear Token Needed
Route::get('delete-user', [UserController::class, 'delete']); //Delete All user
Route::post('update-fcm', [UserController::class, 'updateFcmToken']);
Route::post('updateLocation', [SSSTController::class, 'updateLocation']);

Route::group(['middleware' =>'auth:api'], function () {

    //User
    Route::post('delete-user', [UserController::class, 'deleteUser']); //User deleted

    // Start Notification Routes
    
    // Show All Notification
    Route::get('viewAllNotification', [NotificationController::class, 'viewAllNotification']);
    
    // Change Notification Status
    Route::post('changeStatusNotification', [NotificationController::class, 'changeStatusNotification']);
    
    // Delete Notification
    Route::post('deleteNotification', [NotificationController::class, 'deleteNotification']);
    
    // End Notification Routes

    // Stat Customer Routes
    
    // Show All Products
    Route::get('/show_products', [CustomerController::class, 'show_product']);
    
    // Show Single Products Detail
    Route::get('/show_products_detail/{id}', [CustomerController::class, 'show_products_detail']);
    
    // Customer Purchase Product
    Route::get('/purchase/{product_id}', [CustomerController::class, 'purchase']);
    
    // Customer Checkout Product
    Route::post('/checkout', [CustomerController::class, 'checkout']);
    
    // Tracking
    Route::get('/tracking/{order_id}', [CustomerController::class, 'tracking']);
    
    // End Customer Routes

    // Stat Driver Routes

    // Show All Order
    Route::get('/show_order', [DriverController::class, 'show_order']);
    
    // Show New Order
    Route::get('/new_order', [DriverController::class, 'new_order']);
    
    // Accept Order
    Route::get('/accept_order/{id}', [DriverController::class, 'accept_order']);
    
    // Reject Order
    Route::get('/reject_order/{id}', [DriverController::class, 'reject_order']);
    
    // My Order
    Route::get('/my_order', [DriverController::class, 'my_order']);
    
    // Order Pick Up
    Route::get('/order_pick/{id}', [DriverController::class, 'order_pick']);
    
    // Order Delivered
    Route::get('/order_delivered/{id}', [DriverController::class, 'order_delivered']);
    
    // End Driver Routes

});
