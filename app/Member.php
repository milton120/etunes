<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
//use Laravel\Cashier\Billable;

//use Illuminate\Contracts\Auth\Authenticatable;
//use Illuminate\Auth\Authenticatable;

class Member extends Model implements Authenticatable{
    //
    //use Authenticatable;
    use \Illuminate\Auth\Authenticatable;
    //use Billable;

    protected $table = 'member';
    public $timestamps = false;
    protected $primaryKey = 'memberId';
}
