<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vacia tabla
        Student::truncate();

        $faker=\Faker\Factory::create();

        //Crear estudiantes
        $password = Hash::make('123456');
        for ($i=0; $i<50; $i++){
            Student::create([
                'name' => $faker->firstName,
                'lastname'=>$faker->lastName,
                'email'=>$faker->email,
                'password'=>$password,
            ]);

        }
    }
}
