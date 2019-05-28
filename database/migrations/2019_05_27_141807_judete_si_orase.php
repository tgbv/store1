<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JudeteSiOrase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	$data = file_get_contents(__DIR__ .'/judete-orase.sql');

    	/*
    	*	Remove all comments from SQL import
    	*/
    	$data = explode(PHP_EOL, $data);

    	foreach($data as $k => $v)
    	{
    		if(strpos($v, '--') === 0)
    			unset($data[$k]);
    	}

    	unset($data[0]);
    	print_r($data);

    	$data = implode(PHP_EOL, $data);

        DB::unprepared($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
