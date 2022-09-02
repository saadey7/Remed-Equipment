<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicController;
use App\Models\Product;

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
    $feature = Product::where('featured_product', 1)->take(4)->get();
    $purchase = Product::where('purchased_item', 1)->take(4)->get();
    return view('welcome', ['feature'=>$feature, 'purchase'=>$purchase]);
});

Route::get('/home', [BasicController::class, 'home']);

Route::get('/shop', [BasicController::class, 'shop']);

Route::get('/aboutus', [BasicController::class, 'aboutus']);

Route::get('/contactus', [BasicController::class, 'contactus']);

Route::post('/product_details', [BasicController::class, 'product_details']);

Route::post('sendQuote', [BasicController::class, 'sendQuote']);

Route::get('category', [BasicController::class, 'category']);


    



