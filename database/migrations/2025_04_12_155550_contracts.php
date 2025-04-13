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
            $table->unsignedBigInteger('mechanicien_id');
            $table->unsignedBigInteger('client_id');
            $table->date('duree')->nullable();
            $table->timestamps();
            
            $table->foreign('mechanicien_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contracts');
    }
};
