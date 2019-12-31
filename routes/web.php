<?php

Route::get('/',[
    'uses'  =>   'ExampleController@index',
    'as'    =>   '/'
]);
Route::get('/about',[
    'uses'  =>   'ExampleController@about',
    'as'    =>   'about'
]);

Route::get('/contact',[
    'uses'  =>   'ExampleController@contact',
    'as'    =>   'contact'
]);
Route::get('/service',[
    'uses'  =>   'ExampleController@service',
    'as'    =>   'service'
]);
Route::get('/add-student',[
    'uses'  =>   'StudentController@addStudent',
    'as'    =>   'add-student'
]);
Route::post('/new-student',[
    'uses'  =>   'StudentController@newStudent',
    'as'    =>   'new-student'
]);
Route::get('/view-student',[
    'uses'  =>   'StudentController@viewStudent',
    'as'    =>   'view-student'
]);
Route::get('/edit-student/{id}',[
    'uses'  =>   'StudentController@editStudent',
    'as'    =>   'edit-student'
]);
Route::post('/update-student',[
    'uses'  =>   'StudentController@updateStudent',
    'as'    =>   'update-student'
]);
Route::get('/delete-student/{id}',[
    'uses'  =>   'StudentController@deleteStudent',
    'as'    =>   'delete-student'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
