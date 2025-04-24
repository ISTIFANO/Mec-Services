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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("titre");
            $table->enum("status", ["en cours", "terminé", "annulé"])->default("en cours");
            $table->unsignedBigInteger('mechanicien_id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('offer_id')->nullable();
            $table->foreign('mechanicien_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('offer_id')->references('id')->on('offers');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
};
