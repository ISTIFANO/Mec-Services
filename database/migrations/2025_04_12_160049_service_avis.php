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
        Schema::create('service_avis', function (Blueprint $table) {
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('avis_id');
            $table->primary(['service_id', 'avis_id']);
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('avis_id')->references('id')->on('avis')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_avis');
    }
};
