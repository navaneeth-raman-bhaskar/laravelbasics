<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 28/8/18
 * Time: 11:19 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table='student';
    protected $primaryKey='stud_id';
    public  function sub(){
        return $this->belongsToMany(Subject::class,'registered','st_id','su_id');
    }
}