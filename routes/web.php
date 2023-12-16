<?php

use App\Http\Controllers\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\BusController;
use App\Http\Controllers\authController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\pdfcontroller;
use App\Http\Controllers\SiegeController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\TicketinvoquableController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('hotels', [Mycontroller::class,'hotels'])->name('hotels');
Route::get('prixhotel', [Mycontroller::class,'prixhotel'])->name('prixhotel');
Route::get('loisirs', [Mycontroller::class,'loisirs'])->name('loisirs');
Route::get('travel', [Mycontroller::class,'travel'])->name('travel');
Route::get('popularplace', [Mycontroller::class,'popularplace'])->name('popularplace');
Route::get('homeadmin', [Mycontroller::class,'homeadmin'])->name('homeadmin');

Route::get('/admin', [authController::class,'Administration'])->middleware('IsAdmin')->name('admin');
Route::get('inscription', [authController::class,'inscription'])->name('inscription');
Route::post('traitementinscription', [authController::class,'traitementinscription'])->name('traitementinscription');
Route::post('traitementconnexion', [authController::class,'traitementconnexion'])->name('traitementconnexion');
Route::get('connexion', [authController::class,'connexion'])->name('connexion');
Route::get('hotel', [authController::class,'hotel'])->name('hotel');
Route::get('/deconnexion', [authController::class,'deconnexion'])->name('deconnexion');
Route::get('/agence', [authController::class,'agence'])->name('agenceInscription');
Route::post('/traitementagence', [authController::class,'traitementagence'])->name('traitementagence');
Route::get('/agenceConnexion', [authController::class,'agenceConnexion'])->name('agenceConnexion');
Route::post('/traitementconnexionAgence', [authController::class,'traitementconnexionAgence'])->name('traitementconnexionagence');
Route::get('/choixAdmin', [authController::class,'choixAdmin'])->name('choixAdmin');
Route::get('/deconnexionAdmin', [authController::class,'deconnexionAdmin'])->name('deconnexionAdmin');
Route::get('/busclient', [authController::class,'busclient'])->middleware('IsClient')->name('busclient');
Route::get('/voirmonprofil/{id}', [authController::class,'voirmonprofil'])->name('voirmonprofil');
Route::get('/verification/{email}/{token}', [authController::class,'verification'])->name('verification');
Route::put('/traitementmodifierclient/{id}', [authController::class,'traitementmodifierclient'])->name('traitementmodifierclient');
Route::put('/traitementmodifieradmin/{id}', [authController::class,'traitementmodifieradmin'])->name('traitementmodifieradmin');
Route::get('/modifierclient/{id}', [authController::class,'modifierclient'])->name('modifierclient');
Route::get('/modifieradmin/{id}', [authController::class,'modifieradmin'])->name('modifieradmin');

Route::get('/editbus/{bus}', [BusController::class,'editBus'])->name('bus.edit');
Route::put('/editbus/{bus}', [BusController::class,'updatebus'])->name('traitementeditbus');
Route::get('addbus', [BusController::class,'addbus'])->name('addbus');
Route::post('traitementaddbus', [BusController::class,'traitementaddbus'])->name('traitementaddbus');
Route::get('listedesbus', [BusController::class,'listedesbus'])->name('listedesbus');
Route::delete('/deleteallbus', [BusController::class,'deleteallbus'])->name('allbusdelete');
Route::delete('/supprimerbus/{bus}',[BusController::class,'deletebus'])->name('bus.supprimer');

Route::get('/definirsiege',[SiegeController::class,'definirdessieges'])->name('listbussiege');
Route::get('/formsiege/{idbus}',[SiegeController::class,'attributSiege'])->name('formSiege');
Route::post('traitementsiege',[SiegeController::class,'traitementformsiege'])->name('traitementformsiege');
Route::get('managmentlistbus',[SiegeController::class,'managmentlistbus'])->name('managmentlistbus');
Route::get('listsiege/{mat}',[SiegeController::class,'listsiege'])->name('listsiege');
Route::delete('allsiegedelete/{mat}',[SiegeController::class,'allsiegedelete'])->name('allsiegedelete');


Route::post('traitementclient',[clientController::class,'traitementdemandeclient'])->name('traitementclient');
Route::get('infoclient/{idbus}/{nbrclient}',[clientController::class,'infoclient'])->name('infoclient');
Route::get('pdf/{id}',[pdfcontroller::class,'pdf'])->name('pdf'); 



// Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
