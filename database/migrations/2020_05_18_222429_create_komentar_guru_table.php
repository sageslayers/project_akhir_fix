<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_guru', function (Blueprint $table) {
            $table->bigIncrements('komentar_guru_id');
            $table->integer('project_details_id');
            $table->foreign('project_details_id')->references('project_details_id')->on('project_details')->onDelete('cascade') ;
            $table->string('komentar_guru_desc');
            $table->string('identity_number');
            $table->foreign('identity_number')->references('identity_number')->on('users')->onDelete('cascade')->onUpdate('cascade') ;
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
        Schema::dropIfExists('komentar_guru');
    }
}
