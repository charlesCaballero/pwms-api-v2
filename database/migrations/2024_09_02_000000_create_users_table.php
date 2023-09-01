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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('hris')->unique();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('status')->default(0);
            $table->string('password');
            $table->unsignedBigInteger('division_id');
            $table->unsignedBigInteger('unit_id');
            $table->unsignedBigInteger('role_id')->nullable()->default(2);
            $table->foreign('division_id')->references('id')->on('office_divisions');
            $table->foreign('unit_id')->references('id')->on('office_units');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->binary('photo')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
