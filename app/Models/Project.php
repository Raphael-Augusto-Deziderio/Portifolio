<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'Project';
    protected $primaryKey = 'idProject';

    protected $fillable = [
        'nameProject',
        'descProject',
        'urlProject',
        'pathImgProject',
        'idTypeProject',
    ];
}
