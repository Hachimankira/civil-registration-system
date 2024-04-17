<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('births', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('gender');
            $table->string('dateOfBirth');
            $table->string('placeOfBirth');
            $table->string('district');
            $table->string('city');
            $table->string('ward_no');
            $table->string('province_no');

            $table->string('fatherFName');
            $table->string('fatherLName');
            $table->string('permanentFAddress');
            $table->string('id_no1');
            $table->string('FOccupation');
            $table->string('email');
            $table->string('phoneNumber');

            $table->string('motherFName');
            $table->string('motherLName');
            $table->string('permanentMAddress');
            $table->string('id_no2');
            $table->string('MOccupation');


            $table->timestamps();
        });
        DB::statement("ALTER TABLE births AUTO_INCREMENT = 111111;");

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('births');
    }
};
