<?php

use App\Crossword;
use Illuminate\Database\Seeder;

class CrosswordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Crossword::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i<5; $i++){
            Crossword::create();
        }

    }
}
