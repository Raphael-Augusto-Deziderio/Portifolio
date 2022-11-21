<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Project', function (Blueprint $table) {
            $table->increments('idProject');
            $table->string('nameProject', 20);
            $table->string('descProject', 100);
            $table->string('urlProject', 200);
            $table->string('pathImgProject', 100);

            $table->unsignedInteger('idTypeProject');
            $table->foreign('idTypeProject')->references('idTypeProject')->on('TypeProject');

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
        Schema::dropIfExists('Project');
    }
}
