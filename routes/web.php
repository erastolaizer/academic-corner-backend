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

Route::get('/', 'SubjectsController@getSub');
Route::get('/youtube', function () {
    return view('youtubeloader');
});
Route::post('news','imageController@sendNews');
Route::post('upload','imageController@sendpdf');
Route::post('upload/nursery','imageController@nurseryMat');
Route::post('upload/nursery_videos','imageController@nurseryVid');
Route::post('upload/research','imageController@research');
Route::post('upload/college','imageController@college');
Route::get('/postpdf','imageController@pdf');
Route::get('/subjects/{class_id}','SubjectsController@subjects');

Route::get('/postNews', function () {
    return view('news');
});
Route::get('/postResearch', function () {
    return view('research');
});
Route::get('/postCollege', function () {
    return view('college');
});
Route::get('/postNurseryMaterial', function () {
    return view('postNurseryMaterial');
});
Route::get('/postNurseryVideos', function () {
    return view('postNurseryVideos');
});
