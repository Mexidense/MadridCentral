<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hallmark extends Model
{
    protected $table = 'hallmarks';
    protected $fillable = [
        'plate',
        'tag',
    ];

}
