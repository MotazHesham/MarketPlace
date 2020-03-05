<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //

    public function product(){
        return $this->belongsTo("app/product");
    }

    public function user(){
        return $this->belongsTo("app/User");
    }

}
