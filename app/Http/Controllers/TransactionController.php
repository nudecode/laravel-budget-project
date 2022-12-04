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

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function summary()
    {
        // $budgets = Budget::where('user_id', Auth::id())
        //     ->with('user')
        //     ->get();
        $transactions = Transaction::all();
        $getincomes = Transaction::select('amount')->get()->toArray();
        $incomes = money(0);
        $expense = money(0);

        foreach ($getincomes as $key => $value) {

            $total = $value['amount'];

            if ($total->greaterThan(0)) {
                $incomes->add($total);

            } else {
                $expense->add($total);
            }

        }

        $totalincomes = $incomes;


        $totalexpenses = $expense;
        dump($totalexpenses);

        return view('budget.index')
            ->with('transactions', $transactions)
            ->with('totalincomes', $totalincomes)
            ->with('totalexpenses', $totalexpenses);
    }
}
