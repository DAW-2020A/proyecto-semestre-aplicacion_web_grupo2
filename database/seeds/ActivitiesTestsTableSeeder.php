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
        $tests = App\Test::all();
        foreach ($tests as $test) {
            foreach($activities as $activity) {
                ActivityTest::create([
                    'test_id' => $test->id,
                    'activity_id' => $activity->id
                ]);
            }
            /*for ($j = 0; $j < 20; $j++) {
                ActivityTest::create([
                    'test_id' => $tests[$j]->id,
                    'activity_id' => $activities[$j]->id,
                ]);
            }*/
        }

    }
}
