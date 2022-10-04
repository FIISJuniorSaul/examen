<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       //tablas para desactivar, limpiar datos y volver activar las llaves foraneas
       $this->truncateTables([
        'personas',
        'users',

            ]);
            //Aqui se añade todos los seeder creados
            // $this->call(UsersTableSeeder::class);
            $this->call([
                PersonaSeederTable::class,
                UserSeederTable::class,
            ]);

    }

    protected function truncateTables(array $tables){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
            DB::table($table)->truncate();
            }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

}
