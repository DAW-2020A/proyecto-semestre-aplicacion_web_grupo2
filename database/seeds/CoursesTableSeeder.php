<?php

use Illuminate\Database\Seeder;
use App\Course;
use Tymon\JWTAuth\Facades\JWTAuth;

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
        // Obtenemos la lista de todos los usuarios creados e
        // iteramos sobre cada uno y simulamos un inicio de
        // sesión con cada uno para crear cursos en su nombre
        $users = App\User::all();
        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123456']);

            // Por cada usuario creamos 1 curso
            $num_articles = 1;
            for ($j = 0; $j < $num_articles; $j++) {
                Course::create([
                    'name' => $faker->word,
                    //genera un numero unico entre un rango de valores.
                    'code' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
                    ]);
            }
        }
    }
}
