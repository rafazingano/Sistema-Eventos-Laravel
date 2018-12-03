<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventPurchased extends Model
{
    protected $fillable = [
        'amount',
        'event_id',
        'user_id'
    ];
}
