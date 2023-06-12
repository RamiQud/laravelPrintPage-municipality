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
        Schema::create('datacustumer', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('CustumerName')->unique();
            $table->integer('numberId')->unique();
            $table->string('WaterTypeSubscription');
            $table->integer('LandVoucherNumber');
            $table->integer('PieceOfLandNumber');
            $table->string('neighborhood');
            $table->string('note');
            $table->integer('mobileNumber');
            $table->string('firstWitness');
            $table->string('secondWitness');
            $table->string('exportDate');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('datacustumer');
    }
};
