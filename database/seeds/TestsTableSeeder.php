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
        //Vaciar la tabla.
        Test::truncate();
        $faker = \Faker\Factory::create();

        //obtenemos las actividades desde la 91 hasta la 120
        $courses=App\Course::all();

        // Crear datos ficticios en la tabla
        foreach ($courses as $course){
            Test::create([
                'name' => $faker->sentence,
                'description'=>$faker->paragraph,
                'start_time'=>$faker->dateTimeInInterval($startDate='now', $endDate = '-2 hours',$timezone = 'America/Guayaquil'),
                'end_time'=>$faker->dateTimeBetween($startDate = 'now', $endDate = '+2 hours', $timezone = 'America/Guayaquil'),
                'course_id' => $course->id,
            ]);
        }
    }
}
