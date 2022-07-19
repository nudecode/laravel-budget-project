<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Transaction;
use Illuminate\Http\Request;
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

        return view('budget.index')
            ->with('transactions', $transactions);
    }

    public function store()
    {
        //
    }

    
}
