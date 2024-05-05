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
        Schema::create('gala_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user-id')->constrained('users')->onDelete('cascade');
            $table->date('gala-date');
            $table->string('swim-type');
            $table->integer('place');
            $table->date('time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gala_results');
    }
};
