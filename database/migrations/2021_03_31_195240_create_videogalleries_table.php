<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideogalleriesTable extends Migration
{

    public function up()
    {
        Schema::create('videogalleries', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->text('description');
            $table->text('shortdescription');
            $table->string('sort')->nullable();
            $table->string('tag')->nullable();
            $table->string('publishtime')->nullable();
            $table->string('openlink')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('theme')->nullable();
            $table->text('link');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('videogalleries');
    }
}
