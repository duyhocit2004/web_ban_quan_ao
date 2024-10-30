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
        Schema::create('detail_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('products_id');
            $table->unsignedBigInteger('order_id');
            $table->decimal('price',10,2);
            $table->string('quantity',255);
            $table->decimal('sum',10,2);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_order');
    }
};
