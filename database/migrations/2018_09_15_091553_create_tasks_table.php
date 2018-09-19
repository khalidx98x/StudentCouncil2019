<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('task_admin_id')->unsigned()->nullable();
            $table->integer('task_council_member_id')->unsigned()->nullable();

            $table->foreign('task_admin_id')
                ->references('id')->on('admins');

            $table->foreign('task_council_member_id')
                ->references('id')->on('council_members');


            $table->string('task_description');
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
        Schema::dropIfExists('tasks');
    }
}
