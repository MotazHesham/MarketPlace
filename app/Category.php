<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public products(){
    	return $this->hasMany("app/Product");
    }
}
