<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    return view('noticias.index');
})->name('noticias.index');

Route::get('/noticias/article_1', function () {
    return view('noticias.article_1');
})->name('noticias.article_1');

Route::get('/noticias/article_2', function () {
    return view('noticias.article_2');
})->name('noticias.article_2');

Route::get('/noticias/article_3', function () {
    return view('noticias.article_3');
})->name('noticias.article_3');

Route::get('/noticias/article_4', function () {
    return view('noticias.article_4');
})->name('noticias.article_4');

Route::get('/noticias/article_5', function () {
    return view('noticias.article_5');
})->name('noticias.article_5');

Route::get('/cronica', function () {
    return view('noticias.cronica');
})->name('cronica');

Route::get('/ingles', function () {
    return view('noticias.textoIngles');
})->name('ingles');

Route::get('/opinion', function () {
    return view('noticias.opinion');
})->name('opinion');
