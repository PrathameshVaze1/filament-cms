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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('title')->nullable();
            $table->string('author')->nullable();
            $table->longText('description')->nullable();
            $table->text('image')->nullable();
            $table->text('webp_image')->nullable();
            $table->text('pdf')->nullable();
            $table->date('date')->nullable();
            $table->enum('publish_status', ['Published', 'Unpublished'])->nullable();
            $table->enum('feature_status', ['Featured', 'Not Featured'])->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->text('canonical_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
