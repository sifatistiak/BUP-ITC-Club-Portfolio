<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','desc','image','event_date','event_time'];
    protected $dates = ['event_date'];
}
