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

        //Obtenemos todos los crosswords de la bdd
        $crosswords = App\Crossword::all();



        // Creamos 8 questions para cada crossword
        foreach ($crosswords as $crossword) {
            $num_palabras=8;
            for ($i=0;  $i<$num_palabras; $i++){
                Question::create([
                    'word' => $faker->word,
                    'definition' => $faker->sentence,
                    'crossword_id' => $crossword->id,
                    ]);
            }
        }
    }
}
