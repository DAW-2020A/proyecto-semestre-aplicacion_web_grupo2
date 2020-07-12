<?php

use App\WordSearch;
use Illuminate\Database\Seeder;

class WordSearchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        WordSearch::truncate();
        $faker = \Faker\Factory::create();

        // Crear datos ficticios en la tabla
        for ($i = 0; $i < 20; $i++) {

            WordSearch::create([
                'clue'=>$faker->randomElement([true,false]),
                'size'=>$faker->randomElement(['pequeño','mediano','grande']),
            ]);
        }
    }
}
