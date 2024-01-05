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
        Schema::create('attachment_guide', function (Blueprint $table) {
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('attachment_id');
            
            
            $table->foreign('guide_id')->references('id')->on('guides');
            $table->foreign('attachment_id')->references('id')->on('attachments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attachment_guide');
    }
};
