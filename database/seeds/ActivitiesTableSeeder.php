<?php

use App\Activity;
use App\Complete;
use App\Crossword;
use App\MultipleChoice;
use App\Question;
use App\Word;
use App\WordSearch;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        Complete::truncate();
        Crossword::truncate();
        Question::truncate();
        MultipleChoice::truncate();
        WordSearch::truncate();
        Word::truncate();

        $faker = \Faker\Factory::create();

        $limite = 5;
        for ($j = 0; $j < $limite; $j++) {
            $aux = $faker->sentence;
            $complete=Complete::create([
                'complete_text' => $aux,
                'hidden_text' => $aux,
            ]);
            $complete->activity()->create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'score' => $faker->randomFloat('2', '0.1', '5'),
            ]);

            $crossword=Crossword::create();
            $num_palabras=8;
            for ($i=0;  $i<$num_palabras; $i++){
                Question::create([
                    'word' => $faker->word,
                    'definition' => $faker->sentence,
                    'crossword_id' => $crossword->id,
                ]);
            }
            $crossword->activity()->create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'score' => $faker->randomFloat('2', '0.1', '5'),
            ]);

            $aux1 =$faker->word;
            $aux2 =$faker->sentence;
            $choice=MultipleChoice::create([
                'option1'=>$faker->word,
                'option2'=>$faker->sentence,
                'option3'=>$faker->word,
                'option4'=>$faker->sentence,
                'correct_answer'=>$faker->randomElement([$aux1,$aux2]),
            ]);
            $choice->activity()->create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'score' => $faker->randomFloat('2', '0.1', '5'),
            ]);

            $search=WordSearch::create([
                'clue'=>$faker->randomElement([true,false]),
                'size'=>$faker->randomElement(['small','medium','big']),
            ]);
            $num_palabras=8;
            for ($i=0;  $i<$num_palabras; $i++){
                Word::create([
                    'word' => $faker->word,
                    'word_search_id' => $search->id,
                ]);
            }
            $search->activity()->create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'score' => $faker->randomFloat('2', '0.1', '5'),
            ]);
        }
    }
}
