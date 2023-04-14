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
        Schema::create('loans', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->id();
            $table->date('date_In_loan');
            $table->date('date_Fin_loan');
            $table->string('status_loan');
            $table->foreignId('employee_id')->nullable()->constrained('employees')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('product_id')->nullable()->constrained('products')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('observations');
            $table->integer('stock_loan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
