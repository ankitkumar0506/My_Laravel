<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = products::all();
        return view('home',compact('products'));

    }
}

