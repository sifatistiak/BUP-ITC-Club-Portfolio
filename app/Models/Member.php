<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Member extends Model
{
    use Notifiable;
    protected $fillable = ['name','email','phone','blood_group','current_address','permanent_address','home_district','department','department_roll','designation','biography','skills','achievement','image','club_id','status'];
}
