<?php

use App\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Question::truncate();
        $faker = \Faker\Factory::create();
        // Crear datos ficticios en la tabla

        for ($i = 0; $i < 20; $i++) {

            Question::create([
                'word' => $faker->word,
                'definition' => $faker->sentence,
            ]);
        }
    }
}
