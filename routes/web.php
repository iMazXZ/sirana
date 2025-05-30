<?php

use Illuminate\Support\Facades\Route;

Route::get('/struktur', function () {
    return view('pages.struktur');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
