<?php

use Illuminate\Database\Seeder;
use App\Course;
class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla
        Course::truncate();
        $faker = \Faker\Factory::create();
        //Generar algunos cursos
        for($i = 0; $i < 10; $i++) {
            Course::create([
                'name' => $faker->firstName,
                //genera un numero unico entre un rango de valores.
                'code' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
            ]);
        }
    }
}
