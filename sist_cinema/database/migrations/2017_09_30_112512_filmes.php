<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Filmes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('filmes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100 );
            $table->string('sinopse', 100);
            $table->string('clas_indicada', 7);
            $table->time('temp_duracao');
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
