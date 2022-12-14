<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleSkill extends Model
{
    use HasFactory;

    protected $table = 'PeopleSkill';

    protected $fillable = [
        'idPeople',
        'idSkill',
    ];
}
