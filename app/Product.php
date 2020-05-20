<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     public function category(){
    	return $this->belongsTo("App\Category");
    }

    public function comment(){
    	return $this->hasMany("App\Comment");
    }
    
    public function user(){
    	return $this->belongsTo("App\User",'id_seller');
    }

    public function cart(){
        return $this->BelongsToMany("App\Cart");
    }

    public function order(){
        return $this->BelongsToMany("App\Order");
    }

}
