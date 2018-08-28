<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected $primaryKey='user_id';
    public  function whatComment(){
        return $this->hasMany('App\Comment','by_id','user_id');
    }

}
