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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->string('active')->default(true);
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
