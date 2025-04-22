<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('offre_tag', function (Blueprint $table) {
        //     $table->unsignedBigInteger('offre_id');
        //     $table->unsignedBigInteger('tag_id');
        
        //     $table->foreign('offre_id')->references('id')->on('offres')->onDelete('cascade');
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        
        //     $table->primary(['offre_id', 'tag_id']);
        // });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('offre_tag');
    }
};
