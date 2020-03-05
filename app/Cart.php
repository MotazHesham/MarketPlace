<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public user(){
        return $this->hasMany("app/User");
    }

    public product(){
        return $this->hasMany("app/Product");
    }
    
}
