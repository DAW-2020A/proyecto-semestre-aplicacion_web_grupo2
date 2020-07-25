<?php

use App\Activity;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Activity::truncate();
        $faker = \Faker\Factory::create();

        // Obtenemos la lista de todos los usuarios creados e
        // iteramos sobre cada uno y simulamos un inicio de
        // sesión con cada uno para crear actividades en su nombre
        $users = App\User::all();

        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123456']);

            // Y ahora con este usuario creamos algunas actividades
            $num_activities = 12;
            for ($j = 0; $j < $num_activities; $j++) {
                Activity::create([
                    'title' => $faker->sentence,
                    'description' => $faker->paragraph,
                    'score' => $faker->randomFloat('2', '0.1', '5'),
                ]);
            }
        }
    }
}
