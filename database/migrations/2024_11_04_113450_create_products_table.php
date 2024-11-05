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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->double('price')->default(0);
            $table->double('qty')->default(0);

            // Add the foreign key constraint with restrict on delete            
            $table->unsignedBigInteger('category_Id');
            $table->foreign('category_Id')->references('id')->on('categories')->onDelete('restrict'); // Prevent deletion if foreign key exists

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
