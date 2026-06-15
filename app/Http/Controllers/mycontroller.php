<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class mycontroller extends Controller
{
    //
    public function mydata(){
        $students=["ali","ahmed","moiz",];
        return view('mypage',compact('students'));
    }
    function insert(Request $req){
        $tbl=new category();
       $tbl->cname= $req->cname;
       $tbl->save();
       return Redirect('mypage');

    }
}
