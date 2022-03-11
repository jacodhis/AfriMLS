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

// navigation routes
Route::get('/', 'IndexController@landingPage')->name('landingPage');
Route::get('/about-us', 'IndexController@aboutUs')->name('aboutUs');
Route::get('/contact-Us', 'IndexController@contactPage')->name('contactPage');
//property routes


Route::get('/properties', 'PropertyController@properties')->name('properties');
Route::get('ok',function(){
return 'hi';
})->name('addProperty');

Route::get('/my-properties', 'PropertyController@myproperties')->name('myproperties');
Route::get('/properties/{id}', 'PropertyController@show')->name('propertyShow');

//agents routes
Route::get('/agents', 'AgentsController@agents')->name('agents');
Route::get('/agents-profile', 'AgentsController@agentsProfile')->name('agentsProfile');
Route::get('/agents-dashboard', 'AgentsController@dashboard')->name('agentdashboard');


Route::get('/property', [App\Http\Livewire\Property::class,'render'])->name('property');





//user route
Route::get('/user-profile', 'UserController@userProfile')->name('userProfile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
