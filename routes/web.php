<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.master');
});


Route::get('/about-us',function(){
    return view('layouts.about-us');
});