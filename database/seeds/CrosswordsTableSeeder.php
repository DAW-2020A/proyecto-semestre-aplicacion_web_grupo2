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

    }
}
