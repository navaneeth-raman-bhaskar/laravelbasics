<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ValidationController extends Controller
{
    function req(request $r){
    dump($r->all());
           // $r->flash();//if flashed the form is filled with previous data when redirected
            echo 'hi';
    }

    function validat(Request $request)
    {
        echo "Submission completed";

        $request->validate([
            'uname.0'=>'required',
            'pass.0'=>'required',
            'pass.1'=>'MIN:4'
        ]);
    }
}
