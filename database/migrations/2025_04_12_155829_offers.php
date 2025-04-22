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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->text('description')->nullable();
            $table->date('duree_disponibilite')->nullable();
            $table->float('budjet')->default(12);
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->unsignedBigInteger('vehicule_id')->nullable();
            $table->string('image')->nullable();
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('vehicule_id')->references('id')->on('vehicules');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
