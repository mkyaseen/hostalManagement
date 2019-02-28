<?php

namespace App;
use App\rooms;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public  function room(){



        return $this->belongsTo('App\Room');
    }
}
