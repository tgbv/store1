<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    /*
    *	Index
    */
    public function index()
    {
    	return view('cart', [

    	]);
    }

    /*
    *	Nfo section
    */
    public function nfo()
    {
    	return view('nfo', [
    		
    	]);
    }
}
