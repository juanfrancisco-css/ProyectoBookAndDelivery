<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservaController; //importar la biblioteca
use App\Http\Controllers\RegisterController; //importar la biblioteca
use App\Http\Controllers\LoginController;//importar la biblioteca
use App\Http\Controllers\LogoutController;//importar
use App\Http\Controllers\PanelController;//importar
use App\Http\Controllers\PlatoController;//importar

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**********************************************************************************************Inicio */
Route::get('/Book&Delivery', function () {
    return view('index');
})->name('index');

Route::get('/carta', [PlatoController::class,'index'])->name('carta');

Route::get('/reserva', function () {
    return view('modulos.reserva');
})->name('reserva');

Route::get('/SobreNosotros', function () {
    return view('modulos.about');
})->name('about');

Route::get('/Contactanos', function () {
    return view('modulos.contacto');
})->name('contacto');



/*****************************************************************************************************reservas */
Route::get('reserva_index',[ReservaController::class,'index'])->name('reserva-index');
Route::get('reservas',[ReservaController::class,'create'])->name('reserva-create');
Route::post('reserva_store',[ReservaController::class,'store'])->name('reserva-store');
Route::get('/reservas_update/{id}', [ReservaController::class,'edit'])->name('reserva-edit');
Route::put('/reservas_update/{id}', [ReservaController::class,'update'])->name('reserva-update');
Route::delete('/reservas_update/{id}', [ReservaController::class,'destroy'])->name('reserva-destroy');
//pasos
Route::get('reservas-paso1',[ReservaController::class,'paso1'])->name('reserva-paso1');
Route::post('reservas-paso2',[ReservaController::class,'paso2'])->name('reserva-paso2');
Route::post('reservas-paso3',[ReservaController::class,'paso3'])->name('reserva-paso3');
Route::post('reservas-paso4',[ReservaController::class,'paso4'])->name('reserva-paso4');
Route::post('cancelar',[ReservaController::class,'cancelar'])->name('cancelar');
Route::post('modificarHora',[ReservaController::class,'modificarHora'])->name('modificarHora');

Route::post('reservas-paso5',[ReservaController::class,'paso5'])->name('reserva-paso5');




/*****************************************************************************************************admin */




Route::get('/Book&Delivery/Registrarse',[RegisterController::class,'show'])->name('registrarse');   //visualizar
Route::post('/Book&Delivery/Registrarse',[RegisterController::class,'register'])->name('registrarse'); //introducir 


Route::get('/Book&Delivery/gestion',[LoginController::class,'show'])->name('login'); //visuaizar
Route::post('/Book&Delivery/gestion',[LoginController::class,'login'])->name('login'); //introducir 

Route::get('/Book&Delivery/logout',[ LogoutController::class,'logout'])->name('logout');  //salir

/*
Route::get('Book&Delivery/gestion/admin',function(){
return view('admin.index');
})->name('admin-index');
*/
Route::get('Book&Delivery/gestion/admin',[PanelController::class,'show'])->name('admin-index');//panel del menu

Route::get('test3',function(){
    return view('admin.plantillabase3');
    })->name('test3');

    
Route::get('/Book&Delivery/usuario',function(){
    return view('admin.perfil');
    })->name('perfil');

