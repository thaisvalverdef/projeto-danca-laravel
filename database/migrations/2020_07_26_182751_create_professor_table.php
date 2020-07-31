<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 30);
            $table->string('sobrenome', 50);
            $table->string('email', 30);
            $table->string('apresentação', 500);
            $table->string('plataforma', 30);
            $table->string('image', 100);
            $table->string('senha', 100);
            $table->foreignId('modalidades');
            $table->foreignId('niveis');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professor');
    }
}
