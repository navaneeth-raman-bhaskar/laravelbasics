<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    function cook(Request $r){
        $res= new Response('hi');
        $res->withCookie(cookie(
            'name', 'value',6));
        return $res;
    }//cookie created
}
