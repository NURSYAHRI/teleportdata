<?php

use App\Http\Controllers\BtsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Models\Customer;

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

Route::get('/', function () {
    $jumlahcustomer = Customer::count();
    $jumlahcustomeractived = Customer::where('status','actived')->count();
    $jumlahcustomerdisable = Customer::where('status','disable')->count();
    $jumlahcustomerdismantle = Customer::where('status','dismantle')->count();
   
    return view('welcome', compact('jumlahcustomer','jumlahcustomeractived','jumlahcustomerdisable','jumlahcustomerdismantle'));
})->middleware('auth');

Route::get('/customer',[CustomerController::class,'index'])->name('customer')->middleware('auth');
Route::get('/tambahcustomer',[CustomerController::class,'tambahcustomer'])->name('tambahcustomer')->middleware('auth');
Route::post('/insertdatacs',[CustomerController::class,'insertdatacs'])->name('insertdatacs')->middleware('auth');
Route::get('/tampilkandatacs/{id}',[CustomerController::class,'tampilkandatacs'])->name('tampilkandatacs')->middleware('auth');
Route::post('/updatedatacs/{id}',[CustomerController::class,'updatedatacs'])->name('updatedatacs')->middleware('auth');
Route::get('/delete/{id}',[CustomerController::class,'delete'])->name('delete')->middleware('auth');
// export PDF
Route::get('/exportpdf',[CustomerController::class,'exportpdf'])->name('exportpdf')->middleware('auth');

// Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class,'loginproses'])->name('loginproses');

// Register
Route::get('/register',[LoginController::class,'register'])->name('register');
// menyimpan data ke database
Route::post('/registeruser',[LoginController::class,'registeruser'])->name('registeruser');
//logout
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


//BTS
Route::get('/databts',[BtsController::class,'index'])->name('databts')->middleware('auth');
Route::get('/tambahbts',[BtsController::class,'create'])->name('tambahbts')->middleware('auth');
Route::post('/insertdatabts',[BtsController::class,'store'])->name('insertdatabts')->middleware('auth');
Route::get('/deletebts/{id}',[BtsController::class,'deletebts'])->name('deletebts')->middleware('auth');


