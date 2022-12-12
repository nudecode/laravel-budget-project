<?php

namespace App\Http\Controllers;

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
    }
}
