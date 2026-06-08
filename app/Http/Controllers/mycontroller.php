<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mycontroller extends Controller
{
    //
    public function mydata(){
        $students=["ali","ahmed","moiz",];
        return view('mypage',compact('students'));
    }
}
