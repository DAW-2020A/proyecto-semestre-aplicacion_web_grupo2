<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get array of id

        $userIds = App\User::all();
        $courseIds = App\Course::all();
        // courses_user
        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                DB::table('course_student')->insert(
                    [
                        'course_id' => $courseIds[$i]->id,
                        'user_id' => $userIds[$j]->id,
                        'created_at' => $userIds[$j]->created_at,
                        'updated_at' => $userIds[$j]->updated_at
                    ]
                );
            }
        }
    }
}
