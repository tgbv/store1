<?php

namespace App\Http\Controllers;

use Storage as MStorage;
use Illuminate\Http\Request;

class Storage extends Controller
{
    public function read($fname)
    {
    	return MStorage::download($fname);
    }
}
