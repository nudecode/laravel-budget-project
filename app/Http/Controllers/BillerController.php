<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillerController extends Controller
{
    public function index()
    {
        dd("index method");

        $user = Auth::user();

        $billers = $user->billers()
            ->with('user')
            ->get();

        return view('budget.index')
        ->with('billers', $billers);
    }
    public function create()
    {
        dd("create method");
    }

    public function store()
    {
        dd("store method");
    }

    public function show()
    {
        dd("show method");
    }

    public function update()
    {
        dd("update method");
    }

    public function destory()
    {
        dd("destory method");
    }
}
