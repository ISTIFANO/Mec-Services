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
        Schema::create('commentaire_user', function (Blueprint $table) {
            $table->unsignedBigInteger('commentaire_id');
            $table->unsignedBigInteger('user_id');
            
            $table->primary(['commentaire_id', 'user_id']);
            $table->foreign('commentaire_id')->references('id')->on('commentaires')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('commentaire_user');
    }
};
