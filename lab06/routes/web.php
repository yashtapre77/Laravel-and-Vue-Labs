<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonController;


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
    "name" => "Yash"
]);
Route::get('/person/{name}', function($name){
    return "The name is $name.";
});
Route::get('/person/{name?}', function(?string $name = 'yashtapre77'){
    return "The name is $name.";
})->name('person');

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('profile');

Route::get(
    '/contact',
    [HomeController::class, 'contact']
)->name('contact');

Route::post(
    '/contact',
    [HomeController::class, 'create']
)->name('contact.create');

Route::get(
    '/person/{name?}',
    [PersonController::class, 'index']
)->name('person.index');

Route::resources([
    'person'=> PersonController::class
]);

Route::resource('person', PersonController::class)->only(['index','create']);
Route::resource('person', PersonController::class)->except(['create']);

Route::resource('person', PersonController::class)
    ->only(['index','create'])
    ->names([
        'index' => 'person.superindex',
        'create' => 'person.supercreate'
    ]);

