<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Tazas;
use App\Chasis;
use App\User;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('autos')->delete();

         DB::table('autos')->insert([
            [
                'tazas_id' => Tazas::inRandomOrder()->first()->id,
                'chasis_id' => Chasis::inRandomOrder()->first()->id,
                'user_id' => User::inRandomOrder()->first()->id,
                'color' => $faker->hexColor,
                'token' => Uuid::generate(),
                'created_at' => Carbon::now()
            ],
             [
                 'tazas_id' => Tazas::inRandomOrder()->first()->id,
                 'chasis_id' => Chasis::inRandomOrder()->first()->id,
                 'user_id' => User::inRandomOrder()->first()->id,
                 'color' => $faker->hexColor,
                 'token' => Uuid::generate(),
                 'created_at' => Carbon::now()
             ],
             [
                 'tazas_id' => Tazas::inRandomOrder()->first()->id,
                 'chasis_id' => Chasis::inRandomOrder()->first()->id,
                 'user_id' => User::inRandomOrder()->first()->id,
                 'color' => $faker->hexColor,
                 'token' => Uuid::generate(),
                 'created_at' => Carbon::now()
             ],
             [
                 'tazas_id' => Tazas::inRandomOrder()->first()->id,
                 'chasis_id' => Chasis::inRandomOrder()->first()->id,
                 'user_id' => User::inRandomOrder()->first()->id,
                 'color' => $faker->hexColor,
                 'token' => Uuid::generate(),
                 'created_at' => Carbon::now()
             ],
             [
                 'tazas_id' => Tazas::inRandomOrder()->first()->id,
                 'chasis_id' => Chasis::inRandomOrder()->first()->id,
                 'user_id' => User::inRandomOrder()->first()->id,
                 'color' => $faker->hexColor,
                 'token' => Uuid::generate(),
                 'created_at' => Carbon::now()
             ],
             [
                 'tazas_id' => Tazas::inRandomOrder()->first()->id,
                 'chasis_id' => Chasis::inRandomOrder()->first()->id,
                 'user_id' => User::inRandomOrder()->first()->id,
                 'color' => $faker->hexColor,
                 'token' => Uuid::generate(),
                 'created_at' => Carbon::now()
             ]
        ]);
    }
}
