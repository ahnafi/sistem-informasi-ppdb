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
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->date("date");
            $table->date("payment_date");
            $table->bigInteger("base_salary")->default(0);
            $table->bigInteger("allowance")->nullable();
            $table->bigInteger("deduction")->nullable();
            $table->bigInteger("total_salary")->default(0);
            $table->foreignId("teacher_id")->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
