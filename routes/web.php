<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

route::get('/delete_catagory/{id}',[AdminController::class,'delete_catagory']);
route::get('/view_product',[AdminController::class,'view_product']);
route::POST('/add_product',[AdminController::class,'add_product']);








route::get('/product_details/{id}',[HomeController::class,'product_details']);
route::get('/product_search',[HomeController::class,'product_search']);


