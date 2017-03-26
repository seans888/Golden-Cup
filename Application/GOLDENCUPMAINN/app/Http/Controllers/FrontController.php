<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $copiers=Product::all();

        return view('pages.home',compact('copiers'));
    }

    public function copiers()
    {
        $copiers=Product::all();

        return view('pages.copiers',compact('copiers'));
    }

    public function copier()
    {
        return view('pages.home');
    }
}
