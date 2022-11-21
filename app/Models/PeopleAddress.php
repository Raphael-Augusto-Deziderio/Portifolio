<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleAddress extends Model
{
    use HasFactory;

    protected $table = 'PeopleAddress';

    protected $fillable = [
        'idPeople',
        'idAddress',
    ];
}
