<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class createContactInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('contact_information', function (Blueprint $table) {
            $table->increments('id');
           $table->integer('admin_id')->unsigned()->nullable();
           $table->integer('department_id')->unsigned()->nullable();

            $table->foreign('admin_id')
                ->references('id')->on('admins');
            $table->foreign('department_id')
                ->references('id')->on('departments');
            $table->string('facebook')->nullable();
            $table->string('email');
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();

            $table->string('phone');
            //
            $table->rememberToken();
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
        //
        Schema::dropIfExists('contact_information');

    }
}
