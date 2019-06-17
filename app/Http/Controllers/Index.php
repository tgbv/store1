<?php

namespace App\Http\Controllers;

use App\Products as MProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Index extends Controller
{
    /*
    *	Index 
    */
    public function index()
    {
    	$products = MProducts::where('status', 'free') -> get();
    	$tall = [];
    	$short = [];

    	foreach($products as $k => $object)
    	{
    		return response(Image::make(Storage::get($object -> fname)) -> height());

    		if(Image::make(Storage::get($object -> fname)) -> height() < 3000)
    			$short[$k] = $object;
    		else
    			$tall[$k] = $object;
    	}

    	return view('index', [
    		'TALL' => $tall,
    		'SHORT' => $short,
    	]);
    }
}
