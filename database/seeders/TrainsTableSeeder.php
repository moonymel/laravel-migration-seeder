<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10; $i++) {
            $new_train = new Train;
            $new_train->company = $faker->word();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->code = $faker->randomNumber(4, true);
            $new_train->n_carriages = $faker->randomDigitNotNull();
            $new_train->in_time = $faker->randomDigit(0, 1);
            $new_train->cancelled = $faker->randomDigit(0, 1);
        }
    }
}
