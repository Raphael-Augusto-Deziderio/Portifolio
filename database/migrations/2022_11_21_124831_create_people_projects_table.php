<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People_Project', function (Blueprint $table) {
            $table->increments('idPeopleProject');

            $table->unsignedInteger('idPeople');
            $table->foreign('idPeople')->references('idPeople')->on('People');

            $table->unsignedInteger('idProject');
            $table->foreign('idProject')->references('idProject')->on('Project');
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
        Schema::dropIfExists('people_projects');
    }
}
