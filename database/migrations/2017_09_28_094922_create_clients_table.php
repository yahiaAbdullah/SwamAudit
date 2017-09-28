<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fileNaumber')->unique() ;
            $table->string('name') ;
            $table->string('telephon') ;
            $table->string('ownership') ;
            $table->string('fax') ;
            $table->string('webSite') ;
            $table->string('email')->unique() ;
            $table->string('city') ;
            $table->string('address') ;

            $table->integer('status_id')->unsigned()->nullable() ;
            $table->foreign('status_id')
                  ->references('id')
                  ->on('client_statuses')
                  ->onDelete('set null') ;

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
        Schema::dropIfExists('clients');
    }
}
