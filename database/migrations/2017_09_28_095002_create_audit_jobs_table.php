<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_jobs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned()->nullable() ;
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('set null') ;

            $table->integer('manager_id')->unsigned()->nullable() ;
            $table->foreign('manager_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('set null') ;

          $table->integer('fiscal_id')->unsigned()->nullable() ;
          $table->foreign('fiscal_id')
                ->references('id')
                ->on('fiscal_years')
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
        Schema::dropIfExists('audit_jobs');
    }
}
