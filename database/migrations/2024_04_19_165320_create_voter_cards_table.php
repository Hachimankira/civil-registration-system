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
        Schema::create('voter_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('birth_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('dateOfBirth');
            $table->string('permanentAddress');
            $table->string('currentAddress');
            $table->string('issuedPlace');
            $table->string('fatherFName');
            $table->string('fatherLName');
            $table->string('permanentFAddress');
            $table->string('id_no1');
            $table->string('status')->default('submitted');
            $table->timestamps();
            $table->foreign('birth_id')->references('id')->on('births')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voter_cards');
    }
};
