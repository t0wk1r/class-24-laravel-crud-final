<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductInfoController;

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
    return view('welcome');
});

Route::view('/create', 'product.info.create');

Route::resource('product_infos', ProductInfoController::class);
Route::redirect('/info', 'product_infos');