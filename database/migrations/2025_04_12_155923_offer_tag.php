<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // public function up()
    // {
    //     Schema::create('offer_tag', function (Blueprint $table) {
    //         $table->unsignedBigInteger('offer_id');
    //         $table->unsignedBigInteger('tag_id');
            
    //         $table->primary(['offer_id', 'tag_id']);
    //         $table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');
    //         $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
    //     });
    // }

    // public function down()
    // {
    //     Schema::dropIfExists('offer_tag');
    // }
};
