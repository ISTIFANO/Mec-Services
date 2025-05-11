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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('logo')->default("logoTa3Charika.png");
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('mechanicien_id');
            $table->unsignedBigInteger('client_id');
            $table->timestamps();
            $table->foreign('service_id')->references('id')->on('services');
            $table->foreign('mechanicien_id')->references('id')->on('mechaniciens');
            $table->foreign('client_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
