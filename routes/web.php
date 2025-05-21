<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    echo "Respect Nowshin";
});

Route::get('/about', function(){
    
    return view('about');
    echo "Welcome to about page.";
});

Route::view('/contact', 'contact');

Route::get('/product/{id}/{cat_id?}', function($id, $cat_id=0){
    echo $id. $cat_id;
    return view('product', ["id"=>$id, "cat"=>$cat_id]);
})->where(["id"=>"[0-9]+", "name"=>"[a-z]+"]);

Route::get('/test',[TestController::class, 'test']);

Route::get('/service/{id}/{cat_id?}/',[TestController::class, 'service']);

Route::get('/create',[FormController::class, 'create']);


Route::get('/save',[FormController::class, 'save']);
