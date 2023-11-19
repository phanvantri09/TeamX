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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('id_service')->nullable();
            $table->integer('id_user');
            $table->integer('total');
            $table->integer('status')->comment('1 là vừa book, 2 đã chấp nhận đang chạy, 3 chạy đã xong, 4 từ chối');
            $table->string('img')->nullable();
            $table->integer('type')->comment('1 là của service, 2 nộp , 3 rút');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
