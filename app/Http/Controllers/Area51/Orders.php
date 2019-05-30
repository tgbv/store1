<?php

namespace App\Http\Controllers\Area51;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Orders as MOrders;

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
    	return view('area51.order', [
    		'ORDER' => MOrder::where('id', $id) -> first(),
    	]);
    }
}
