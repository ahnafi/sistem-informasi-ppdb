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
        Schema::create('periodics', function (Blueprint $table) {
            $table->id();
            $table->enum("religion", ["islam", "hindu", "buddha", "konghucu", "Catholic", "Protestant", "other"])->nullable();
            $table->string("residence")->nullable();
            $table->float("height")->nullable();
            $table->float("weight")->nullable();
            $table->boolean("medical_history")->nullable();
            $table->integer("home_distance")->nullable();
            $table->integer("travel_time")->nullable();
            $table->enum("child_status", ["biological", "adopted"])->nullable();
            $table->integer("child_order")->nullable();
            $table->integer("siblings")->nullable();
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
        Schema::dropIfExists('periodics');
    }
};
