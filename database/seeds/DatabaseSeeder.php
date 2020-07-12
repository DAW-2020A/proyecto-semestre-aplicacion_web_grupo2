<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdministratorsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(CompletesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(CrosswordsTableSeeder::class);
        $this->call(WordsTableSeeder::class);
        $this->call(WordSearchesTableSeeder::class);
        $this->call(MultipleChoicesTableSeeder::class);
        $this->call(TeachersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
    }
}
