<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('user_competence', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('competence_id');
            
            $table->primary(['user_id', 'competence_id']);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('competence_id')->references('id')->on('competences')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateur_competence');
    }
};
