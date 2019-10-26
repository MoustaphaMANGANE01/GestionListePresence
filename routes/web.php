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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('layout');
});
Route::get('/user', 'etudiantsController@formulaire');
Route::post('/user', 'etudiantsController@traitement');

Route::get('/etudiant', 'etudiantsController@voir');

Route::get('/supprEtudiant/{id}', 'etudiantsController@suppression');
Route::post('/imprimer', 'etudiantsController@impression');

Route::get('/userUpdate', 'etudiantsController@formulaireUpdate');
Route::post('/userUpdate/{id}', 'etudiantsController@traitementUpdate');