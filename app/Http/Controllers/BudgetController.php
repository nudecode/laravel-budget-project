<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Cknow\Money\Money;
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
        $budgets = Budget::paginate(10);



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
        $getTotals = Transaction::select('amount')->get()->toArray();
        $incomes = Money::AUD(000);
        $expenses = Money::AUD(000);
        $balance = Money::AUD(000);



        foreach ($getTotals as $key => $value) {

            $test = Money::USD(500)->add(Money::USD(500));

            $total = Money::AUD($value['amount']);

            dump($total);


            if (Money::AUD($total)->greaterThan(Money::AUD(0))) {
                Money::AUD($incomes)->add(Money::AUD($total));

            } else {
                $expenses->add($total);
            }

        }

        $totalincomes = $incomes;
        $totalexpenses = $expenses;
        $balance = $totalincomes->subtract($totalexpenses);

        // dd($totalincomes, $totalexpenses);
        // $totalexpenses = 0;
        // $totalbalance = 0;

        return view('budget.show')
            ->with('budget', $budget)
            ->with('transactions', $transactions)
            ->with('totalincomes', $totalincomes)
            ->with('totalexpenses', $totalexpenses)
            ->with('balance', $balance);
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
