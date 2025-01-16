<?php

use Illuminate\Support\Facades\Route;

Route::get('/struktur', function () {
    return view('pages.struktur');
});

Route::get('/', function () {
    return view('pages.index');
});
