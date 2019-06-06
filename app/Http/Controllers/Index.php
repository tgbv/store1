<?php

namespace App\Http\Controllers;

use App\Products as MProducts;
use Illuminate\Http\Request;

class Index extends Controller
{
    /*
    *	Index 
    */
    public function index()
    {
    	return view('index', [
    		'PRODUCTS' => MProducts::where('status', 'free') -> get(),
    	]);
    }
}
