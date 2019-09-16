<?php

namespace App\Http\Controllers;

use Storage as MStorage;
use Illuminate\Http\Request;

class Storage extends Controller
{
	/*
	*	Read
	*/
    public function read($fname)
    {
    	return response() -> file(storage_path() . '/app/' .$fname, ['Cache-Control' => 'public, max-age: 3600']);
    }
}
