<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('highlights', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable(); // Sambutan Kepala Sekolah
            $table->text('quote')->nullable();
            $table->text('body')->nullable();
            $table->string('person_name')->nullable();
            $table->string('person_title')->nullable();
            $table->string('bg_image')->nullable();
            $table->string('video_title')->nullable();
            $table->string('video_url')->nullable();
            $table->text('video_description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('highlights');
    }
};
