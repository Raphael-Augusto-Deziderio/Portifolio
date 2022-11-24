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
use App\Models\TechProject;
use App\Models\TypeProject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            ['nameSkill' => 'hardworking', 'descSkill' => 'hardworking'],
        ];


        DB::table('Skill')->insert($skill);



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
            ['nameTech' => 'Vue.Js', 'descTech' => 'Framework for Javascript'],
            ['nameTech' => 'Wordpress', 'descTech' => 'Wordpress']
        ];

        DB::table('Technology')->insert($tech);


        $peopleTech = [
            ['idPeople' => '1', 'idTechnology' => '1', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '2', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '3', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '4', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '5', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '6', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '7', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '8', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '9', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '10', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '11', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '12', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '13', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '14', 'timeExperience' => '', 'Competency' => ''],
            ['idPeople' => '1', 'idTechnology' => '14', 'timeExperience' => '', 'Competency' => ''],
        ];

        DB::table('PeopleTechnology')->insert($peopleTech);


        Address::create([
            'nameCity' => 'Uberaba',
            'nameState' => 'Minas Gerais',
            'nameCountry' => 'Brasil'
        ]);

        $typeProject = [
            ['nameTypeProject' => 'Games', 'descTypeProject' => 'Games'],
            ['nameTypeProject' => 'Sites', 'descTypeProject' => 'Sites'],
            ['nameTypeProject' => 'App', 'descTypeProject' => 'App'],
            ['nameTypeProject' => 'Study', 'descTypeProject' => 'Study'],
        ];

        DB::table('TypeProject')->insert($typeProject);


        $project = [
            ['nameProject' => 'EducaKids', 'descProject' => 'Education Mobile Game', 'urlProject' => 'https://play.unity.com/mg/other/educakids', 'pathImgProject' => '', 'idTypeProject' => '1'],
            ['nameProject' => 'Wander Cell', 'descProject' => 'GameJam+ 2019 finalist game', 'urlProject' => 'https://gamejolt.com/games/wandercell/430889', 'pathImgProject' => '', 'idTypeProject' => '1'],
            ['nameProject' => 'MCF Agropecuária', 'descProject' => 'Institutional website for the company MCF Agropecuária', 'urlProject' => 'https://www.mcfagropecuaria.com.br/', 'pathImgProject' => '', 'idTypeProject' => '2'],
            ['nameProject' => 'Império Leilões', 'descProject' => 'Institutional website for the company Império Leilões', 'urlProject' => 'https://imperioleiloesuberaba.com.br/', 'pathImgProject' => '', 'idTypeProject' => '2'],
            ['nameProject' => 'Laramusic', 'descProject' => 'Project for study', 'urlProject' => '', 'pathImgProject' => '', 'idTypeProject' => '4'],
        ];


        DB::table('Project')->insert($project);


        /*$techProject = [];
        TechProject::create($techProject);


        PeopleSkill::create([
            'idPeople' => '',
            'idSkill' => ''
        ]); */

        $peopleProject = [
            ['idPeople' => '1', 'idProject' => '1'],
            ['idPeople' => '1', 'idProject' => '2'],
            ['idPeople' => '1', 'idProject' => '3'],
            ['idPeople' => '1', 'idProject' => '4'],
            ['idPeople' => '1', 'idProject' => '5'],
        ];

        DB::table('PeopleProject')->insert($peopleProject);


        PeopleAddress::create([
            'idPeople' => '1',
            'idAddress' => '1'
        ]);
    }
}
