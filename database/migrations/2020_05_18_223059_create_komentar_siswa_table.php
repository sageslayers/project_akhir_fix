<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('komentar_siswa');
        Schema::create('komentar_siswa', function (Blueprint $table) {
            $table->increments('komentar_siswa_id');
            $table->integer('project_details_id');
            $table->foreign('project_details_id')->references('project_details_id')->on('project_details')->onDelete('cascade')->onUpdate('cascade') ;
            $table->string('komentar_siswa_desc');
            $table->integer('kelompok_id');
            $table->foreign('kelompok_id')->references('kelompok_id')->on('kelompok')->onDelete('cascade')->onUpdate('cascade') ;
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
        Schema::dropIfExists('komentar_siswa');
    }
}
