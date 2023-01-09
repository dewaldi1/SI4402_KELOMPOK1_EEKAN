<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


// auth route
Route::get('/login', [authController::class, 'Login'])->name('login')->middleware('guest');
Route::post('/login', [authController::class, 'cekLoginUser']);
Route::get('/register', [authController::class, 'register']);
Route::post('/register', [authController::class, 'userRegister']);
Route::get('/adminlogin', [authController::class, 'LoginAdmin']);
Route::post('/adminlogin', [authController::class, 'cekLoginAdmin']);
Route::get('/logout', [authController::class, 'logout'])->middleware('auth');

// user route
Route::get('/', [UserController::class, 'Home']);
Route::get('/detail/{id}', [UserController::class, 'detail']);
Route::get('/checkout/{id}', [UserController::class, 'Checkout']);
Route::post('/checkout', [UserController::class, 'CheckoutTransaction']);
Route::get('/riwayat', [UserController::class, 'riwayat']);
Route::get('/success', [UserController::class, 'success']);
Route::get('/shop', [UserController::class, 'Shop']);
Route::get('/about', [UserController::class, 'About']);
Route::get('/cart', [UserController::class, 'Cart']);

// admin route
Route::get('/admin', [adminController::class, 'Dashboard'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/daftarIkan', [adminController::class, 'daftarIkan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/tambahIkan', [adminController::class, 'tambahIkan'])->middleware(['auth', 'mustAdmin']);
Route::post('/admin/tambahIkan', [adminController::class, 'insertIkan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/editIkan/{id}', [adminController::class, 'editIkan'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/editIkan/{id}', [adminController::class, 'updateIkan'])->middleware(['auth', 'mustAdmin']);
Route::delete('/admin/hapusIkan/{id}', [adminController::class, 'deleteIkan'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/transaction/', [adminController::class, 'daftarTransaction'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/buktiPembayaran/{id}', [adminController::class, 'buktiPembayaran'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/detailTransactions/{id}', [adminController::class, 'detailTransactions'])->middleware(['auth', 'mustAdmin']);
Route::get('/admin/editStatus/{id}', [adminController::class, 'editStatus'])->middleware(['auth', 'mustAdmin']);
Route::put('/admin/editStatus/{id}', [adminController::class, 'konfirmasiStatus'])->middleware(['auth', 'mustAdmin']);



