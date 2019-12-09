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
    $fruit = file_get_contents('1.json');
    $json = json_decode($fruit, true);
    return "The fruit is ". $json['Name'] ." to a ". $json['Certainty'] ." percentage certainty and it is ". $json['Result'];
});
