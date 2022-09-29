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
        $budgets = Budget::all();



        dump($budgets);

        return view('budget.index')
            ->with('budgets', $budgets);
            // ->with('transactions', $transactions)
            // ->with('totalincomes', $totalincomes)
            // ->with('totalexpenses', $totalexpenses)
            // ->with('totalbalance', $totalbalance);
    }

    public function create()
    {
        return view('budget.create');
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $budget = Budget::where('id', $id)->firstOrFail();
         $transactions = Transaction::where('budget_id', $id)->get();
        // $transactions = $budget->transactions()->get();
        $getincomes = Transaction::select('amount')->get()->toArray();
        $incomes = money(0);
        $expense = money(0);
        $balance = money(0);

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
        $totalbalance = $totalincomes->subtract($totalexpenses);

        return view('budget.show')
            ->with('budget', $budget)
            ->with('transactions', $transactions)
            ->with('totalincomes', $totalincomes)
            ->with('totalexpenses', $totalexpenses)
            ->with('totalbalance', $totalbalance);
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

        $budget = $budget->fresh();

        return redirect()->route('index.budget', $budget->id)->with('budget', $budget);


    }


}
