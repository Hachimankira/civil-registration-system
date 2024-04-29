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
        Schema::create('deaths', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('birth_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('permanentAddress');
            $table->string('dateOfBirth');
            $table->string('dateOfDeath');
            $table->string('cause');
            $table->timestamps();
            $table->foreign('birth_id')->references('id')->on('births')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deaths');
    }
};
