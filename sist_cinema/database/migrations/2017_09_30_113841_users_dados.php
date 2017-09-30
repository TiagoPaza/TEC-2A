<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsersDate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users_dados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 100);
            $table->integer('cpf', 11);
            $table->string('rg', 20);
            $table->date('dt_nascimento');
            $table->integer('num_telefone', 11);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
