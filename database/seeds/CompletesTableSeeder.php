<?php

use App\Complete;
use Illuminate\Database\Seeder;

class CompletesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Complete::truncate();
        $faker = \Faker\Factory::create();
        // Crear datos ficticios en la tabla

        for ($i = 0; $i < 20; $i++) {
            $aux = $faker->sentence;

            Complete::create([
                'CompleteText' => $aux,
                'HiddenText' => $aux,
            ]);
        }
    }
}
