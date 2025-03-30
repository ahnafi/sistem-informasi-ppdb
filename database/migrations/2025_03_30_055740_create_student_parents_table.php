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
        Schema::create('student_parents', function (Blueprint $table) {
            $table->id();
            $table->enum("type", ["father", "mother", "guardian"]);
            $table->string("name");
            $table->string("phone")->nullable();
            $table->string("village_district_province");
            $table->string("address")->nullable();
            $table->string("job")->nullable();
            $table->enum("income", ["<1", "1-2", "2-3", "3-4", "4-5", ">5"]);
            $table->foreignId("registration_id")->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_parents');
    }
};
