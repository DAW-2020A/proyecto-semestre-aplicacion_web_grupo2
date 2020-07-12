<?php

use App\Word;
use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Word::truncate();
        $faker = \Faker\Factory::create();

        // Crear datos ficticios en la tabla
        for ($i = 0; $i < 20; $i++) {

            Word::create([
                'word'=>$faker->word,
            ]);
        }
    }
}
