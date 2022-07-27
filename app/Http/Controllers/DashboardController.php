<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        $budgets = Budget::where('user_id', Auth::user()->id)
            ->get();

        return view('dashboard')->with('budgets', $budgets);
    }
}
