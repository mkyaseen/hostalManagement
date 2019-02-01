<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function people(){
        return $this->hasMany('App\Person');
    }
    public  function isBigRoom(){

        if ($this->people->count()>30){
            return true;
        }
        return false;
    }
}
