<?php

use App\MultipleChoice;
use Illuminate\Database\Seeder;

class MultipleChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        MultipleChoice::truncate();
        $faker = \Faker\Factory::create();

        //obtenemos las actividades desde la 61 hasta la 90
        $activities=App\Activity::skip(60)->take(30)->get();

        // Crear datos ficticios en la tabla
        foreach ($activities as $activity){

          $aux1 =$faker->word;
          $aux2 =$faker->sentence;
            MultipleChoice::create([
                'option1'=>$faker->word,
                'option2'=>$faker->sentence,
                'option3'=>$faker->word,
                'option4'=>$faker->sentence,
                'correct_answer'=>$faker->randomElement([$aux1,$aux2]),
                'activity_id' => $activity->id,
            ]);
        }
    }
}
