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

            MultipleChoice::create([
                'CorrectAnswer'=>$faker->sentence,
                'Option1'=>$faker->sentence,
                'Option2'=>$faker->sentence,
                'Option3'=>$faker->sentence,
                'Option4'=>$faker->sentence,
            ]);
        }
    }
}
