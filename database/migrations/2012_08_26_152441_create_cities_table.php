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
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->decimal('latitude', 10, 6)->default(0); 
            $table->decimal('longitude', 10, 6)->default(0); 
            $table->unsignedBigInteger('governorate_id');
            // $table->unique(['name','governorate_id']);
            $table->foreign('governorate_id')->references('id')->on('governorates')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
