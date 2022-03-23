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

Route::get('/welcome',function(){
    return view('welcome');
});


// navigation routes
Route::get('/', 'IndexController@landingPage')->name('landingPage');
Route::get('/about-us', 'IndexController@aboutUs')->name('aboutUs');
Route::get('/contact-Us', 'IndexController@contactPage')->name('contactPage');

//agents routes
Route::get('/agents', 'AgentsController@agents')->name('agents');
Route::get('/agents-profile', 'AgentsController@agentsProfile')->name('agentsProfile');

//property routes


Route::get('/propertyType/create/{id}','PropertyController@create')->name('addProperty');
Route::get('/propertyType/{propertyTypeId}','PropertyController@show')->name('properTypeShow');
Route::post('/property/store','PropertyController@store')->name('property.store');
Route::get('showsingleproperty/{id}','PropertyController@showoneproperty')->name('showsingleproperty');
Route::get('/my-properties', 'PropertyController@myproperties')->name('myproperties');
Route::get('/properties/{id}', 'PropertyController@viewPageshow')->name('propertyShow');

//ajax get locations
Route::GET('/ajaxGetLocations','PropertyController@getLocations');



Route::get('/AfriMLSdashboard', 'BackendDashboardController@dashboard')->name('backendDashboard');
//from dashboard backend


// Route::get('/propertyType/{propertyTypeId}', [App\Http\Livewire\PropertyData::class,'render'])->name('properTypeShow');





//user route
Route::get('/user-profile', 'UserController@userProfile')->name('userProfile');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
