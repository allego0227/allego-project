<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Events\MyEvent;

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

Route::group(['middleware' => 'page_permission'], function () {
    Route::get('/', function(){
        return Inertia::render('Home/Index');
    });
});

Route::get('/socket/test', function(){
    return Inertia::render('SocketTest/Index');
});

Route::get('/socket/heartbeat', function(){
    return Inertia::render('SocketHeartBeat/Index');
});

Route::post('/test', 'CTL_Test@Method_Test');