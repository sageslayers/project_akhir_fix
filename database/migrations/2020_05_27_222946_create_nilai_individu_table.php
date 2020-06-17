<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiIndividuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_individu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->integer('nilai')->default('-1');
            $table->foreign('project_id')->references('id')->on('project')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('nilai_individu');
    }
}
