<?php

namespace App\Http\Controllers;

use App\Models\Biller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BillerController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $billers = Biller::where('user_id', $user->id)->get();
        // $billers = Biller::all();
        // $authBillers = Auth::user()->billers();

        return view('billers.index')
        ->with('billers', $billers);
    }

    public function create()
    {
        $categories = Auth::user()->categories;
        dump($categories);
        return view('billers.create')
        ->with('categories', $categories);
    }

    public function store(Request $request)
    {
        dump($request);

        $biller = new Biller;

        $biller->name = $request->name;
        $biller->category_id = $request->category;
        $biller->user_id = $request->user()->id;

        $biller->save();

        $biller = $biller->fresh();
         return redirect()->route('dashboard', $biller->id)->with('biller', $biller);
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
