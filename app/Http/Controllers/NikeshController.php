<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NikeshController extends Controller
{
    function req(request $r){
        $array=$r->all();
//        dd($r->input('uname.0'));// accessing array element from form
//dd($r->query());

        $r->flashExcept('pass');

      return  redirect('nikku/f');
    }
}
