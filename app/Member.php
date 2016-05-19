<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Member extends Model implements Authenticatable
{
    //
    use Authenticatable;
    protected $table = 'member';
    public $timestamps = false;
    protected $primaryKey = 'memberId';
}
