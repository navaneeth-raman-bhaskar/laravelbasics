<?php
/**
 * Created by PhpStorm.
 * User: athira
 * Date: 20/8/18
 * Time: 5:20 PM
 */

namespace App;

use App\Users;
use Illuminate\Database\Eloquent\Model;

class Dtable extends Model
{
    protected $table='notes';
    function getDataTable(){
     $notes= $this->all();
     return $notes;
}

}