<?php

namespace App\Http\Controllers\Area51;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
	/*
	*	index function
	*/
    public function index()
    {
    	return redirect('/area51/dash');
    }
}
