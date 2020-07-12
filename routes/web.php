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
    $helloWorld = 'Hello World';

    return view('welcome', compact('helloWorld'));
});

Route::get('/model', function () {
    /* $user = \App\User::create([
        'name' => 'Luan Novais',
        'email' => 'email@email.com',
        'password' => bcrypt('101010')
    ]); */

    /* $user = \App\User::find(41);
    $user->update([
        'name' => 'Luan Novais'
    ]);

    dd($user); */

    return \App\User::all();
});
