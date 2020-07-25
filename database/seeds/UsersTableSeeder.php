<?php

use Illuminate\Database\Seeder;
use App\User;

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
            'lastname' =>'Prueba',
            'email' => 'admin@prueba.com',
            'password' => $password,
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for ($i = 0; $i < 9; $i++) {
            User::create([
                'name' => $faker->name,
                'lastname'=>$faker->lastName,
                'email' => $faker->email,
                'password' => $password,
                ]);
        }
    }
}
