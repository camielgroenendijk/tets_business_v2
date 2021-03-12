<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function frontpage(){
        return view('frontpage');
    }

    public function about(){
        return view('about');
    }
}
