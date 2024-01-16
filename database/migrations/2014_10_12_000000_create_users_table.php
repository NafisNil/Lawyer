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
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('nid')->nullable();
           
            $table->string('dob')->nullable();
            $table->string('role')->default('3')->comment('3 user, 2 lawyer, 1 admin');
            $table->string('gender')->nullable();
            $table->string('district_id')->nullable();
            $table->string('thana')->nullable();
            $table->string('start')->nullable()->comment('e for email, m for mobile');
            $table->string('mobile')->nullable();
            $table->string('court')->nullable();
            $table->string('experience')->nullable();
            $table->string('type_id')->nullable();
            $table->string('files')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
  
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
