<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{

    protected $fillable = ['title','desc','achiever','achiever_bio','when_achieve','image','category'];
}
