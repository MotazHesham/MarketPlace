<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

    public function user(){
        return $this->hasMany("app/User");
    }

    public function product(){
        return $this->hasMany("app/Product");
    }
    
}
