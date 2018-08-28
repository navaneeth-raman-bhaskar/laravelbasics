<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 20/8/18
 * Time: 5:20 PM
 */

namespace App\Http;


use App\Users;
use Illuminate\Database\Eloquent\Model;

class Dtable extends Model
{
    protected $table='notes';
function getTable1(){
   $notes= $this->all();
    return $notes;
}

}