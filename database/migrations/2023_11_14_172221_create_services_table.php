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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('id_brand')->nullable();
            $table->string('name')->unique();
            $table->text('content')->nullable();
            $table->integer('price')->comment('it nhất là 100, hệ số là price đại diện cho số lượng 100 từ đó nhân hệ số từ input nta nhập vào');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
