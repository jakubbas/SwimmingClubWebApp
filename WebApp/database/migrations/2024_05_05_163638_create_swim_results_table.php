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
        Schema::create('swim_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user-id')->constrained('users')->onDelete('cascade');
            $table->time('freestyle-time');
            $table->time('backstroke-time');
            $table->time('breaststroke-time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swim_results');
    }
};
