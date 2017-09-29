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

            $table->integer('audit_id')->unsigned()->nullable() ;
            $table->foreign('audit_id')
                  ->references('id')
                  ->on('audit_jobs')
                  ->onDelete('set null') ;

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
