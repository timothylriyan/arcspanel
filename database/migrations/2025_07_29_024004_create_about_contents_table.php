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
        Schema::create('about_contents', function (Blueprint $table) {
            $table->id();
            $table->string('subtitle')->nullable();
            $table->text('main_description')->nullable();
            $table->string('image')->nullable();
            $table->string('section1_title')->nullable();
            $table->text('section1_content')->nullable();
            $table->string('section2_title')->nullable();
            $table->text('section2_content')->nullable();
            $table->string('section3_title')->nullable();
            $table->text('section3_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_contents');
    }
};
