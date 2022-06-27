<?php
use Illuminate\Http\Request;
use App\Http\Livewire\PropertyData;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/', 'Frontend\IndexController@landingPage')->name('landingPage');
Route::get('/', 'Frontend\IndexController@newlandingPage')->name('landingPage');

//Route::get('/', 'Frontend\IndexController@newlandingPage')->name('newlandingPage');
Route::get('/about-us', 'Frontend\IndexController@aboutUs')->name('aboutUs');
Route::get('/contact-Us', 'Frontend\IndexController@contactPage')->name('contactPage');

//frontend controllers
Route::get('/for-sale/{id}','Frontend\propertiesController@showNavForSale')->name('showNavForSale');
Route::get('/for-rent/{id}', 'Frontend\propertiesController@showNavForent')->name('showNavForent');
Route::get('/properties/{id}', 'Frontend\propertiesController@viewPageshow')->name('propertyShow');
// receives data from search form
Route::get('search','Frontend\SearchController@search')->name('search-form');


// sends data from serach controller to the propertyData class
// Route::get('/all-properties/show',[PropertyData::class,'render'])->name('properties');



//agents routes
Route::get('/agents', 'Frontend\AgentsController@agents')->name('agents');
Route::get('/agents-profile', 'Frontend\AgentsController@agentsProfile')->name('agentsProfile');

//property routes


Route::get('/all-properties/show','PropertyController@allProperties')->name('properties');
//ajax get locations
Route::GET('/ajaxGetLocations','PropertyController@getLocations');
// Route::GET('/ajaxGetsearchLike','PropertyController@searchLike');


Route::middleware(['auth'])->group(function () {
    Route::get('/AfriMLSdashboard', 'BackendDashboardController@dashboard')->name('backendDashboard');
    Route::get('/propertyType/create/{id}','PropertyController@create')->name('addProperty');
    Route::get('/propertyType/{propertyTypeId}','PropertyController@show')->name('properTypeShow');
    Route::post('/property/store','PropertyController@store')->name('property.store');
    Route::get('/my-properties', 'PropertyController@myproperties')->name('myproperties');
    Route::get('showsingleproperty/{id}','PropertyController@showoneproperty')->name('showsingleproperty');
    Route::get('/user-profile', 'UserController@userProfile')->name('userProfile');
});





//user route


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
