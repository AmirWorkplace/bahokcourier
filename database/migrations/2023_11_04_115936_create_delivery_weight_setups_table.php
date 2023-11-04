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
        Schema::create('delivery_weight_setups', function (Blueprint $table) {
            $table->id();
            $table->string('attribute')->nullable();
            $table->bigInteger('weight');
            $table->string('unit');
            $table->unsignedBigInteger('serial')->nullable();
            $table->text('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_weight_setups');
    }
};
