<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Transaction;
use Illuminate\Http\Request;
use PostScripton\Money\Money;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $budgets = Budget::where('user_id', Auth::id())
        //     ->with('user')
        //     ->get();
        $transactions = Transaction::all();
        $incomes = Transaction::query()->sum('amount');
        
        $expenses = Transaction::sum('amount');

        return view('budget.index')
            ->with('transactions', $transactions)
            ->with('incomes', $incomes)
            ->with('expenses', $expenses);
    }

    public function store()
    {
        //
    }


}
