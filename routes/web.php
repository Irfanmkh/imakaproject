<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('components.layouts.index');
});
Route::get('/app', function () {
    return view('components.layouts.app');
});
