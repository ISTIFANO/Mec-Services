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
        Schema::create('avis', function (Blueprint $table) {
            $table->id();
            $table->integer('rating')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('avis');
    }
};
