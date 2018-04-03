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
    return view('pages/index')->with(['page' => 'index']);
});
Route::get('/articles', function () {
    return view('pages/articles')->with(['page' => 'articles']);
});
Route::get('/article1', function () {
    return view('pages/article1')->with(['page' => 'articles']);
});
Route::get('/article2', function () {
    return view('pages/article2')->with(['page' => 'articles']);
});
Route::get('/article3', function () {
    return view('pages/article3')->with(['page' => 'articles']);
});
Route::get('/chat', function () {
    return view('pages/chat')->with(['page' => 'chat']);
});
Route::get('/register', function () {
    return view('pages/register')->with(['page' => 'register']);
});
Route::get('/about-us', function () {
    return view('pages/about-us')->with(['page' => 'about-us']);
});
Route::post('/register', 'AccountController@storeUser');

Route::post('/chat/save-message', 'AccountController@saveChatMassage');
Route::get('/chat/get-messages', 'AccountController@getChatMessages');