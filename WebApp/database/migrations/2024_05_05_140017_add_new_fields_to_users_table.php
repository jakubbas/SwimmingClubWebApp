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
        Schema::table('users', function (Blueprint $table) {
            $table->string('account-type')->nullable();
            $table->string('surname')->nullable();
            $table->string('forename')->nullable();
            $table->date('date-of-birth')->nullable();
            $table->integer('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode')->nullable();
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
