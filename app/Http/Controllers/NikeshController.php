<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NikeshController extends Controller
{
    function req(request $r){
        if(!0) {
            $r->flash();
           // return redirect('nikku/f');
        }
    }
    function validat(Request $request)
    {
echo "submission completed";
$request->validate(['uname.0'=>'required','pass.0'=>'required','pass.1'=>'required']);
dd($request->all());
    }
}
