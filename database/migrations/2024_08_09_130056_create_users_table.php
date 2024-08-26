<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create users table 
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('country')->default('Not specified');
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_banned')->default(0);
            $table->string('photo')->default('');
            $table->timestamp('created_on')->default(DB::raw('CURRENT_TIMESTAMP')); //DB: raw uses SQL script
        });
    }

    /**
     * Reverse the migrations.
     */
    // if the table exists, delete it and restart it again so you dont have repeating info from the seeders
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
