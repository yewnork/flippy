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
use App\CoinFlip;

Route::get('test', function(){
  $coinflip = new CoinFlip;
  $outcomes = $coinflip->outcomes();
  $outcomes = CoinFlip::outcomes();
  dd($outcomes[1]);
});

Route::get('/', 'FlipController@index')->name('coinFlipMain');

Route::post('/', 'FlipController@store')->name('coinFlip');

Route::get('flip/{coinFlip}', 'FlipController@show')->name('coinFlipResult');

Route::post('flip/{coinFlip}/make', 'FlipController@makeseries')->name('coinFlipMakeSeries');


Route::get('series/{coinFlipsSeries}', 'CoinFlipsSeriesController@show')->name('coinFlipsSeries'); 
Route::post('series/{coinFlipsSeries}', 'CoinFlipsSeriesController@addCoinFlip')->name('createCoinFlipOnSeries');