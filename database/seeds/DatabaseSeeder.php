<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TazasTableSeeder::class);
        $this->call(ChasisTableSeeder::class);
        $this->call(AutosTableSeeder::class);
    }
}
