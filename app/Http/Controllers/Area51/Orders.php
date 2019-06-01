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
        /*
        *   Get everything
        */
        $data = MOrders::find($id);
        $data -> city = MOrders::find($id) -> city();
        $data -> county = MOrders::find($id) -> county();

        
        
    	return view('area51.order', [
    		'ORDER' => MOrders::where('id', $id) -> first(),
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
