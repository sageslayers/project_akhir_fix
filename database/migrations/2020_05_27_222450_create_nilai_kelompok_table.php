<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiKelompokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_kelompok', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai')->default('0');
            $table->unsignedBigInteger('project__details_id');
            $table->unsignedBigInteger('kelompok_id');
            $table->foreign('kelompok_id')->references('id')->on('kelompok')->onDelete('cascade')->onUpdate('cascade') ;
            $table->foreign('project__details_id')->references('id')->on('project_details')->onDelete('cascade') ;
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
        Schema::dropIfExists('nilai_kelompok');
    }
}
