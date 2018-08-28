<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 28/8/18
 * Time: 3:57 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $primaryKey='post_id';

    public  function getComments(){
        return $this->hasMany('App\Comment','p_id','post_id');
    }

    public  function getAllReplies(){
        return $this->hasManyThrough('App\Reply', 'App\Comment','p_id','c_id','post_id','comment_id');
    }

    public  function whichUserPosted(){
        return $this->belongsTo(Users::class,'by_id','user_id');
    }

}