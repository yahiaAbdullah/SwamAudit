<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('subject');

            $table->integer('sent_to')->unsigned() ;
            $table->foreign('sent_to')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('cascade') ;

            $table->integer('sent_by')->unsigned()->nullable() ;
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null') ;
                  
            $table->string('details');
            $table->string('file');
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
        Schema::dropIfExists('emails');
    }
}
