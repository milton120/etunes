<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Authenticatable;


class Member extends Model implements \Illuminate\Contracts\Auth\Authenticatable{
    //
    //use Authenticatable;

    protected $table = 'member';
    public $timestamps = false;
    protected $primaryKey = 'memberId';
    
    protected $fillable = [ 'memberId','memberName','email','password','role','signUpDate','rank'];
}
