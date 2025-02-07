<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('favorite')->default(false); // Voeg een favorite kolom toe
            $table->integer('rating')->default(0); // Voeg een rating kolom toe
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['favorite', 'rating']); // Verwijder de kolommen bij een rollback
        });
    }
};
