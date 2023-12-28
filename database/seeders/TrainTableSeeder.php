<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train();
            $newTrain->agency = $faker->sentence();
            $newTrain->departing_station = $faker->country();
            $newTrain->arrival_station = $faker->country();
            $newTrain->departing_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->postcode();
            $newTrain->carriages = $faker->numberBetween(5,25);
            $newTrain->on_time = $faker->randomElement(['yes', 'no']);
            $newTrain->cancelled = $faker->randomElement(['yes', 'no']);

            $newTrain->save();
        }
    }
}
