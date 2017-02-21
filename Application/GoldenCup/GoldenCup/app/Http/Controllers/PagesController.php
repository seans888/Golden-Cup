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


}