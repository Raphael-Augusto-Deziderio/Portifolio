<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProject extends Model
{
    use HasFactory;

    protected $table = 'TypeProject';

    protected $fillable = [
        'nameTypeProject',
        'descTypeProject',
    ];
}
