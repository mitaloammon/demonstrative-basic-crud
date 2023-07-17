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
        Schema::create('products_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('price', 8, 2)->default(0.00);
            $table->string('category');
            $table->string('description');
            $table->string('image');

            $table->unsignedBigInteger('intention_id');
            $table->foreign('intention_id')->references('id')->on('intentions_list');

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
