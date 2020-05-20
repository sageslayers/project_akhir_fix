<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('users_detail', function (Blueprint $table) {
            $table->increments('users_detail_id');
            $table->string('identity_number');
            $table->foreign('identity_number')->references('identity_number')->on('users')->onDelete('cascade')->onUpdate('cascade') ;
            $table->dateTime('users_detail_birth');
            $table->string('users_detail_school');
            $table->string('users_detail_biography');
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
        //
    }
}
