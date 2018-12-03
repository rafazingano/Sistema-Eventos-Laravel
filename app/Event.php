<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $dates = ['date'];

    protected $fillable = [
        'image',
        'name',
        'local',
        'description',
        'date',
        'status'
    ];
}
