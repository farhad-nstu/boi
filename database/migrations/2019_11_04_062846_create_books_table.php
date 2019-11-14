<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('writer_id')->nullable();
            $table->integer('book_category_id')->nullable();
            $table->integer('publisher_id')->nullable();
            $table->integer('book_genre_id')->nullable();
            $table->integer('book_language_id')->nullable();
            $table->integer('user_id');
            $table->string('book_name');
            $table->text('book_details');
            $table->string('book_cover')->nullable();
            $table->string('book_video')->nullable();
            $table->string('hit_count')->nullable();
            $table->string('circle_count')->nullable();
            $table->tinyInteger('verified')->default('1');
            $table->tinyInteger('assigned')->default('0');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('books');
    }
}
