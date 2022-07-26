<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/create-budget', [BudgetController::class, 'create'])->name('create.budget');
    Route::post('/budget', [BudgetController::class, 'store'])->name('store.budget');
    Route::post('/transaction', [TransactionController::class, 'store'])->name('store.transaction');

});
