<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * un produit contient un nom, une description, un prix, une photi, une discount, une quantité stock.
     * un nouveau (boolean), et une clé étrangère catégorie
     * le nom est de type chaine avec une longueeur maximale de 100 caractheres, la description est de type textete,
     * la photo est de type chaine avec une longueur maximale de 255 caractères, 
     * le prix est de type decimal avec une précision de 8 et une échelle de 2, 
     * la discount est de type decimal avec une précision de 5 et une échelle de 2,
     *  la quantité stock est de type entier, le nouveau est de type boolean.
     * et la clécatégorie est de type entier 
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('photo', 255)->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('discount', 5, 2)->nullable();
            $table->integer('stock_quantity')->default;
            $table->boolean('new')->default(false);
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
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
