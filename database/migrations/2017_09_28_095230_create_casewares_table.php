<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasewaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casewares', function (Blueprint $table) {
            $table->increments('id');
            $table->date('upload_date');
            $table->string('file');

            $table->integer('client_id')->unsigned() ;
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('cascade') ;
                  
            $table->integer('user_id')->unsigned()->nullable() ;
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('casewares');
    }
}
