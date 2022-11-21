<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('People_Addresses', function (Blueprint $table) {
            $table->increments('idPeopleAddress');

            $table->unsignedInteger('idPeople');
            $table->foreign('idPeople')->references('idPeople')->on('People');

            $table->unsignedInteger('idAddress');
            $table->foreign('idAddress')->references('idAddress')->on('Address');

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
        Schema::dropIfExists('people_addresses');
    }
}
