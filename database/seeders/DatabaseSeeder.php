<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\People;
use App\Models\PeopleAddress;
use App\Models\PeopleProject;
use App\Models\PeopleSkill;
use App\Models\PeopleTechnology;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Technology;
use App\Models\TypeProject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        People::create([
            'namePeople' => '',
            'agePeople' => ''

        ]);

        Skill::create([
            'nameSkill' => '',
            'descSkill' => ''

        ]);

        Technology::create([
            'nameTech' => '',
            'descTech' => ''

        ]);

        PeopleTechnology::create([
            'idPeople' => '',
            'idTech' => ''

        ]);

        PeopleSkill::create([
            'idPeople' => '',
            'idSkill' => ''

        ]);

        Address::create([
            'nameCity' => '',
            'nameState' => '',
            'nameCountry' => ''

        ]);

        PeopleAddress::create([
            'idPeople' => '',
            'idAddress' => ''

        ]);

        Project::create([
            'nameProject' => '',
            'descProject' => '',
            'urlProject' => '',
            'pathImgProject' => ''

        ]);

        PeopleProject::create([
            'idPeople' => '',
            'idProject' => ''

        ]);

        TypeProject::create([
            'nameTypeProject' => '',
            'descTypeProject' => ''

        ]);
    }
}
