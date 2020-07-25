<?php

use App\Word;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla words
        Word::truncate();
        $faker = \Faker\Factory::create();

        // Obtenemos todas las sopas de letras de la bdd
        $searches = App\WordSearch::all();

        // Creamos 8 palabras para cada sopa de letras
        foreach ($searches as $search) {
            $num_palabras=8;
            for ($i=0;  $i<$num_palabras; $i++){
                Word::create([
                    'word' => $faker->word,
                    'word_search_id' => $search->id,
                ]);
            }
        }
    }
}
