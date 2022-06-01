<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{

    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id');
            $table->string('title')->nullable();
            $table->text('description');
            $table->text('shortdescription');
            $table->string('sort')->nullable();
            $table->string('place')->nullable();
            $table->string('publishtime')->nullable();
            $table->string('openlink')->nullable();
            $table->string('video')->nullable();
            $table->text('link');
            $table->string('buttontext')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
