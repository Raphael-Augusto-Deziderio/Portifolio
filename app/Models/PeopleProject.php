<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleProject extends Model
{
    use HasFactory;

    protected $table = 'PeopleProject';

    protected $fillable = [
        'idPeople',
        'idProject',

    ];
}
