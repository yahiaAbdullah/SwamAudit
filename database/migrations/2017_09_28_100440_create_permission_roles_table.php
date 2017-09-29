<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles', function (Blueprint $table) {
          $table->integer('role_id')->unsigned() ;
         $table->integer('permission_id')->unsigned() ;

         $table->foreign('role_id')
               ->references('id')
               ->on('roles')
               ->onDelete('cascade') ;
               
         $table->foreign('permission_id')
               ->references('id')
               ->on('permissions')
               ->onDelete('cascade') ;
         $table->primary(['role_id' , 'permission_id']);
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
        Schema::dropIfExists('permission_roles');
    }
}
