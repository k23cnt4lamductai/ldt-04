<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/ldt-view1',function(){
    return view('ldt-view1',['name'=>"K23CNT4 - Project 1 - Đức Tài "]);
});

Route::get('/ldt-view2',function(){
    return view('ldt-view2',[
        'name'=>"K23CNT4 - Project 1 - Đức Tài ",
        'array'=>[1,3,2,6,9]
    
    ]);
});

Route::get('/ldt-view3',function(){
    return view('ldt-view3',[
    
    'name'=>["K23CNT4","Project","Đức","Tài"],
    'arr'=>[1,3,2,6,9,],
'users'=>[],
]);

});