<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorBookTable extends Migration
{
    public function up()
    {
        Schema::create('author_book', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id')->index();
            $table->unsignedBigInteger('book_id')->index();

            $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

            $table->primary(['author_id', 'book_id']);
        });
    }
}
