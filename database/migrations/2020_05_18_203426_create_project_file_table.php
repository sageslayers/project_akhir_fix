<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_file', function (Blueprint $table) {
            $table->bigIncrements('project_file_id');
            $table->integer('project_details_id');
            $table->foreign('project_details_id')->references('project_details_id')->on('project_details')->onDelete('cascade') ;
            $table->string('project_file_link',50);
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
        Schema::dropIfExists('project_file');
    }
}
