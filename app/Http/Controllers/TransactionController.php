<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Transaction;
use Illuminate\Http\Request;
use PostScripton\Money\Money;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Budget $budget)
    {
        // $transactions = Transaction::where()
        //     ->with('user')
        //     ->get();
        $transactions = $budget->transactions();

        dd($transactions);

        return view('budget.transactions')
            ->with('transactions', $transactions);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $transaction = new Transaction;
        $amount = new Money($request->amount);

        $transaction->name = $request->name;
        $transaction->amount = $amount;
        $transaction->budget_id = $request->budget_id;

        $transaction->save();

         $transaction = $transaction->fresh();

        return redirect()->back()->with('transaction', $transaction);

    }

    
}
