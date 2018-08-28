<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 28/8/18
 * Time: 11:20 AM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    protected $primaryKey='sub_id';
    public  function stud(){
        return $this->belongsToMany(Student::class,'registered','su_id','st_id');
    }
}