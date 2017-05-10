<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	
	/**
	* Run the database seeds.
			*
			* @return void
			*/
			public function run()
			{
        DB::table('users')->delete();

	  	  DB::table('users')->insert([
          [
            'name' => 'Ricardo',
            'email' => 'rferromoreno@gmail.com',
            'password' => bcrypt('1234'),
            'rango' => 'admin'
          ],
          [
            'name' => 'Matias',
            'email' => 'matiasmarzu@gmail.com',
            'password' => bcrypt('1234'),
            'rango' => 'admin'
          ],
          [
            'name' => 'Usuario',
            'email' => 'usuario@uns.edu.ar',
            'password' => bcrypt('usuario'),
            'rango' => 'usuario'
          ],
          [
            'name' => 'Admin',
            'email' => 'admin@uns.edu.ar',
            'password' => bcrypt('admin'),
            'rango' => 'admin'
          ]
			]);
	}
}
