<?php




Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', function () {
    return view('tasks');
});
Route::get('task', 'taskController@index' );