<?php

use Illuminate\Http\Request;
use App\Http\Controllers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('evolutions','ApiController@getEvolution');

Route::middleware('api')->get('aliments','ApiController@getAliments');
Route::middleware('api')->get('categories','ApiController@getCategories');

Route::middleware('api')->get('users','ApiController@getUsers');
Route::middleware('api')->get('users/pass={pass}','ApiController@getUsersByPass');


// Route::middleware('api')->get('aliment/name={name}&category={category}&quantite={quantite}','ApiController@postAlimentAndroid');
Route::middleware('api')->get('aliment/name={name}&category={category}&quantite={quantite}&glucide={glucide}','ApiController@postAlimentAndroid');
Route::middleware('api')->get('rapport/id={id}&r1={r1}&r2={r2}&r3={r3}&r4={r4}&r5={r5}&r6={r6}&r7={r7}&r8={r8}&r9={r9}&r10={r10}&r11={r11}&r12={r12}&r13={r13}&r14={r14}&r15={r15}&r16={r16}','ApiController@postRapportAndroid');

Route::middleware('api')->get('aliments/category_id={category_id}','ApiController@getAlimentsByCategory');
Route::middleware('api')->get('aliments/name={name}','ApiController@getAlimentByName');
Route::middleware('api')->get('aliments/id={id}','ApiController@getAlimentsById');

Route::middleware('api')->get('sendReport','ApiController@sendReport');
Route::middleware('api')->get('generateReport','ApiController@generateReport');

Route::middleware('api')->get('users/commentaires/{id}','ApiController@sendComments');
Route::middleware('api')->get('update','ApiController@updateRatiosAndroid');




Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
