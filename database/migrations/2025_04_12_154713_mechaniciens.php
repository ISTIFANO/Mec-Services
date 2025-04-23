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
        Schema::create('mechaniciens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('avis_id'); 
            $table->string('certificat')->nullable();
            $table->string('experience_years')->nullable();
            $table->string('specialization')->nullable();
            $table->date('variable_at')->nullable();
            $table->date('variable_to')->nullable();
            $table->boolean('is_active')->default(true); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('avis_id')->references('id')->on('avis')->onDelete('cascade');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('mechaniciens');
    }
};
