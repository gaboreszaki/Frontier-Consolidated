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
        Schema::create('after_event_reports', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('op_leader');
            $table->date('op_date');
            $table->text('op_summary');
            $table->text('op_went_well');
            $table->text('op_can_be_improved');
            $table->string('op_cover_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('after_event_reports');
    }
};
