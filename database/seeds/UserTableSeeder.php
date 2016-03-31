<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Eloquent\User;

class UserTableSeeder extends Seeder {

	/**
	 * For admin seed
	 *
	 * @return void
	 */
	public function run()
	{
		User::create(array(
			'name'     => 'supreme',
			'username' => 'supreme',
			'email'    => 'supremewei@gmail.com',
			'password' => Hash::make('awesome99'),
		));

		User::create(array(
			'name'     => 'hm',
			'username' => 'hm',
			'email'    => 'cmyew.hm@msa.hinet.net',
			'password' => Hash::make('awesome99'),
		));
	}

}
