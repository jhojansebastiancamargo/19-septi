<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $primarykey = 'id';
    protected $fillable = [
        'names',
        'date_delivery',
        'delivery_time',
        'description',
    ];
}
