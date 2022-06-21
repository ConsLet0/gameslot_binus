<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\homepagecontroller;
use Illuminate\Support\Facades\DB;
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

Route::get('/',[homepagecontroller::class, "homepage"]);

Route::get('/adminhome',[homepagecontroller::class, "adminhome"]);

Route::get('/aboutuspage',[homepagecontroller::class, "about"]);

Route::get('/user',[admincontroller::class, "user"]);
Route::get('/deleteuser/{id}',[admincontroller::class, "deleteuser"]);

// product management
Route::get('/product',[admincontroller::class, "product"]); //view product
Route::post('/uploadproduct',[admincontroller::class, "uploadproduct"]); //add product

Route::get('/update',[admincontroller::class, "update"]); //update voiew product links
Route::get('/updateproduct/{id}',[admincontroller::class, "updateproduct"]); //trigger update product
Route::post('/updateproductitem/{id}', [admincontroller::class,"updateproductitem"]);

Route::get('/updategenre/{id}',[admincontroller::class, "updategenre"]); //update product genre
Route::post('/updatenewgenre/{id}', [admincontroller::class, "updatenewgenre"]);

Route::get('/deleteproduct/{id}',[admincontroller::class, "deleteproduct"]); //delete product

Route::get('/detailproduct/{id}',[homepagecontroller::class, "detailproduct"]);

Route::get('/shoppage',[homepagecontroller::class, "shoppage"]);

//add to cart
Route::post('/addcart/{id}',[homepagecontroller::class, "addcart"]);

Route::get('/cartviewpage',[homepagecontroller::class, "cartviewpage"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
