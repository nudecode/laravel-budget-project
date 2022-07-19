<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        $transactions = Transaction::all()
            ->with('user')
            ->get();

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

        $transaction->save();

        return redirect()->back();

    }
}
