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

    public function create()
    {
        return view('budget.create');
    }

    public function store(Request $request)
    {
        // dd($request);

        // $budget = $request->validate([

        // ]);

        $budget = new Budget;

        $budget->name = $request->name;
        $budget->period = $request->period;
        $budget->period_start = $request->period_start;
        $budget->period_end = $request->period_end;
        $budget->user_id = $request->user()->id;

        $budget->save();

        return redirect()->back()->with('$budget', $budget);



    }


}
