<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Activity::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Activity::create([
                'title'=> $faker->sentence,
                'description'=> $faker->paragraph,
                'score'=> $faker->randomFloat('2','0.1','5'),
            ]);
        }
    }
}
