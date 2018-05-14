<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni','name', 'surname', 'country', 'city', 'tel', 'email', 'password', 'email_token', 'active', 'verified', 'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email_token',
    ];


    /*public static function verificat($id){
      if($id->verified, true){
        Si
        else(){
          No
        }
      }
    };*/
}
