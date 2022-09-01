<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/pizzas', function () {
    //從資料庫中取得資料
    $pizzas=[
        ["type"=>'hawaiian',"base"=>"cheesy crust"],
        ["type"=>'volcano',"base"=>"garlic crust"],
        ["type"=>'veg supreme',"base"=>"thin & crispy"]
    ];
    
    //request=>get傳值
    return view('pizzas', [
        'pizzas' => $pizzas,
    ]);
    //return ["name"=>"veg pizzas","base"=>"classic"];
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details',['id'=>$id]);
});
