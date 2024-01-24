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
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('reference')->nullable();
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->json('reviews')->nullable();
            $table->json('titles')->nullable();
            $table->string('size')->nullable();
            $table->text('description');
            $table->string('artwork');
            $table->json('prices')->nullable();
            $table->string('flyers');
            $table->string('faqs');
            $table->integer('quantities');
            $table->integer('numbers_sold');
            $table->boolean('soldout')->nullable()->default(false);
            $table->boolean('status')->nullable()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estates');
    }
};
