<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    
    public function category(){
    	return $this->belongsTo("app/Category");
    }

    public function user(){
    	return $this->belongsTo("app/User");
    }

}
