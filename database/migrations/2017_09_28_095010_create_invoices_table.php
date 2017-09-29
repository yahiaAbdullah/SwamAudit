<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('client_id')->unsigned()->nullable() ;
            $table->foreign('client_id')
                  ->references('id')
                  ->on('clients')
                  ->onDelete('set null') ;

            $table->integer('fiscal_id')->unsigned()->nullable() ;
            $table->foreign('fiscal_id')
                  ->references('id')
                  ->on('fiscal_years')
                  ->onDelete('set null') ;

            $table->string('invoice_number');
            $table->date('invoice_date');
            $table->integer('Amount');
            $table->boolean('status');
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
        Schema::dropIfExists('invoices');
    }
}
