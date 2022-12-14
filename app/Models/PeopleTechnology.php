<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleTechnology extends Model
{
    use HasFactory;

    protected $table = 'PeopleTechnology';

    protected $fillable = [
        'idPeople',
        'idTechnology',
        'timeExperience',
        'Competency',
    ];
}
