<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products as MProducts;

class Products extends Controller
{
    /*
    *	Read
    */
    public function read($id)
    {
    	return view('product', [
    		'PRODUCT' => MProducts::where('id', $id) -> first(),
    	]);
    }
}
