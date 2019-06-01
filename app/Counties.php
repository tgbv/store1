<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counties extends Model
{
    protected $table = 'account_county';
    public $timestamps = false;

    /*
    *	Counties relationship
    */
    public function county()
    {
    	return $this -> belongsTo('App\Orders', 'county', 'id');
    }
}
