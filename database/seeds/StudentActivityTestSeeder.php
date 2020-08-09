<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentActivityTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = App\User::all();
        $acttestIds = App\ActivityTest::all();
        // courses_user
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                DB::table('activity_test_students')->insert(
                    [
                        'activity_test_id' => $acttestIds[$i]->id,
                        'student_id' => $userIds[$j]->id,
                        'score' => 25,
                        'created_at' => $acttestIds[$i]->created_at,
                        'updated_at' => $acttestIds[$i]->updated_at
                    ]
                );
            }
        }
    }
}
