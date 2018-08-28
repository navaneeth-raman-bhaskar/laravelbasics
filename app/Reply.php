<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 28/8/18
 * Time: 3:57 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table='replies';
    protected $primaryKey='reply_id';

    public  function whichCommentsReply(){
        return $this->belongsTo('App\Comment','c_id','comment_id');
    }

    public  function whichUserReplied(){
        return $this->belongsTo(Users::class,'by_id','user_id');
    }
}