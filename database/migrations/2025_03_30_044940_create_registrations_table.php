<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('name');
            $table->enum('gender', ['male', 'female']);
            $table->string('place_of_birth');
            $table->date('date_of_birth');
            $table->string('village_district_province');
            $table->string('address');
            $table->string('phone');
            $table->string('nisn')->unique();
            $table->string('origin_school');
            $table->enum('school_type', ["public", "private"]);
            $table->string("information");
            $table->enum("status", ["pending", "accepted", "rejected"])->default("pending");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
