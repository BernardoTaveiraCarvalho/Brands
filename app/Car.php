<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public  function owner(){
        return  $this->belongsTo('App\Owner');
    }
    public  function brand(){
        return  $this->belongsTo('App\Brand');
    }
}
