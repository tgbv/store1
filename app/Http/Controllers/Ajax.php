<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cities as MCities;

class Ajax extends Controller
{
    /*
    *	Read cities from database. Output as JSON
    */
    public function cities($param)
    {
    	/*
    	*	Split $param
    	*/
    	$param = explode(':', $param);

    	/*
    	*	Check $param
    	*/
    	if($param === false || count($param) < 2)
    		return response() -> json("Invalid parameter.");

    	/*
    	*	Return data
    	*/
    	return response() -> json(MCities::select(['id', 'name']) -> where($param[0], $param[1]) -> orderBy('name', 'asc') -> get());
    }
}
