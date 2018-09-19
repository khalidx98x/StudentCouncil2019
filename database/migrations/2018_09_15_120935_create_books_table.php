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
    /**
     * type 0: جامعة متطلب
     * 1:تخصص
     *
     *
     * is_book : 0:كتاب
     * 1:نموذج
     */

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('image');
            $table->string('url');
            $table->enum('type',[0,1]);
            $table->integer('college_id')->unsigned()->nullable();
            $table->foreign('college_id')
                ->references('id')->on('colleges');
            $table->enum('is_book',[0,1]);
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
