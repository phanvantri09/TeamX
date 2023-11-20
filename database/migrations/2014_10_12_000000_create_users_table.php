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
            $table->integer('balance')->default(0);
            $table->integer('type')->default(111)->comment("111 user bình thường, 222 đại lí 1, 333 đại lí 2, 444 đại lí 3, 999 admin");
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->string('numberPhone')->nullable();
            $table->string('ref')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
