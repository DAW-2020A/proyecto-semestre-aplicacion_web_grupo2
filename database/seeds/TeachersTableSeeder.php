<?php

use Illuminate\Database\Seeder;
use App\Teacher;
class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Teacher::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los teachers
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123456');

        Teacher::create([
            'name'=> 'Teacher',
            'lastname'=> 'Prueba',
            'email'=> 'teacher@prueba.com',
            'password'=> $password,
        ]);

        // Generar algunos profesores para nuestra aplicacion
        for($i = 0; $i < 10; $i++) {
            Teacher::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
