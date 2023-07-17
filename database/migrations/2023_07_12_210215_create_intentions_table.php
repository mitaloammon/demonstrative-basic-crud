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
        Schema::create('intentions_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');

            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('addresses_id');

            $table->foreign('product_id')->references('id')->on('products_list');
            $table->foreign('addresses_id')->references('id')->on('addresses_list');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intentions');
    }
};
