<?php

use App\Administrator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla
        Administrator::truncate();$faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        // conviene hacerlo antes del for para que el seeder
        // no se vuelva lento.
        $password = Hash::make('123456');

        Administrator::create([
            'name'=> 'Administrador1',
            'lastname'=> 'Rodriguez',
            'email'=> 'admin1@prueba.com',
            'password'=> $password,
        ]);

        // Generar algunos usuarios para nuestra aplicacion
        for($i = 0; $i < 10; $i++) {
            Administrator::create([
                'name'=> $faker->name,
                'lastname'=> $faker->lastName,
                'email'=> $faker->email,
                'password'=> $password,
            ]);
        }
    }
}
