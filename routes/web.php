<?php

Route::get('lang/{lang}', 'IdiomaController@swap') -> middleware('web') -> name('change_lang');

Route::get('/', function () {
    return view('pages.index');
});
Route::post('/send/contacto', 'FrontController@sendMailContacto') -> name ('sendMailContacto');
