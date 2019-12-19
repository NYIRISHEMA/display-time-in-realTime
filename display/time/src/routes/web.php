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

use Display\Time\Time;
Route::get('time/{timezone}', function($timezone){
    $time = new Time();
    return $time->TimeDisplay($timezone);
});
