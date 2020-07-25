<?php

use App\WordSearch;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Tymon\JWTAuth\Facades\JWTAuth;

class WordSearchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        //Vaciar la tabla.
        WordSearch::truncate();
        $faker = \Faker\Factory::create();

        // creamos 30 crosswords por cada 30 actividades
        for ($j = 0; $j < 30; $j++) {
            WordSearch::create([
                'clue'=>$faker->randomElement([true,false]),
                'size'=>$faker->randomElement(['small','medium','big']),
            ]);
        }
        Schema::enableForeignKeyConstraints();

        //        //Vaciar la tabla.
//        WordSearch::truncate();
//        $faker = \Faker\Factory::create();
//        $activities=App\Activity::skip(90)->take(30)->get();
//        foreach ($activities as $activity){
//            WordSearch::create([
//                'clue'=>$faker->randomElement([true,false]),
//                'size'=>$faker->randomElement(['small','medium','big']),
//                'activity_id' => $activity->id,
//            ]);
//        }
    }
}
