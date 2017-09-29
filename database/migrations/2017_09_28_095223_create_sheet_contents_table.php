<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet_contents', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('budget_id')->unsigned()->nullable() ;
            $table->foreign('budget_id')
                  ->references('id')
                  ->on('budget_sheets')
                  ->onDelete('set null') ;

            $table->integer('item_id')->unsigned()->nullable() ;
            $table->foreign('item_id')
                  ->references('id')
                  ->on('sheet_item_managements')
                  ->onDelete('set null') ;

          $table->integer('rate_id')->unsigned()->nullable() ;
          $table->foreign('rate_id')
                ->references('id')
                ->on('employee_rates')
                ->onDelete('set null') ;

          $table->boolean('values');
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
        Schema::dropIfExists('sheet_contents');
    }
}
