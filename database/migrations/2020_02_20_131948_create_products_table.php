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
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nomeProduct', 150);
            $table->string('descProduct', 300);
            $table->float('priceProduct', 10, 2);
            $table->float('quantProduct', 100, 1);
            $table->string('linkProduct', 500);
            $table->string('image1', 256)->nullable();
            $table->string('image2', 256)->nullable();
            $table->string('image3', 256)->nullable();
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
