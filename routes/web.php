<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;

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
    return view('index');
});

Route::prefix('seller')->group(function(){
    # CREATE:
    // Route::get('/create', [SellerController::class, 'create'])->name('seller-create');
    Route::post('/', [SellerController::class, 'store'])->name('seller-store');

    # RETRIEVE:
    Route::get('/', [SellerController::class, 'index'])->name('seller-index');

    # UPDATE:
    // Route::get('edit/{id}', [SellerController::class, 'edit'])->where('id', '[0-9]+')
    // ->name('seller-edit');
    Route::put('/{id}', [SellerController::class, 'update'])->where('id', '[0-9]+')
    ->name('seller-update');

    # DELETE:
    Route::delete('/{id}', [SellerController::class, 'destroy'])->where('id', '[0-9]+')
    ->name('seller-destroy');
});
