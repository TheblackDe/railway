<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/noticias', function () {

    return view('noticias.index');
})->name('noticias.index');

Route::get('/noticias/article_1', function () {
    return view('noticias.article_1');
})->name('noticias.article_1');

Route::get('/noticias/article_2', function () {
    return view('noticias.article_2');
})->name('noticias.article_2');
