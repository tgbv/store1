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
            'description' => $request -> description,
            'status' => 'free',
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
        /*
        *   Update DB records
        */
    	MProducts::where('id', $id) -> update([
    		'title' => $request -> input('title'),
    		'price' => $request -> input('price'),
            'description' => $request -> input('description'),
            'status' => $request -> input('status'),
    	]);

        /*
        *   Return view
        */
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

    /*
    *   Delete
    */
    public function delete($id)
    {
        Storage::delete(MProducts::select('fname') -> where('id', $id) -> first() -> fname);
        
        MProducts::where('id', $id) -> delete();

        return view('area51.index', [
            'PRODUCTS' => MProducts::all(),
            'MESSAGE' => 'Product deleted with success!',
        ]);
    }
}
