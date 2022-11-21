<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People_Skill', function (Blueprint $table) {
            $table->increments('idPeopleSkill');

            $table->unsignedInteger('idPeople');
            $table->foreign('idPeople')->references('idPeople')->on('People');

            $table->unsignedInteger('idSkill');
            $table->foreign('idSkill')->references('idSkill')->on('Skill');
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
        Schema::dropIfExists('people_skills');
    }
}
