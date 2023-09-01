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
        Schema::create('office_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('acronym')->unique();
            $table->string('code')->unique();
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('office_division');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_sections');
    }
};
