<?php

namespace App\Models\Model\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //use HasFactory;

     use Notifiable;

    // public function roles()
    // {
    //     return $this->belongsToMany('App\Model\admin\role');
    // }

    // public function getNameAttribute($value)
    //     {
    //         return ucfirst($value);
    //     }
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var array
    //  */
    // protected $fillable = [
    //     'name', 'email', 'password','status','phone'
    // ];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

}
