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
                'CorrectAnswer'=>$faker->randomElement([$aux1,$aux2]),
                'Option1'=>$faker->randomElement([$aux1,$aux2]),
                'Option2'=>$faker->randomElement([$aux1,$aux2]),
                'Option3'=>$faker->randomElement([$aux1,$aux2]),
                'Option4'=>$faker->randomElement([$aux1,$aux2]),
            ]);
        }
    }
}
