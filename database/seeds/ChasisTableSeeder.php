<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChasisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('chases')->delete();
        DB::table('chases')->insert([
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car01.png',
                'chasis' => 'public/images/car01t.png',
                'rueda1x' => 163,
                'rueda1y' => 188,
                'rueda2x' => 484,
                'rueda2y' => 188,
                'ruedasize' => 61,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car02.png',
                'chasis' => 'public/images/car02t.png',
                'rueda1x' => 176,
                'rueda1y' => 184,
                'rueda2x' => 474,
                'rueda2y' => 184,
                'ruedasize' => 57,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car03.png',
                'chasis' => 'public/images/car03t.png',
                'rueda1x' => 180,
                'rueda1y' => 197,
                'rueda2x' => 474,
                'rueda2y' => 197,
                'ruedasize' => 48,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car04.png',
                'chasis' => 'public/images/car04t.png',
                'rueda1x' => 152,
                'rueda1y' => 187,
                'rueda2x' => 502,
                'rueda2y' => 186,
                'ruedasize' => 60,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car05.png',
                'chasis' => 'public/images/car05t.png',
                'rueda1x' => 183,
                'rueda1y' => 189,
                'rueda2x' => 485,
                'rueda2y' => 189,
                'ruedasize' => 56,
                'created_at' => Carbon::now()
            ],
            [
                'nombre' => $faker->streetName,
                'fondo' => 'public/images/car06.png',
                'chasis' => 'public/images/car06t.png',
                'rueda1x' => 170,
                'rueda1y' => 192,
                'rueda2x' => 466,
                'rueda2y' => 192,
                'ruedasize' => 53,
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
