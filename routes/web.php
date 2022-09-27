<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillerController;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;

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

Route::get('/budget', [BudgetController::class,'index'])->name('budget');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/budget/create', [BudgetController::class, 'create'])->name('create.budget');
    Route::get('/budget/{budget}', [BudgetController::class, 'index'])->name('index.budget');
    Route::post('/budget', [BudgetController::class, 'store'])->name('store.budget');

    Route::post('/transaction', [TransactionController::class, 'store'])->name('store.transaction');

    Route::get('/billers', [BillerController::class, 'index'])->name('index.billers');
    Route::get('/billers/create', [BillerController::class, 'create'])->name('create.biller');
    Route::get('/billers/{biller}', [BillerController::class, 'show'])->name('show.biller');
    Route::post('/billers', [BillerController::class, 'store'])->name('store.biller');

    Route::get('/category', [CategoryController::class, 'index'])->name('index.category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');
    Route::get('/category/{category}', [CategoryController::class, 'show'])->name('show.category');
    Route::post('/category', [CategoryController::class, 'store'])->name('store.category');
});
