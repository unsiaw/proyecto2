<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('tazas')->delete();
        DB::table('tazas')->insert([
            [
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza1.png',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza2.png',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza3.png',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza4.png',
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza5.png',
                'created_at' => Carbon::now()
            ],[
                'nombre' => $faker->streetName,
                'taza' => 'public/images/taza6.png',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
