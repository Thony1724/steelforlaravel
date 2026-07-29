<?php
// app/Http/Controllers/JobApplicationController.php

namespace App\Http\Controllers;

use App\Http\Requests\BolsaTrabajoRequest;
use App\Mail\JobApplicationReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function store(BolsaTrabajoRequest $request)
    {
        if ($request->input('form_time') < 3) {
            return back()->with('error', 'No pudimos procesar tu postulación. Intenta nuevamente.');
        }

        $key = 'apply_' . $request->ip();
        if (Cache::has($key)) {
            return back()->with('error', 'Ya enviaste una postulación recientemente. Espera un momento.');
        }
        Cache::put($key, true, 60);

        $data = $request->only([
            'nombres', 'apellidos', 'correo', 'celular',
            'puesto', 'experiencia', 'presentacion',
        ]);

        $cvPath = null;
        if ($request->hasFile('cv')) {
            $storedPath = $request->file('cv')->store('cv-postulaciones', 'local');
            $cvPath = Storage::disk('local')->path($storedPath);
        }

        Mail::to('anthosagi17@gmail.com')
            ->send(new JobApplicationReceived($data, $cvPath));

        return back()->with('success', '¡Tu postulación fue enviada con éxito! Pronto nos pondremos en contacto.');
    }
}