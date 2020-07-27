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
        //Vaciar la tabla.
        WordSearch::truncate();
        $faker = \Faker\Factory::create();

        //obtenemos las actividades desde la 91 hasta la 120
        $activities=App\Activity::skip(90)->take(30)->get();

        // Crear datos ficticios en la tabla
        foreach ($activities as $activity){
            WordSearch::create([
                'clue'=>$faker->randomElement([true,false]),
                'size'=>$faker->randomElement(['small','medium','big']),
                'activity_id' => $activity->id,
            ]);
        }

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
