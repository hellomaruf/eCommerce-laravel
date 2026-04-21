<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.web.home');
});

Route::get('about', function () {
    return view('layouts.web.about');
});
