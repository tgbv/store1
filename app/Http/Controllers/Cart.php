<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Counties as MCounties;
use App\Cities as MCities;
use App\Products as MProducts;

class Cart extends Controller
{
    /*
    *	Index
    */
    public function index()
    {
        $data = [];

        /*
        *   Build data which will be sent to blade engine
        */
        foreach(Session::get('products') as $key => $value)
        {
            $data[count($data)] = [
                                    "id" => $value,
                                    "title" => MProducts::select('title') -> where('id', $value) -> first() -> title,
                                    ];
        }

        /*
        *   Send data to blade engine which will output it to the browser
        */
    	return view('cart', [
            'OBJECTS' => $data,
    	]);
    }

    /*
    *	Nfo section
    */
    public function nfo()
    {
    	return view('nfo', [
    		'COUNTIES' => MCounties::select(['id', 'name']) -> get(),
            'CITIES' => MCities::select(['id', 'name', 'county_id']) -> get(),
    	]);
    }

    /*
    *   Create
    */
    public function create($id)
    {
        if(MProducts::where('id', $id) -> first() === null)
            return redirect('/?msg=Such product does not exist.');

        /*
        *   Update session with product id
        */
        if(Session::exists('products') === false)
            Session::put('products', [$id]);
        else
        {
            if(array_search($id, Session::get('products'), true) !== false)
                return redirect() -> back() -> with('msg', 'You have already added this product to your&nbsp;<a href="/cart#cart">cart</a>.');
            else
                Session::push("products", $id);
        }

        /*
        *   Return to previous page
        */
        return redirect() -> back() -> with('msg', 'Product added to your&nbsp;<a href="/cart#cart">cart</a>!');
    }

    /*
    *   Delete
    */
    public function delete($id)
    {
        $products = Session::get('products');

        unset($products[array_search($id, $products, true)]);

        Session::put('products', $products);

        return redirect() -> back() -> with('msg', 'Product removed from cart!');
    }
}
