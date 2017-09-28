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
            $table->string('step');
            $table->date('expect_start_date');
            $table->date('start_date');
            $table->date('close_date');

            $table->integer('status_id')->unsigned()->nullable() ;
            $table->foreign('status_id')
                  ->references('id')
                  ->on('task_statuses')
                  ->onDelete('set null') ;

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
