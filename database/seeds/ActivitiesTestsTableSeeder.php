<?php

use App\ActivityTest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Tymon\JWTAuth\Facades\JWTAuth;
class ActivitiesTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        ActivityTest::truncate();
        $faker = \Faker\Factory::create();

        $tests=App\Test::all();
        $activities=App\Activity::all();
        for($j=0;$j<20;$j++){
            ActivityTest::create([
                'test_id' => $tests[$j]->id,
                'activity_id' => $activities[$j]->id,
            ]);
        }

    }
}
