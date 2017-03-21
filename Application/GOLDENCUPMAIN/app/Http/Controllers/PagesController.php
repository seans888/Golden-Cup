<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function getIndex(){
        return view('pages.home');
    }

    public function getAbout(){
        return view('pages.about');
    }

    public function getPayment(){
        return view('pages.payment_method');
    }
}
