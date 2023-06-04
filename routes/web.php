<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\DoctorController;

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
    return view('page.beranda');
});

// Fitur price
Route::get('/userprice', [App\Http\Controllers\PriceController::class, 'index']);

// Fitur docter
Route::get('/userdoctor', [App\Http\Controllers\DoctorController::class, 'index']);


// Route::get('/doctor/tambah', [App\Http\Controllers\DoctorController::class, 'create']);
// Route::get('/doctor/edit/{id}', [App\Http\Controllers\DoctorController::class, 'edit']);
// Route::post('/doctor/simpan', [App\Http\Controllers\DoctorController::class, 'simpan']);
// Route::delete('/doctor/hapus/{id}', [App\Http\Controllers\DoctorController::class, 'hapus']);


// Route::get('/price/tambah', [App\Http\Controllers\PriceController::class, 'create']);
// Route::get('/price/edit/{id}', [App\Http\Controllers\PriceController::class, 'edit']);
// Route::post('/price/simpan', [App\Http\Controllers\PriceController::class, 'simpan']);
// Route::delete('/price/hapus/{id}', [App\Http\Controllers\PriceController::class, 'hapus']);


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware('auth')->group(function () {
//     Route::view('about', 'about')->name('about');

//     // Fitur price
//     Route::get('/price', [App\Http\Controllers\PriceController::class, 'index']);
//     Route::get('/price/tambah', [App\Http\Controllers\PriceController::class, 'create']);
//     Route::get('/price/edit/{id}', [App\Http\Controllers\PriceController::class, 'edit']);
//     Route::post('/price/simpan', [App\Http\Controllers\PriceController::class, 'simpan']);
//     Route::delete('/price/hapus/{id}', [App\Http\Controllers\PriceController::class, 'hapus']);

//     // Fitur docter
//     Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index']);
//     Route::get('/doctor/tambah', [App\Http\Controllers\DoctorController::class, 'create']);
//     Route::get('/doctor/edit/{id}', [App\Http\Controllers\DoctorController::class, 'edit']);
//     Route::post('/doctor/simpan', [App\Http\Controllers\DoctorController::class, 'simpan']);
//     Route::delete('/doctor/hapus/{id}', [App\Http\Controllers\DoctorController::class, 'hapus']);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    // Fitur price
    Route::get('/price', [App\Http\Controllers\PriceController::class, 'index']);
    //Route untuk menambahkan data pricelist
    Route::get('/price/tambah', [App\Http\Controllers\PriceController::class, 'create']);
    //Route untuk mengubah data pricelist
    Route::get('/price/edit/{id}', [App\Http\Controllers\PriceController::class, 'edit']);
    Route::get('/price/update', [App\Http\Controllers\PriceController::class, 'update']);
    Route::post('/price/update', [App\Http\Controllers\PriceController::class, 'update']);
    //Route untuk menyimpan data pricelist
    Route::post('/price/simpan', [App\Http\Controllers\PriceController::class, 'simpan']);
    //Route untuk menghapus data pricelist
    Route::delete('/price/hapus/{id}', [App\Http\Controllers\PriceController::class, 'hapus']);

    // Fitur dokter
    Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'index']);
    //Route untuk menambahkan data dokter
    Route::get('/doctor/tambah', [App\Http\Controllers\DoctorController::class, 'create']);
    //Route untuk mengubah data dokter
    Route::get('/doctor/edit/{id}', [App\Http\Controllers\DoctorController::class, 'edit']);
    Route::get('/doctor/update', [App\Http\Controllers\DoctorController::class, 'update']);
    Route::post('/doctor/update', [App\Http\Controllers\DoctorController::class, 'update']);
    //Route untuk menyimpan data dokter
    Route::post('/doctor/simpan', [App\Http\Controllers\DoctorController::class, 'simpan']);
    //Route untuk menghapus data dokter
    Route::delete('/doctor/hapus/{id}', [App\Http\Controllers\DoctorController::class, 'hapus']);
});
