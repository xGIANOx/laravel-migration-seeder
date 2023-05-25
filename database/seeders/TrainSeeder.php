<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            $train = new Train();
            $train->agency = $faker->company();
            $train->departure_station = $faker->city();
            $train->arriva_station = $faker->city();
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            $train->train_no = $faker->randomNumber(6, true);
            $train->carriages_no = $faker->numberBetween(6, 12);
            $train->on_time = $faker->boolean(90);
            $train->cancelled = $faker->boolean(10);
            $train->save();
        }
    }
}