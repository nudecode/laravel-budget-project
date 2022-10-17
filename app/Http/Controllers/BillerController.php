<?php

namespace App\Http\Controllers;

use App\Models\Biller;
use Illuminate\Http\Request;

class BillerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $billers = Biller::all();

        return view('billers.index')
            ->with('billers', $billers);
    }
}
