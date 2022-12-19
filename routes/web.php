<?php

use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
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

        // $budgets = Budget::where('user_id', Auth::id())
        //     ->with('user')
        //     ->get();
        $transactions = Transaction::all();
        $getincomes = Transaction::select('amount')->get()->toArray();
        $incomes = money(0);
        $expense = money(0);


        foreach ($getincomes as $key => $value) {

            $amount = $value['amount'];

            if ($amount->isPositive()) {
                $incomes->add($amount);

            } else {
                $expense->add($amount);
            }

        }

        $totalincomes = $incomes;


        $totalexpenses = $expense;

        return view('welcome')
            ->with('transactions', $transactions)
            ->with('totalincomes', $totalincomes)
            ->with('totalexpenses', $totalexpenses);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transactions');
    Route::post('/transaction', [TransactionController::class, 'store'])->name('store.transaction');

});
