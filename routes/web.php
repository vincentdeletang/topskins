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

Route::get('/', 'WeaponsController@home');

Route::get('/vote', 'WeaponsController@vote');

Route::post('/storeVote', 'WeaponsController@storeVote');
Route::get('/{weapon}', 'WeaponsController@showCategory');

Route::get('/weapon/{weaponId}', 'WeaponsController@showWeapon');
