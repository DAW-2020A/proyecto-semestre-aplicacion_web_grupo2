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
        for ($i=0; $i<20; $i++){
            Test::create([
                'name' => $faker->sentence,
                'description'=>$faker->paragraph,
                'start_time'=>$faker->dateTimeInInterval($startDate='now', $endDate = '-2 hours',$timezone = 'America/Guayaquil'),
                'end_time'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+2 hours', $timezone = 'America/Guayaquil'),
            ]);

        }
    }
}
