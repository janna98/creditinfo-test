<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('info');
});

Route::get('/new', function () {
    return view('new');
});

Route::post('/info', function (Request $request) {
    $validatedData = $request->validate([
        'title' => ['required'],
    ]);

    $title = $request->title;
    $body = $request->body;
    $request->session()->push('information', array("title"=>$title, "body"=>$body));
    return redirect('/');
});
