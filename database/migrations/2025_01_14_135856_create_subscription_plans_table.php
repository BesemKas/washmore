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
        Schema::create('subscription_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('garage_slots')->nullable();
            $table->decimal('anual_cost', 5, 2);
            $table->decimal('shop_discount', 5, 2)->default(0); // Precision 5, scale 2
            $table->decimal('service_discount', 5, 2)->default(0); // Precision 5, scale 2

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_plans');
    }
};
