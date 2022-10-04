<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PersonaSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=0; $i < 3; $i++) {
            DB::table('personas')->insert(array(
                'nombre' => $faker->name,
                'dni'  => $faker->randomElement(['78689685','78459687','45869578']),
                'apellido_paterno'  => $faker->randomElement(['Huerta','Maiz','Gomez']),
                'apellido_materno'  => $faker->randomElement(['Malpartida','Carmen','Cardenas']),
                'telefono'  => $faker->randomElement(['956847845','968741523','948245678']),
                'correo'  => $faker->randomElement(['maiz@gmail.com','joe@gmail.com','den@gmail.com']),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ));
        }
    }
}
