<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	/*
	*	Table name
	*/
    protected $table = 'orders';

    /*
	*	Get county
	*/
	public function county()
	{
		return $this -> hasOne('App\Counties', 'id', 'county');
	}

	/*
	*	Get city
	*/
	public function city()
	{
		return $this -> hasOne('App\Cities', 'id', 'city');
	}

}
