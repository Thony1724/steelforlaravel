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
    return [
        'mailer' => config('mail.default'),
        'host' => config('mail.mailers.smtp.host'),
        'port' => config('mail.mailers.smtp.port'),
        'username' => config('mail.mailers.smtp.username'),
        'encryption' => config('mail.mailers.smtp.encryption'),
    ];
});
