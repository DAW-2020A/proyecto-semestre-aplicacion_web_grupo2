<?php

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
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 9; $i++) {
            $user = User::create([
                'name' => $faker->name,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password,
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
        }
    }
}


