<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTechnologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People_Technology', function (Blueprint $table) {
            $table->increments('idPeopleTech');

            $table->unsignedInteger('idPeople');
            $table->foreign('idPeople')->references('idPeople')->on('People');

            $table->unsignedInteger('idTech');
            $table->foreign('idTech')->references('idTech')->on('Technologies');
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
        Schema::dropIfExists('people_technologies');
    }
}
