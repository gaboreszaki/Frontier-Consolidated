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
        Schema::create('guide_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('tag_id');
            
            
            $table->foreign('guide_id')->references('id')->on('guides');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guide_tag');
    }
};
