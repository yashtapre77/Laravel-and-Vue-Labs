<?php

use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return "Hello From RCOEM";
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::view('/contact', 'contact', [
    "name" => "Yash-Tapre"
]);
Route::get('/person/{name}', function($name){
    return "The name is $name.";
});
Route::get('/person/{name?}', function(?string $name = 'yashtapre77'){
    return "The name is $name.";
})->name('person');

