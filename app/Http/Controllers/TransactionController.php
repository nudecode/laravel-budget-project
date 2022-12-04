<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;
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
        $periodStart = carbon::now()->startOfMonth();
        $periodEnd = carbon::now()->endOfMonth();

        $transactions = Transaction::all();
        $getincomes = Transaction::select('amount')->whereBetween('due_at',[$periodStart,$periodEnd])->get()->toArray();
        $incomes = money(0);
        $expense = money(0);

        foreach ($getincomes as $key => $value) {

            $amount = $value['amount'];

            if ($amount->isPositive()) {
                $incomes->add($amount);

            } else {
                $amount->isNegative();
                $expense->add($amount);
            }

        }

        return view('budget.index')
            ->with('transactions', $transactions)
            ->with('incomes', $incomes)
            ->with('expenses', $expense);
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
        $transaction->due_at = now()->addDays(5);
        $transaction->amount = $amount;
        $transaction->is_paid = $request->has('is_paid') ? 1 : 0;
        $transaction->user_id = Auth::user()->id;

        $transaction->save();

        return redirect()->back();

    }
}
