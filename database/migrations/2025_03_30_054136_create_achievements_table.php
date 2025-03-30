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
        Schema::create('achievements', function (Blueprint $table) {
            $table->id();
            $table->enum("type", ["academic", "nonacademic"]);
            $table->string("name");
            $table->year("year");
            $table->enum("ranking", [1, 2, 3]);
            $table->enum("tier", ["village", "sub_district", "district", "province", "national", "international", "world"]);
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
        Schema::dropIfExists('achievements');
    }
};
