<?php

use App\Events\SendText;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Route;



Route::get('/',function (){
    return view("home");
})->middleware("notLoggedIn");

Route::post('/',function (){

    $text = Request()->names;

    Request()->validate(["names" => "required"]);

    event(new SendText($text));

    // SendText::dispatch();
})->name("send");



Route::post('/login',function (){

    $username = Request()->username;
    session()->put("username",$username);
    Request()->validate(["username" => "required"]);
    return redirect("/");
    $username = "";
})->name("login");


Route::get('/login',function (){
    return view("joinRoom");
})->name("joinRoom");
