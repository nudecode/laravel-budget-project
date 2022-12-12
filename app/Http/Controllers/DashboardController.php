<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Budget;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $budgets = Budget::where('user_id', Auth::user()->id)
            ->get();
        

        $budgetsid = collect ($budgets);

        $budget_id = $budgetsid->pluck('id');

        $budget_id->all();

            $getbudgetexpense = Transaction::select('amount')->where('budget_id', $budget_id)->get()->toArray();
            $expenses = money(0);

            foreach ($getbudgetexpense as $key => $value) {

                $total = $value['amount'];

                if ($total->lessThan(0)) {
                    $expenses->add($total);

                }

            }

            $budgetTotal = $expenses;

        return view('dashboard')
            ->with('budgets', $budgets)
            ->with('budgetTotal', $budgetTotal);
=======
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getincomes = Transaction::select('amount')->get()->toArray();
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

        return view('dashboard')
            ->with('incomes', $incomes)
            ->with('expenses', $expense);
>>>>>>> main
    }
}
