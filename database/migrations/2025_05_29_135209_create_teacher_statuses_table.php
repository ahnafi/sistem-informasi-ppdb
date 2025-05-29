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
        Schema::create('teacher_statuses', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->bigInteger("base_salary");
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table("teachers", function (Blueprint $table) {
            $table->foreignId("teacher_status_id")->constrained("teacher_statuses")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("teachers", function (Blueprint $table) {
            $table->dropForeign(["teacher_status_id"]);
            $table->dropColumn("teacher_status_id");
        });

        Schema::dropIfExists('teacher_statuses');
    }
};
