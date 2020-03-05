<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //

    public function user(){
    	return $this->belongsTo("app/User");
    }

    public function product(){
    	return $this->belongsTo("app/product");
    }

}
