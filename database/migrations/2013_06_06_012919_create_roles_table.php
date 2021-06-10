<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id('id_rol');
            $table->string('nombre_rol', 15);
        });

        DB::table('roles')->insert(
            ['nombre_rol' => 'Administrador'],
        );
        DB::table('roles')->insert(
            ['nombre_rol' => 'Vendedor'],
        );
        DB::table('roles')->insert(
            ['nombre_rol' => 'Cliente'],
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
