<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;



class MyController extends Controller
{
    function myFunction($id)
    {
        echo " Controller called myFunction starts ";
        echo "id= ".$id;

    }
}