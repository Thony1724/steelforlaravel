<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\JobApplicationController;
Route::get('/', function () {
    return view('web.index');
})->name('/');

Route::get('/nosotros', function () {
    return view('web.nosotros');
})->name('/nosotros');

Route::get('/contactenos', function () {
    return view('web.contactenos');
})->name('/contactenos');

Route::get('/comunicados', function () {
    return view('web.comunicados');
})->name('/comunicados');


Route::get('/bolsa_trabajo', function () {
    return view('web.bolsa_trabajo');
})->name('bolsa_trabajo');

Route::post('/bolsa_trabajo', [JobApplicationController::class, 'store'])->name('bolsa_trabajo.store');
Route::get('/servicios', function () {
    return view('web.servicios');
})->name('/servicios');

Route::get('/proyectos', function () {
    return view('web.proyectos');
})->name('/proyectos');

Route::get('/test-mail', function () {
    try {
        Mail::raw('Prueba de correo desde Render - config correcta', function ($msg) {
            $msg->to('anthosagi17@gmail.com')->subject('Test SMTP Render 2');
        });
        return 'Enviado sin excepción. Revisa bandeja, spam y Todos los correos.';
    } catch (\Exception $e) {
        return 'ERROR: ' . $e->getMessage();
    }
});
