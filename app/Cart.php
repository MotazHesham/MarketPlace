<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

    public function user(){
        return $this->hasMany("App\User",'id_user');
    }

    public function product(){
        return $this->BelongsToMany("App\Product")->withPivot('quntity');
    }
    
}
