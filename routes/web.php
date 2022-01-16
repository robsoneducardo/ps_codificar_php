<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\BudgetController;

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
})->name('index');

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

Route::prefix('customer')->group(function(){
    # CREATE:
    // Route::get('/create', [CustomerController::class, 'create'])->name('customer-create');
    Route::post('/', [CustomerController::class, 'store'])->name('customer-store');

    # RETRIEVE:
    Route::get('/', [CustomerController::class, 'index'])->name('customer-index');

    # UPDATE:
    // Route::get('edit/{id}', [CustomerController::class, 'edit'])->where('id', '[0-9]+')
    // ->name('customer-edit');
    Route::put('/{id}', [CustomerController::class, 'update'])->where('id', '[0-9]+')
    ->name('customer-update');

    # DELETE:
    Route::delete('/{id}', [CustomerController::class, 'destroy'])->where('id', '[0-9]+')
    ->name('customer-destroy');
});

Route::prefix('budget')->group(function(){
    # CREATE:
    // Route::get('/create', [BudgetController::class, 'create'])->name('budget-create');
    Route::post('/', [BudgetController::class, 'store'])->name('budget-store');

    # RETRIEVE:
    Route::get('/', [BudgetController::class, 'index'])->name('budget-index');

    # UPDATE:
    // Route::get('edit/{id}', [BudgetController::class, 'edit'])->where('id', '[0-9]+')
    // ->name('budget-edit');
    Route::put('/{id}', [BudgetController::class, 'update'])->where('id', '[0-9]+')
        ->name('budget-update');

    # DELETE:
    Route::delete('/{id}', [BudgetController::class, 'destroy'])->where('id', '[0-9]+')
        ->name('budget-destroy');
});
