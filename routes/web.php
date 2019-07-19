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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/test', function () {
    return 'hello world';
});

Route::get('/', [
    'as'=>'layout',
    'uses'=>'LinkController@layout'
])->middleware('auth');

Route::get('/add', [
    'as'=>'addLink',
    'uses'=>'LinkController@addLink'
]);
Route::post('/valid', [
    'as'=>'validLink',
    'uses'=>'LinkController@validLink'
]);

//Route::get('json','LinkController@getJson');
Route::post('json','LinkController@getJsonPost');
Route::get('ajaxRequest', 'HomeController@ajaxRequest');

Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');

//ROUTES NDJIMIRGA

Route::get('/forum', [
    'as'=>'viewForum',
    'uses'=>'EliaController@viewForum'
]);

Route::post('/addComment', ['as'=>'addComment',
    'uses'=>'EliaController@addComment'
]);
Route::get('/comment', ['as'=>'comment',
    'uses'=>'EliaController@comment'
]);

Route::get('/allComments', ['as'=>'allComments',
    'uses'=>'EliaController@allComments'
]);
Route::post('/getComments', ['as'=>'getComments',
    'uses'=>'EliaController@getComments'
]);

Route::get('/getCommentsJson', ['as'=>'getCommentsJson',
    'uses'=>'EliaController@getCommentsJson']);


