<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\role_controller;
use App\Http\Controllers\TalentoController;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\Bandeja_CorreoController;
use App\Http\Controllers\HospedaIController;
use App\Http\Controllers\MensajeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//Empresa
Route::get('form_empresas', [EmpresaController::class, 'form']);
Route::get('form_ong', [EmpresaController::class, 'formong']);
Route::post('empresa/store', [EmpresaController::class, 'store']);
Route::resource('empresas', Empresacontroller::class)->names('empresas');

//Talento
Route::get('form_talentos', [TalentoController::class, 'form']);
Route::get('form_voluntariados', [TalentoController::class, 'formv']);
Route::post('talento/store', [TalentoController::class, 'store']);
Route::resource('talentos', TalentoController::class)->names('talentos');


//hospedaje
Route::get('form_hospedajes', [HospedaIController::class, 'form']);
Route::post('hospedaje/store', [HospedaIController::class, 'store']);
Route::resource('hospedajes', HospedaIController::class)->names('hospedajes');

//welcome enviar correo
Route::post('contactos/store', [ContactoController::class, 'store']);
Route::resource('contactos', ContactoController::class)->names('contactos');
Route::resource('mensajes', MensajeController::class)->names('mensajes');

//estado-hospeda
Route::get('hospedajes/vista_estado/{id}', [HospedaIController::class, 'vista_estado']);
Route::post('hospedajes/vista_estado/estadoXd', [HospedaIController::class, 'estadoXd']);

//estado-talento
Route::get('talento/vista_estado_t/{id}', [TalentoController::class, 'vista_estado_t']);
Route::post('talento/vista_estado/estado_t', [TalentoController::class, 'estado_t']);

//estado-empresa
Route::get('empresa/vista_estado_e/{id}', [EmpresaController::class, 'vista_estado_e']);
Route::post('empresa/vista_estado/estado_e', [EmpresaController::class, 'estado_e']);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', role_controller::class)->names('roles');
    Route::resource('users', user_controller::class)->names('users');

    //Empresa
    Route::resource('empresas', Empresacontroller::class)->names('empresas');
    Route::get('empresa/ver/{id}', [EmpresaController::class, 'ver']);
    Route::get('empresa/excel', [EmpresaController::class, 'exportExcel']);

    //Talento
    Route::resource('talentos', TalentoController::class)->names('talentos');
    Route::get('talento/ver/{id}', [TalentoController::class, 'ver']);
    Route::get('talento/excel', [TalentoController::class, 'exportExcel']);

    //welcome enviar correo
    Route::resource('contactos', ContactoController::class)->names('contactos');
    Route::resource('mensajes', MensajeController::class)->names('mensajes');

    //hospedaje
    Route::resource('hospedajes', HospedaIController::class)->names('hospedajes');
    Route::get('hospedaje/excel', [HospedaIController::class, 'exportExcel']);
});
