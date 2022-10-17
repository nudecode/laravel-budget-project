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
    Route::get('/budgets', [BudgetController::class, 'index'])->name('index.budget');
    Route::get('/budgets/{budget}', [BudgetController::class, 'show'])->name('show.budget');
    Route::get('/budgets/create', [BudgetController::class, 'create'])->name('create.budget');
    Route::post('/budgets', [BudgetController::class, 'store'])->name('store.budget');

    Route::get('/billers', [BillerController::class, 'index'])->name('index.billers');

    Route::get('/categories', [CategoryController::class, 'index'])->name('index.category');

    Route::post('/transaction', [TransactionController::class, 'store'])->name('store.transaction');

});
