<?php

namespace App\Http\Controllers\Area51;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Products as MProducts;
use App\Http\Controllers\Controller;

class Dash extends Controller
{
    /*
    *	Index
    */
    public function index()
    {
    	return view('area51.index', [
    		'PRODUCTS' => MProducts::all(),
    	]);
    }

    /*
    *	Create
    */
    public function create(Request $request)
    {
    	$fname = md5(time()) . '.' . $request -> file('file') -> extension();

    	Storage::putFileAs('', $request -> file('file'), $fname);

    	MProducts::insert([
    		'title' => $request -> input('title'),
    		'price' => $request -> input('price'),
    		'fname' => $fname,
    	]);

    	return view('area51.index', [
    		'MESSAGE' => 'Product uploaded with success!',
    		'PRODUCTS' => MProducts::all(),
    	]);
    }

    /*
    *	Update
    */
    public function update($id, Request $request)
    {
    	MProducts::where('id', $id) -> update([
    		'title' => $request -> input('title'),
    		'price' => $request -> input('price'),
    	]);

    	return view('area51.index', [
    		'MESSAGE' => 'Product updated with success!',
    		'PRODUCTS' => MProducts::all(),
    	]);
    }

    /*
    *	Read
    */
    public function read($id)
    {
    	return view('area51.product', [
    		'PRODUCT' => MProducts::where('id', $id) -> first(),
    	]);
    }
}
