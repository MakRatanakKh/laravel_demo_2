<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'NoteController@showHomePage');

Route::get('/add_note', function (){
    return view('add_note');
});

Route::post('/add_note', 'NoteController@addNote');


Route::get('/edit_note/{id}', 'NoteController@editNote');

Route::get('/update_note/{id}', 'NoteController@updateNote');

Route::get('/delete_note/{id}', 'NoteController@deleteNote');


Route::get('/layout', function (){
    return view('layout');
});

Route::get('/children', function(){
    return view('children');
});
