<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_collaborators', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('project_id')->unsigned();
            $table->integer('collaborator_id')->unsigned();
            $table->timestamps();
 
            $table->foreign('project_id')
                  ->references('id')->on('projects')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
 
            $table->foreign('collaborator_id')
                  ->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_collaborators');
    }
}
