<?php

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

/*For home page*/
Route::get('/','indexController@index');
Route::get('/index','indexController@home');
Route::post('/indexR','indexController@storeRoom');
Route::get('/fetch', 'indexController@fetch')->name('fetch');
Route::get('/findPrice','indexController@findPrice')->name('findPrice');
//To cancel reservation of room
Route::get('/deleteReservation/{id}','indexController@deleteReservation');

/*For room page*/
Route::get('/room','roomController@room');
Route::post('/roomR','roomController@storeRoom');
Route::get('/fetch', 'indexController@fetch')->name('fetch');
Route::get('/findPrice','indexController@findPrice')->name('findPrice');
//To cancel reservation of room
Route::get('/deleteReservation/{id}','indexController@deleteReservation');

/*For journey page*/
Route::get('/journey','journeyController@journey');
Route::post('/trip','journeyController@storeJourney');
//To cancel reservation of journey
Route::get('/deleteJourney/{id}','journeyController@deleteJourney');


/*For restaurant page*/
Route::get('/restaurant','restaurantController@restaurant');
Route::post('/table','restaurantController@storeRestaurant');
//To cancel reservation of table
Route::get('/deleteReservationTable/{id}','restaurantController@deleteReservationTable');

/*For gallery page*/
Route::get('/gallery','galleryController@gallery');



/*For contact page*/
Route::get('/contact','contactController@contact');
Route::post('/send','contactController@storeContact');


/*For about page*/
Route::get('/about','contactController@about');

/*For Admin*/
Route::middleware(['auth','admin'])->group (function()
{
    Route::get('/users','usersController@index')->name('Admin.index');
    Route::get('/users/create','usersController@create')->name('Admin.create');
    Route::get('/admin','usersController@index')->name('Admin.admin');
    Route::get('/roomReservation','usersController@roomReservation');
    Route::get('/restaurantReservation','usersController@restaurantReservation');

    Route::get('/roomTable','usersController@roomTable');
    Route::get('/createRoom','usersController@createRoom');
    Route::post('/roomTable','usersController@storeRoom');
    Route::get('/roomTable/{id}','usersController@showRoom');
    Route::get('/editRoom/{id}','usersController@editRoom');
    Route::post('/editRoom/{id}/updateRoom','usersController@updateRoom');
    Route::get('/deleteRoom/{id}','usersController@deleteRoom');

    Route::get('/restaurantTable','usersController@restaurantTable');
    Route::get('/createRestaurant','usersController@createRestaurant');
    Route::post('/restaurantTable','usersController@storeRestaurant');
    Route::get('/restaurantTable/{id}','usersController@showRestaurant');
    Route::get('/editRestaurant/{id}','usersController@editRestaurant');
    Route::post('/editRestaurant/{id}/updateRestaurant','usersController@updateRestaurant');
    Route::get('/deleteRestaurant/{id}','usersController@deleteRestaurant');

//upload image
    Route::get('imageUpload', 'ImageUploadController@imageUpload')->name('image.upload');
    Route::post('imageUpload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

    Route::get('/galleries','galleryController@usergalleries');
    Route::get('/galleries/{id}','galleryController@show');
    Route::post('/galleries','galleryController@store');

    Route::get('/galleryedit/{id}','galleryController@edit');
    Route::get('/gallerydelete/{id}','galleryController@delete');
    Route::post('/galleryedit/{id}/update','galleryController@update');


});



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@home')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
