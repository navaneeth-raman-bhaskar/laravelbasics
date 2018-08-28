<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    protected $primaryKey='comment_id';

    public  function whichUserCommented(){
        return $this->belongsTo(Users::class,'by_id','user_id');
    }

    public  function getReplies(){
        return $this->hasMany('App\Reply','c_id','comment_id');
    }
    public  function whichPostsComment(){
        return $this->belongsTo('App\Post','p_id','post_id');
    }
}
