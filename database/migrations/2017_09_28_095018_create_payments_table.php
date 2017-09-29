<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
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

          $table->integer('invoice_id')->unsigned()->nullable() ;
          $table->foreign('invoice_id')
                ->references('id')
                ->on('invoices')
                ->onDelete('set null') ;

          $table->string('payment_number');
          $table->date('payment_date');
          $table->integer('Amount');

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
        Schema::dropIfExists('payments');
    }
}
