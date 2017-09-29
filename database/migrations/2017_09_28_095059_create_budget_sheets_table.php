<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budget_sheets', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('audit_id')->unsigned()->nullable() ;
            $table->foreign('audit_id')
                  ->references('id')
                  ->on('audit_jobs')
                  ->onDelete('set null') ;

          $table->boolean('status');
          $table->boolean('main_city');
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
        Schema::dropIfExists('budget_sheets');
    }
}
