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
            'namePeople' => 'Raphael Augusto Malaquias Deziderio',
            'agePeople' => '22',
            'descPeople' => 'Systems Analyst | Game Developer | Unity | Laravel | NodeJS | PHP | SQL'
        ]);

        $skill = [
            ['nameSkill' => 'Desire to learn', 'descSkill' => 'Desire to learn'],
            ['nameSkill' => 'hardworking', 'descSkill' => 'hardworking']
        ];

        Skill::create($skill);


        $tech = [
            ['nameTech' => 'Laravel', 'descTech' => 'Framework PHP'],
            ['nameTech' => 'Unity Engine', 'descTech' => 'Engine for Games'],
            ['nameTech' => 'C#', 'descTech' => 'C# for Games (Unity Engine)'],
            ['nameTech' => 'SQL', 'descTech' => 'Database'],
            ['nameTech' => 'GIT', 'descTech' => 'Version code'],
            ['nameTech' => 'Ubuntu', 'descTech' => 'O.S for server'],
            ['nameTech' => 'Apache', 'descTech' => 'Server'],
            ['nameTech' => 'JavaScript', 'descTech' => 'JavaScript for front-end'],
            ['nameTech' => 'HTML', 'descTech' => 'HTML for front-end'],
            ['nameTech' => 'CSS', 'descTech' => 'CSS for front-end'],
            ['nameTech' => 'NodeJs', 'descTech' => 'NodeJs for Server Games'],
            ['nameTech' => 'WebSockets', 'descTech' => 'WebSockets for Server Games'],
            ['nameTech' => 'Photon Network', 'descTech' => 'Photon Network for Server Games'],
            ['nameTech' => 'Vue.Js', 'descTech' => 'Framework for Javascript']
        ];

        Technology::create($tech);

        $peopleTech = [
            ['idPeople' => '1', 'idTech' => '1', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '2', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '3', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '4', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '5', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '6', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '7', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '8', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '9', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '10', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '11', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '12', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '13', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTech' => '14', 'timeExperience' => '', 'Competency' => ''],
        ];

        PeopleTechnology::create($peopleTech);



        Address::create([
            'nameCity' => 'Uberaba',
            'nameState' => 'Minas Gerais',
            'nameCountry' => 'Brasil'

        ]);

        $project = [
            ['nameProject' => '', 'descProject' => '', 'urlProject' => '', 'pathImgProject' => ''],
            ['nameProject' => '', 'descProject' => '', 'urlProject' => '', 'pathImgProject' => ''],
            ['nameProject' => '', 'descProject' => '', 'urlProject' => '', 'pathImgProject' => ''],

        ];

        Project::create($project);

        $typeProject = [
                ['nameTypeProject' => 'Mobile Games', 'descTypeProject' => 'Mobile'],
                ['nameTypeProject' => 'Desktop/Web Games', 'descTypeProject' => 'Desktop'],
                ['nameTypeProject' => 'Sites', 'descTypeProject' => 'Web']
            ];

        TypeProject::create($typeProject);



        PeopleSkill::create([
            'idPeople' => '',
            'idSkill' => ''

        ]);

        PeopleProject::create([
            'idPeople' => '',
            'idProject' => ''

        ]);

        PeopleAddress::create([
            'idPeople' => '',
            'idAddress' => ''

        ]);
    }
}
