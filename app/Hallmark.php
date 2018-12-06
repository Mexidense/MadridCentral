<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Hallmark extends Eloquent
{
    protected $connection ='mongodb';
    protected $collection = 'Hallmarks';
    protected $primaryKey = 'plate';

//    protected $table = 'hallmarks';
//    protected $primaryKey = 'plate';
    protected $fillable = [
        'plate',
        'tag',
    ];

}
