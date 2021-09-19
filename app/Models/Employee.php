<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = [
        'names',
        'lastnames',
        'direction',
        'telephone',
        'email',
        'username',
        'password',
    ];
}
