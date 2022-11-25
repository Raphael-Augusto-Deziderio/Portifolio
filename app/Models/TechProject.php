<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechProject extends Model
{
    use HasFactory;

    protected $table = 'TechProject';

    protected $fillable = [
        'idTechnology',
        'idProject',
    ];
}
