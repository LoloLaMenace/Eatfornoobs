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

        Schema::create('favorites', function (Blueprint $table) {
            $table->foreignId('dish_id')->constrained('dishes');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
            $table->primary(['dish_id', 'user_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
