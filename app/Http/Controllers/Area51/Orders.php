<?php

namespace App\Http\Controllers\Area51;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Orders as MOrders;
use App\Products as MProducts;

class Orders extends Controller
{
    /*
    *	Index
    */
    public function index(string $status)
    {
    	$data = null;

    	switch($status)
    	{
    		case "pending": {
    			$data = MOrders::select(['id', 'created_at', 'status']) -> where('status', 'pending') -> orderBy('id', 'desc') -> get();
    			break;
    		}

    		case "completed": {
    			$data = MOrders::select(['id', 'created_at', 'status']) -> where('status', 'completed') -> orderBy('id', 'desc') -> get();
    			break;
    		}

    		default: {
    			$data = MOrders::select(['id', 'created_at', 'status']) -> orderBy('id', 'desc') -> get();
    			break;
    		}
    	}

    	return view('area51.orders', [
    		'ORDERS' => $data,
    	]);
    }

    /*
    *	Read
    */
    public function read(int $id)
    {
        /*
        *   Get everything
        */
        $data = MOrders::with(['city', 'county']) -> find($id);

        /*
        *   Parse product names
        */
        $products = explode(',', $data -> products);

        /*
        *   Parse product names
        */        
        foreach($products as $key => $id)
        {
            $tmp = MProducts::find($id);
            $products[$key] = '<a href="/area51/dash/edit/'.$tmp -> id.'" target="_BLANK">'. $tmp -> title .'</a>';
        }

        /*
        *   Re-assign product names
        */
        $data -> products = implode(', ', $products);
      
    	return view('area51.order', [
    		'ORDER' => $data,
    	]);
    }

    /*
    *   Patch
    */
    public function update(int $id)
    {
        /*
        *   Swap the status of the order
        */
        if(MOrders::where('id', $id) -> first() -> status === 'pending')
            MOrders::where('id', $id) -> update(['status' => 'processed']);
        else
            MOrders::where('id', $id) -> update(['status' => 'pending']);

        /*
        *   Return to order management
        */
        return $this -> read($id);
    }
}
