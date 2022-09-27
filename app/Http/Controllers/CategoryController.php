<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index ()
    {
        $categories = Auth::user()->categories;

        dump($categories);

        dd('Index method');

        return view('budget.index')
        ->with('categories', $categories);


    }
}
