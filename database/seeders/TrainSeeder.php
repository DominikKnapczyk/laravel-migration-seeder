<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train;
            $train->company = $faker->company;
            $train->departure_station = $faker->city;
            $train->arrival_station = $faker->city;
            $train->departure_time = $faker->time('H:i:s');
            $train->arrival_time = $faker->time('H:i:s');
            $train->train_code = $faker->bothify('?? ####');
            $train->num_carriages = $faker->numberBetween(1, 12);
            $train->on_time = $faker->boolean(70);
            $train->cancelled = $faker->boolean(10);
            $train->save();
        }
    }
}