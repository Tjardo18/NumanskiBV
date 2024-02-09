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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->boolean('company')->nullable();
            $table->string('companyname')->nullable();
            $table->integer('kvknr')->nullable();
            $table->string('firstname');
            $table->string('surname');
            $table->string('street');
            $table->string('housenumber');
            $table->string('postalcode');
            $table->string('city');
            $table->string('email');
            $table->string('phone');
            $table->string('function')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
