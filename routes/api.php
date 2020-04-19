<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {

    //Clients
    Route::get('/clients','ContactsController@index');
    Route::get('/clients/{client}','ContactsController@show');
    Route::post('/clients','ContactsController@store');
    Route::patch('/clients/{client}','ContactsController@update');
    Route::delete('/clients/{client}','ContactsController@destroy');

    //Projects
    Route::get('/projects', 'Api\Project\ProjectController@index');
    Route::get('/projects/{project}', 'Api\Project\ProjectController@show');
    Route::post('/projects', 'Api\Project\ProjectController@store');
    Route::patch('/projects/{project}', 'Api\Project\ProjectController@update');
    Route::delete('/projects/{project}', 'Api\Project\ProjectController@destroy');

    //Notes
    Route::delete('/notes/{note}', 'NotesController@destroy');




});

    //Invoice
    Route::get('/items','ItemController@index');
    Route::post('/items','ItemController@store');
    Route::patch('/items/{item}','ItemController@update');
    Route::delete('/items/{item}','ItemController@destroy');

Route::get('/staff','UserController@index');




