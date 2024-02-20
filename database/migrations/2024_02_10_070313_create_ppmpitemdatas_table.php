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
        Schema::create('ppmpitemdatas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ppmpitemID');
            $table->integer('quantity')->nullable();
            $table->string('unit');
            $table->string('itemname');
            $table->string('description');
            $table->integer('unitprice');
            $table->integer('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppmpitemdatas');
    }
};
