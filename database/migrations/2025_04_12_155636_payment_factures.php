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
        Schema::create('payment_factures', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('montant', 10, 2)->nullable();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('contract_id');
            $table->timestamps();
            
            $table->foreign('client_id')->references('id')->on('users');
            $table->foreign('contract_id')->references('id')->on('contracts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payment_factures');
    }
};
