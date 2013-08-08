<?php

class UserTableSeeder extends Seeder{

	public function run()
	{
		

		User::create(array(
			'firstname' => 'Ahmed',
			'lastname' => 'Davis',
			'username' => 'admin',
			'password' => Hash::make('password'),
			'email' =>	'ahmed609@gmail.com'
		));
		
	}

}