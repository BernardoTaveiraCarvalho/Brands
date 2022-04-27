<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function cars(){
        return $this->hasMany('App\Car');
    }
    public  function country(){
        return  $this->belongsTo('App\Country');
    }
}
