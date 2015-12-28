<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	DB::table('users')->truncate();

    	DB::table('users')->insert([
    		[
	    		'name' 		=>	'Admin',
	    		'email'		=>	'admin@admin.com',
	    		'password'	=>	bcrypt('admin123')
    		],
    		[
	    		'name' 		=>	'Tapan',
	    		'email'		=>	'tapan29bd@gmail.com',
	    		'password'	=>	bcrypt('admin123')
    		]
    	]);
    }
}
