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
        Schema::table('vehicules', function (Blueprint $table) {
            $table->string('icon')->nullable(); 
        });
    }
    
    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropColumn('icon');
        });
    }
    
};
