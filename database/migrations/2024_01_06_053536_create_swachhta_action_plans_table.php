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
        Schema::create('swachhta_action_plans', function (Blueprint $table) {
            $table->id();
            $table->string('tab');
            $table->string('tittle');

            $table->string('date');
            $table->string('pdf');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swachhta_action_plans');
    }
};
