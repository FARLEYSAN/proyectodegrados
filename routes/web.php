<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisponibleController;
use App\Http\Controllers\DispodontologiumController;
use App\Http\Controllers\DispoptometriumController;
use App\Http\Controllers\DisplaboratorioController;
use App\Http\Controllers\AsignadageneralController;
use App\Http\Controllers\CitaslibresMedicinaController;
use App\Http\Controllers\CitaslibresLaboratorioController;
use App\Http\Controllers\CitaslibresOdontologiumController;
use App\Http\Controllers\CitaslibresOptometriumController;
use App\Http\Controllers\CitasasignadasMedicinaController;
use App\Http\Controllers\CitasasignadasLaboratorioController;
use App\Http\Controllers\CitasasignadasOdontologiumController;
use App\Http\Controllers\CitasasignadasOptometriumController;
use App\Http\Controllers\DescargarController;
use App\Http\Controllers\ResultadoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use App\Mail\Confirmacion;
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
    return view('auth.login');
})->name('inicio');

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/citas.citageneral', [DisponibleController::class, 'index'])->name('home');

Route::view('citas.citageneral', 'citas.citageneral')->name('citageneral');

Route::view('citas.descargar', 'citas.descargar')->name('descargar');

Route::view('cancelacion', 'cancelacion')->name('cancelacion');

Route::view('confirmacion', 'confirmacion')->name('confirmacion');

Route::view('opcioncita', 'opcioncita')->name('opcioncita');


Route::delete('/citas.citageneral/{disponible}', [DisponibleController::class, 'destroy'])->name('disponible.destroy');

Route::get('/citas/citageneral',[DisponibleController::class,'index']);





Route::view('dispodontologium.index', 'dispodontologium.index')->name('citaodontologia');




Route::resource('dispodontologia', DispodontologiumController::class);

Route::resource('displaboratorio', DisplaboratorioController::class);

Route::resource('dispoptometria', DispoptometriumController::class);

Route::resource('disponible', DisponibleController::class);


Route::resource('citaslibres-medicinas', CitaslibresMedicinaController::class);
Route::resource('citaslibres-odontologia', CitaslibresOdontologiumController::class);
Route::resource('citaslibres-laboratorios', CitaslibresLaboratorioController::class);
Route::resource('citaslibres-optometria', CitaslibresOptometriumController::class);

Route::resource('citasasignadas-medicinas', CitasasignadasMedicinaController::class);
Route::resource('citasasignadas-odontologia', CitasasignadasOdontologiumController::class);
Route::resource('citasasignadas-laboratorios', CitasasignadasLaboratorioController::class);
Route::resource('citasasignadas-optometria', CitasasignadasOptometriumController::class);

Route::resource('descargar', CitasasignadasMedicinaController::class);
Route::resource('resultado', ResultadoController::class);

Route::get('contactanos', function (Request $request){

    $correo = new ContactanosMailable;
    Mail::to($request->user())->send($correo);

    return "Mensaje Enviado";



});

Route::get('confirmacion', function (Request $request){

    $correo = new ConfirmacionMailable;
    Mail::to($request->user())->send($correo);

    return "Mensaje Enviado";



});
























