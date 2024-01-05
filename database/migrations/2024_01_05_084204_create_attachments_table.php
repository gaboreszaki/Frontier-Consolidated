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
        Schema::create('attachments', function (Blueprint $table) {
            $table->id();
            $table->string('name', '254');
            $table->string('original_filename','254');
            $table->string('filename', '254');
            $table->string('filetype', '254');
            $table->enum('status', ['ready', 'uploading', 'processing', 'deleted']);
            $table->string('uploader', '254');
            $table->boolean('has_original')->default(false);
            $table->boolean('has_card')->default(false);
            $table->boolean('has_thumbnail')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachments');
    }
};
