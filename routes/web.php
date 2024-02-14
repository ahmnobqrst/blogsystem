<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\SettingController;
use App\Http\Controllers\Dashboard\UserController;
//use Yajra\DataTables\Facades\DataTables;
use Auth;

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
    return view('dashboard.index');
    //return view('dashboard.layouts.layout');
});


route::group(['prefix'=>'dashboard' ,'as'=>'dashboard.','middleware'=>['auth','chekloginstatus']],function(){

     route::get('/',function(){
        return view('dashboard.layouts.layout');
    })->name('setting');

    route::get('settings',function(){
        return view('dashboard.settings');
    })->name('setting');
   
    route::post('settings/update/{setting}',[SettingController::class,'Update'])->name('setting.update');

    route::get('/users/all',[UserController::class,'getUserData'])->name('users.all');

    Route::resource('users', UserController::class);

   
    



    route::get('users',function(){
        return view('dashboard.user.index');
    })->name('show_user');

    route::get('show_user_page',function(){
        return view('dashboard.user.create');
    })->name('create_user');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
route::get('user',function(){
    return view('index');
});

