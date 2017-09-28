<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSheetItemManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sheet_item_managements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item_description');
            $table->boolean('status');
            $table->integer('type_id')->unsigned()->nullable() ;
            $table->foreign('type_id')
                  ->references('id')
                  ->on('item_types')
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
        Schema::dropIfExists('sheet_item_managements');
    }
}
