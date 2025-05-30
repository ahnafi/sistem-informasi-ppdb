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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('school_email')->nullable();
            $table->string('name');
            $table->string('nip');
            $table->string('phone');
            $table->enum('gender', ["male", "female"]);
            $table->date('date_of_birth');
            $table->text('address');
            // $table->enum('status', ['PNS', 'PPPK', 'GTY', 'Honorer', 'Kontrak Daerah', 'Kontrak Sekolah', 'Wiyata Bakti', 'Relawan'])->nullable();
            $table->enum('position', ['Kepala Sekolah', 'Wakil Kepala Sekolah', 'Guru BK', 'Guru Wali Kelas', 'Guru Pembina OSIS', 'Guru Staf', 'Guru Penggerak', 'Guru Ekstrakurikuler'])->nullable();
            $table->string('photo')->nullable();
            $table->enum('religion', ["islam", "hindu", "buddha", "konghucu", "Catholic", "Protestant", "other"])->nullable();
            $table->string('highest_education')->nullable();
            $table->string('appointment_descree')->nullable();
            $table->text('teaching_history')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
