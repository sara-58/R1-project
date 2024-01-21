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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('carTitle',100);
            $table->string('carImage');
            $table->text('luggages');
            $table->text('doors');
            $table->text('passengers');
            $table->text('price');
            $table->foreignId('category_id')->constrained('category');
            $table->text('description');
            $table->boolean('carPublished');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
