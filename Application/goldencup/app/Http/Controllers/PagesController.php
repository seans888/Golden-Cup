<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        return view('pages/home');
    }


    public function getAbout(){
        return view('pages/about');
    }

    public function getCopiers(){
        return view('pages/copiers');
    }

    public function getParts(){
        return view('pages/parts');
    }


    public function getKyocera(){
        return view('pages/kyocera');
    }
    

    public function getRicoh(){
        return view('pages/ricoh');
    }


    public function getCart(){
        return view('pages/cart');
    }

    public function getPayment(){
        return view('pages/payment_methods');
    }

    public function getAccountSettings(){
        return view('pages/account_settings');
    }

}
