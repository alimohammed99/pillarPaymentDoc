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

Auth::routes();

Route::get('/home', 'UserController@index')->name('home');

Route::get('/', 'UserController@indexx')->name('home');

Route::get('/redirect', 'UserController@redirect')->name('redirect');

route::get('/add_surveyors', 'AdminController@add_surveyors', 'add_surveyors');

route::get('/view_surveyors', 'AdminController@view_surveyors', 'view_surveyors');

route::get('/add_records', 'AdminController@add_records', 'add_records');

route::get('/view_records', 'AdminController@view_records', 'view_records');

route::post('/upload_surveyors', 'AdminController@upload_surveyors', 'upload_surveyors');

route::get('/edit_surveyors/{id}', 'AdminController@edit_surveyors', 'edit_surveyors');

route::get('/delete_surveyors/{id}', 'AdminController@delete_surveyors', 'delete_surveyors');

route::post('/update_surveyors/{id}', 'AdminController@update_surveyors', 'update_surveyors');

route::post('/upload_records', 'AdminController@upload_records', 'upload_records');



route::post('add_records/import', 'CsvFile@csv_import')->name('import');

//Route::get('/home', 'HomeController@index')->name('home');
