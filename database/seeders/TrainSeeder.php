<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Train::truncate();

        
        for ($i=0; $i < 10; $i++) { 
            $train = new Train();
            $train->company = fake()->company();
            $train->departing_from = fake()->city();
            $train->arriving_at = fake()->city();
            $train->departing_time = fake()->time();
            $train->arriving_time = fake()->time();
            $train->train_numb = fake()->randomNumber(6, true);
            $train->coaches_numb = fake()->randomNumber(1, true);
            $train->on_time = fake()->boolean();
            $train->cancelled = fake()->boolean();

            $train->save();
        }
    }
}
