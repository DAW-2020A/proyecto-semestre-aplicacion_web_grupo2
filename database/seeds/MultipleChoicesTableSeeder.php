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

        // Crear datos ficticios en la tabla
        for ($i = 0; $i < 20; $i++) {

            $aux1 =$faker->word;
            $aux2=$faker->sentence;
            MultipleChoice::create([
                'correct_answer'=>$faker->randomElement([$aux1,$aux2]),
                'option1'=>$faker->word,
                'option2'=>$faker->sentence,
                'option3'=>$faker->word,
                'option4'=>$faker->sentence,
            ]);
        }
    }
}
