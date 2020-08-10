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
            $table->string('email', 30)->unique();
            $table->string('apresentacao', 500);
            $table->string('plataforma', 30);
            $table->string('imagem', 100)->null();
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
