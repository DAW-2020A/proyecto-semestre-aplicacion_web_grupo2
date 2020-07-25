<?php

use App\Complete;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Tymon\JWTAuth\Facades\JWTAuth;

class CompletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Complete::truncate();
        $faker = \Faker\Factory::create();
        $activities=App\Activity::take(30)->get();
        foreach ($activities as $activity){
            $aux = $faker->sentence;
            Complete::create([
                'complete_text' => $aux,
                'hidden_text' => $aux,
                'activity_id' => $activity->id,
            ]);
        }
    }
}
