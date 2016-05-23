<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

//class User extends Authenticatable
//{

class User extends Model implements Authenticatable {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    //protected $table='member';
    use \Illuminate\Auth\Authenticatable;
    
    protected $fillable = [
         'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
