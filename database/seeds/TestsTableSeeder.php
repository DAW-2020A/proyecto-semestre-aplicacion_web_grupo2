<?php

use App\Test;
use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Test::truncate();

        $faker=\Faker\Factory::create();

        //Crear pruebas
        for ($i=0; $i<50; $i++){
            Test::create([
                'name' => $faker->sentence,
                'description'=>$faker->paragraph,
                'timeLimit'=>$faker->time('H:i:s', $max = 'now'),
                'date'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+5 days', $timezone = 'America/Guayaquil'),
            ]);

        }
    }
}
