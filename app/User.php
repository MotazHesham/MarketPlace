<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function order(){
        return $this->hasMany("App\Order",'id_user');
    }

    public function product(){
        return $this->hasMany("App\Product",'id_user');
    }

    public function comment(){
        return $this->hasMany("App\Comment",'id_user');
    }

    public function cart(){
        return $this->belongsTo("App\Cart",'id_user');
    }
    

}
