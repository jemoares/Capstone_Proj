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
        Schema::create('health_centers_per_barangays', function (Blueprint $table) {
            $table->id();
            $table->integer('health_center_id');
            $table->integer('health_center_staff_id');
            $table->integer('barangay_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('health_centers_per_barangays');
    }
};
