<?php

namespace Database\Seeders;

use App\Models\Persona;
use App\Models\Role;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $persona = Persona::select('id')->first();

        $rol = Role::select('id')->first();

        $faker = Faker::create();
        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert(array(
                'id' => $persona->id,
                'usuario' => $faker->randomElement(['Maiz', 'Diego','Jorge']),
                'password' => bcrypt($faker->randomElement(['123456', '123456','123456'])),
                'condicion' => 1,
                'idrol' => $rol->id,
            ));
        }
    }
}
