<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('project_topic');
            $table->string('project_subtopic');
            $table->string('project_kd');
            $table->string('project_indicator');
            $table->integer('project_group');
            $table->integer('project_phase');
            $table->string('project_status');
            $table->string('identity_number');
            $table->boolean('project_has_question');
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
        Schema::dropIfExists('project');
    }
}
