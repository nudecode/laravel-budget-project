<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Budget;
=======
use Carbon\Carbon;
use App\Models\Biller;
>>>>>>> main
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
<<<<<<< HEAD
        // $transactions = Transaction::where()
        //     ->with('user')
        //     ->get();
        $transactions = $budget->transactions();

        dd($transactions);
=======
        $billers = Auth()->user()->billers();
        $periodStart = carbon::now()->startOfMonth();
        $periodEnd = carbon::now()->endOfMonth();
>>>>>>> main

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
            ->with('expenses', $expense)
            ->with('billers', $billers);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        dd($request);
        $transaction = new Transaction;
        $amount = new Money($request->amount);

<<<<<<< HEAD
        $transaction->budget_id = $request->id;
        $transaction->biller_id = $request->biller_id;
=======
        $transaction->name = $request->name;
        $transaction->due_at = now()->addDays(5);
>>>>>>> main
        $transaction->amount = $amount;
        $transaction->is_paid = $request->has('is_paid') ? 1 : 0;
        $transaction->user_id = Auth::user()->id;

        $transaction->save();

         $transaction = $transaction->fresh();

        return redirect()->back()->with('transaction', $transaction);

    }


}
