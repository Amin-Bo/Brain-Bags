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
Route::get('/ins', function () {
    return view('connect.html.inscription');
})->name('ins');
Route::get('/con', function () {
    return view('connect.html.auth');
});
Route::middleware('auth' )->group(function () {

Route::get('/profil',function(){return view('profil.profil');})->middleware('auth');
//----------------------Demandes----------------------------
Route::get('/dem', 'DemandeController@index')->name('index');
});
Route::get('/profil','EntrepriseController@index')->middleware('auth','checkEntreprise')->name('profil');
Route::get('/inscriE',function(){
    return view('inscriEntreprise.inscription');
});
Route::get('/updateE',function(){
    return view('updateEntreprise.updateEntreprise');
})->middleware('auth','checkEntreprise');
Route::get('/index',function(){
    return view('home.index');
});
<<<<<<< HEAD
Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');
=======
Route::get('/profileetud', function(){
    return view('etudiantprofile.profilEtud');
})->middleware('auth','checkifetudiant');

Route::get('/modifprofiletude', function(){
    return view('etudiantprofile.modifProfilEtude');
})->name('modifprofE');

Route::post('/ins','EtudiantController@store')->name('store');
Auth::routes();
Route::resource('Etudian','EtudiantControler');

Route::get('/dem/show', 'DemandeController@show')->middleware('auth')->name('show');

Route::post('/inscriE','EntrepriseController@store')->name('store');
Route::post('/updateE','EntrepriseController@edit')->name('update');

>>>>>>> 8597f470e14be9c2236efc3b7d47df9fe326e458
Route::get('/formm/{idDemande}','DemandeController@test')->name('formm');
Route::post('/formm/{idDemande}', 'DemandeController@store')->name('store');

Route::get('/form', function(){
    return view('connect.html.demandeForm');})->name('formDemande')->middleware('auth');
Route::get('/liste-demandes','DemandeController@getDemandes')->name('demandesList');
Route::delete('/liste-demandes/{id}', 'DemandeController@destroy')->name('delete');
Route::resource('demande', 'DemandeController' );

//----------------------Demandes----------------------------

Auth::routes();
Route::get('/admin-dashboard', function () {
    return 'admin';
})->middleware('auth','checkAdmin');
<<<<<<< HEAD
Route::get('/home', 'HomeController@index')->name('home');

//test
Route::get('/live_search', 'LiveSearch@index');
Route::get('/live_search/action', 'LiveSearch@action')->name('live_search.action');

Route::get('/etudiants', function(){
    return view('etudiant.index');
})->middleware( 'auth' , 'admin');

Route::get('/entreprise', 'HomeController@entreprise')->middleware('admin');



Route::get('/accueil', function(){
    return view('admin.accueil');
})->name('accueil')->middleware('admin');
=======
Route::get('/home', function () {return view('home.index');})->name('home');
>>>>>>> 8597f470e14be9c2236efc3b7d47df9fe326e458


