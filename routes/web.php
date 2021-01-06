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
$api = app('Dingo\Api\Routing\Router');

$api->version('v1', function ($api) {
    $api->get('aliments', 'ApiController@getAliments');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/addPatient',array('uses'=>'HomeController@addPatient', 'as'=>'addPatient'));
Route::get('/ajoutPatient',array('uses'=>'HomeController@ajoutPatient', 'as'=>'ajoutPatient'));

Route::get('/addAliment',array('uses'=>'HomeController@addAliment',
			'as'=>'addAliment'));
Route::get('/addEvolution',array('uses'=>'HomeController@addEvolution', 'as'=>'addEvolution'));

//Route::post('/postAliment',array('uses'=>'HomeController@postAliment', 'as'=>'postAliment'));

Route::post('/postPatient',array('uses'=>'HomeController@postPatient', 'as'=>'postPatient'));

Route::post('/afficherAliments',array('uses'=>'HomeController@postAliment' , 'as'=>'afficherAliments' ));

Route::get('/afficherAliments',array('uses'=>'HomeController@afficherAliments' , 'as'=>'afficherAliments' ));
Route::get('/admin.p','HomeController@getDossiers')->name('getDossier');
Route::get('/archive','HomeController@getArchive')->name('archive');
Route::get('/editDossier/{id}','HomeController@editerDossier')->name('editerDossier');


Route::get('/admin.p/{id}','HomeController@getDossiersById')->name('getDossiersById');
Route::get('/suivip/{id}','HomeController@suivip')->name('suivip');
Route::post('/postEvolution',array('uses'=>'HomeController@postEvolution', 'as'=>'postEvolution'));
Route::post('/postRatio',array('uses'=>'HomeController@postRatio', 'as'=>'postRatio'));
Route::post('/update.aliment/{id}',array('uses'=>'HomeController@update' , 'as'=>'update.aliment' ));
Route::get('/consultations/{id}','HomeController@conEvolutionToExcel')->name('conEvolutionToExcel');
Route::get('/dossier_medical/{id}','HomeController@conDossierToPdf')->name('conDossierToPdf');
Route::get('/dossierMedical/{id}','HomeController@PDFevolution')->name('PDFevolution');
Route::get('/evolution/{id}','HomeController@conDossierToPdf')->name('conDossierToPdf');
Route::put('updatedDossier/{id}','HomeController@updateDossier')->name('updateDossier');
Route::get('archiverDossier/{id}','HomeController@archiverDossier')->name('archiverDossier');
Auth::routes();

Route::get('/destroy.aliment/{id}',array('uses'=>'HomeController@destroy' , 'as'=>'destroy.aliment' ));


