<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sermons', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('preacher');
            $table->string('series')->nullable();
            $table->text('description')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('duration')->nullable();
            $table->date('preached_at');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sermons');
    }
};
