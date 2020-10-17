<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public  function user(){
        return $this->belongsTo('App\User');
    }
}
