<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    //

    protected $table = 'song';
    public $timestamps = false;
    protected $primaryKey = 'songId';
}
