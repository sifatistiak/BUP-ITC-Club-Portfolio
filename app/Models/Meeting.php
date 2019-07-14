<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $fillable = ['subject','body','date','time'];
    protected $dates = ['date'];

}
