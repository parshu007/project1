<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function method(){
        return view('view_new');
    }
	public function about(){
        return view('about');
    }
}
