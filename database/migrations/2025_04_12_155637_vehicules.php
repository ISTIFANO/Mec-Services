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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('model')->nullable();
            $table->date('annee_fabrication')->nullable();
            $table->year('year')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
};
