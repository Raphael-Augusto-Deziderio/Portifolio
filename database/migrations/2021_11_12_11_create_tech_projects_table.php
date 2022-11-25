<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TechProject', function (Blueprint $table) {
            $table->increments('idTechProjects');

            $table->unsignedInteger('idTechnology');
            $table->foreign('idTechnology')->references('idTechnology')->on('Technology');

            $table->unsignedInteger('idProject');
            $table->foreign('idProject')->references('idProject')->on('Project');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('TechProject');
    }
}
