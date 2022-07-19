<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
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

        $transaction->name = $request->name;
        $transaction->amount = $request->amount;

        $transaction->save();

        return redirect()->back();

    }
}
