<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('telefono');
            $table->string('contraseña');
            $table->boolean('estado');
            $table->string('rol');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('tipo_usuario')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert([
            'id'=>'1',
            'email'=>'maiz@gmail.com',
            'tipo_usuario'=>'1',
            'password'=>bcrypt('123456')

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
