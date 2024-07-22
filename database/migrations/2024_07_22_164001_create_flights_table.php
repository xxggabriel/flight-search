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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("start_airport_id")->unsigned();
            $table->bigInteger("end_airport_id")->unsigned();

            $table->float("price");
            $table->integer("time_in_minutes");
            $table->integer("distance");

            $table->foreign("start_airport_id")->references("id")->on("airports");
            $table->foreign("end_airport_id")->references("id")->on("airports");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
