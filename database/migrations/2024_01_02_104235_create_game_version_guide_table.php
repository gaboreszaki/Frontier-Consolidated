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
        Schema::create('game_version_guide', function (Blueprint $table) {
            $table->unsignedBigInteger('guide_id');
            $table->unsignedBigInteger('game_version_id');
            
            
            $table->foreign('guide_id')->references('id')->on('guides');
            $table->foreign('game_version_id')->references('id')->on('game_versions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_version_guide');
    }
};
