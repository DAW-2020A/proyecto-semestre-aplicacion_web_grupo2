<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        $this->call(UsersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(CompletesTableSeeder::class);
        $this->call(CrosswordsTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(WordSearchesTableSeeder::class);
        $this->call(WordsTableSeeder::class);
        $this->call(MultipleChoicesTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(ActivitiesTestsTableSeeder::class);
        Schema::enableForeignKeyConstraints();
    }
}
