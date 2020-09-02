<?php

use App\ActivityTest;
use App\Course;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123456');
        User::create([
            'name' => 'Administrador',
            'lastname' => 'Prueba',
            'email' => 'admin@prueba.com',
            'password' => $password,
            'role' => 'ROLE_ADMIN',
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 9; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password,
                'role'=> $faker->randomElement(['ROLE_TEACHER','ROLE_STUDENT']),
            ]);

            /*$user->courses()->saveMany(
                $faker->randomElements(
                    array(
                        Course::find(1),
                        Course::find(2),
                        Course::find(3),
                        Course::find(4),
                        Course::find(5),
                        Course::find(6),
                        Course::find(7),
                        Course::find(8),
                        Course::find(9),
                        Course::find(10)
                    ),$faker->numberBetween(1, 10), false)
            );*/

            //Seed de activity_test_users
            /*$user->activity_tests()->saveMany(
                $faker->randomElements(
                    array(
                        ActivityTest::find(1),
                        ActivityTest::find(2),
                        ActivityTest::find(3),
                        ActivityTest::find(4),
                        ActivityTest::find(5),
                        ActivityTest::find(6),
                        ActivityTest::find(7),
                        ActivityTest::find(8),
                        ActivityTest::find(9),
                        ActivityTest::find(10),
                        ActivityTest::find(11),
                        ActivityTest::find(12),
                        ActivityTest::find(13),
                        ActivityTest::find(14),
                        ActivityTest::find(15),
                        ActivityTest::find(16),
                        ActivityTest::find(17),
                        ActivityTest::find(18),
                        ActivityTest::find(19),
                        ActivityTest::find(20)
                    ), $faker->numberBetween(1, 20), false
                )
            );*/
        }
    }
}



