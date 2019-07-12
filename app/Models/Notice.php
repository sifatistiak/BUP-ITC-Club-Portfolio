<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    protected $fillable = ['title','desc','date','posted_by','notice_from'];
}
