<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index extends Controller
{
    /*
    *	Index 
    */
    public function index()
    {
    	return view('index');
    }
}
