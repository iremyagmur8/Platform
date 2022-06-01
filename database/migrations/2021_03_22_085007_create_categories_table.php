<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            $table->id();
            $table->integer('user_id');
            $table->string('title');
            $table->text('description');
            $table->text('shortdescription');
            $table->string('link')->nullable();
            $table->string('sort')->nullable();
            $table->string('gtitle')->nullable();
            $table->string('gdescription')->nullable();
            $table->string('gkeywords')->nullable();
            $table->string('icon')->nullable();
            $table->string('openlink')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('type')->nullable();
            $table->integer('active')->nullable();
            $table->integer('theme')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
