<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycontroller;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/mypage',[mycontroller::class,'mydata']);
