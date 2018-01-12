<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productCode');
            $table->string('name');
            $table->string('description', 255);
            $table->integer('categoryID')->nullable();
            $table->integer('supplierID')->nullable();
            $table->integer('brandID')->nullable();
            $table->string('image')->nullable();
            $table->string('sizeUnitMeasure')->nullable();
            $table->double('size')->nullable();
            $table->string('weightUnitMeasure')->nullable();
            $table->double('weight')->nullable();
            $table->string('color')->nullable();
            $table->integer('quantity');
            $table->integer('reorderLevel')->nullable();
            $table->boolean('status')->nullable();
            $table->float('sellPrice', 8, 2);
            $table->float('costPrice', 8, 2);
            $table->integer('created_by')->nullable();
            $table->integer('shopID')->nullable();
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
