<?php

use Illuminate\Http\Request;

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

Route::post('user', 'UserController@register');
Route::post('user/login', 'UserController@login');
Route::post('question', 'QuestControler@ask');
Route::post('answear', 'QuestControler@answear');
Route::get('/getqns', 'QuestControler@getQns');
Route::get('getAnsw/{id}', 'QuestControler@getAnsw');
Route::post('user/forgetPass', 'UserController@forgetPass');
Route::get('/file','imageController@pdfview');
Route::get('/primary_subjects','SubjectsController@primary');
Route::get('/subjects/{class_id}','SubjectsController@subjects');
Route::get('/material/{sub_id}','MaterialController@getMaterial');
Route::get('/necta/{sub_id}','MaterialController@getNecta');
Route::get('/review/{sub_id}','MaterialController@getReview');
Route::get('news','MaterialController@getNews');
Route::get('nursery_videos','MaterialController@nursery');
Route::get('nursery_material','MaterialController@nurseryMaterial');
Route::get('college_material/{college_name}','MaterialController@collegeMaterial');
Route::get('/research','MaterialController@research');
