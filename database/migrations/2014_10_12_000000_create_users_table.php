<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->foreignId('id_rol')->references('id_rol')->on('roles');
            $table->string('nombre_usuario', 40);
            $table->string('password', 70);
            $table->string('email', 45)->unique();
            $table->boolean('estado_usuario');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('usuarios')->insert(
            [
                'id_rol' => 1, 'nombre_usuario' => 'administrador',
                'password' => Hash::make('administrador'), 'email' => 'administrador@gmail.com',
                'estado_usuario' => 1
            ],
        );
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
