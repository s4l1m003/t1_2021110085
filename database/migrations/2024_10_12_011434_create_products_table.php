<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->char('id', 12)->primary();
            $table->string('product_name', 255);
            $table->text('description')->nullable();
            $table->double('retail_price', 8, 2)->default(0.0);
            $table->double('wholesale_price', 8, 2)->default(0.0);
            $table->char('origin', 2);
            $table->unsignedInteger('quantity')->default(0);
            $table->text('product_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
