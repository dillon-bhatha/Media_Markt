<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();  // Auto-increment ID
            $table->string('name');  // Naam van het product
            $table->text('description');  // Beschrijving van het product
            $table->decimal('price', 10, 2);  // Prijs van het product
            $table->integer('stock');  // Voorraad van het product
            $table->string('image_url')->nullable();  // Optionele URL voor de afbeelding
            $table->timestamps();  // timestamps voor created_at en updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
