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
            $table->id();
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('stockcode')->nullable();
            $table->integer('price')->nullable();
            $table->integer('price2')->nullable();
            $table->string('title')->nullable();
            $table->string('theme')->nullable();
            $table->integer('stock')->nullable();
            $table->text('description');
            $table->text('shortdescription');
            $table->text('seconddescription');
            $table->integer('active')->nullable();
            $table->integer('sort')->nullable();
            $table->string('color')->nullable();
            $table->text('material');
            $table->string('sex')->nullable();
            $table->string('productcode')->nullable();
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
