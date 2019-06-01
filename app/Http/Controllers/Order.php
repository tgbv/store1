<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;	
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

use Illuminate\Database\Eloquent\Model as MEloquent;
use App\Orders as MOrders;

class Order extends Controller
{
    /*
    *	Create order
    */
    public function create(Request $request)
    {
    	/*
    	*	Validate request
    	*/
    	$data = $request -> validate([
    		'first_name' => 'required|max:50',
    		'last_name' => 'required|max:50',
    		'country' => 'required|max:2',
    		'county' => 'required|numeric|exists:account_county,id',
    		'city' => 'required|numeric|exists:account_city,id',
    		'address' => 'required|max:200',
    		'phone' => 'required|max:10',
    	]);

    	/*
    	*	Insert data into DB
    	*/
    	MEloquent::unguard();
    	MOrders::create(array_merge($data, [
    		'products' => implode(',', Session::get('products')),
            'status' => 'pending',
    	]));

    	/*
    	*	Clear session
    	*/
    	Session::remove('products');

    	/*
    	*	Redirect to homepage
    	*/
    	return redirect('/') -> with('msg', 'Order sent with success! It should arrive within 3 working days.');
    }
}
