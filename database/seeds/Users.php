<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
        	'name' => 'admin',
        	'email' => 'admin',
        	'password' => '$2y$10$gvn43mMfN2ggCKz5i5Zwc.sTsgco4x/1xvme1L/B8Q5/SNhCEgsVu',
        ]);
    }
}
