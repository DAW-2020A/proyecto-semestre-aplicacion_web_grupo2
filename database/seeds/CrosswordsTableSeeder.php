<?php

use App\Crossword;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        //obtenemos las actividades desde la 31 hasta la 60
        $activities=App\Activity::skip(30)->take(30)->get();
        foreach ($activities as $activity){
            Crossword::create([
                'activity_id' => $activity->id,
            ]);
        }
    }
}
