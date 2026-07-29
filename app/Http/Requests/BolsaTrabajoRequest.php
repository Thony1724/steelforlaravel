<?php
// app/Http/Requests/BolsaTrabajoRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BolsaTrabajoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombres'      => ['required', 'string', 'max:100'],
            'apellidos'    => ['required', 'string', 'max:100'],
            'correo'       => ['required', 'email', 'max:150'],
            'celular'      => ['required', 'string', 'max:20'],
            'puesto'       => ['required', 'string'],
            'experiencia'  => ['nullable', 'string'],
            'presentacion' => ['nullable', 'string', 'max:2000'],
            'cv'           => ['nullable', 'file', 'mimes:pdf,doc,docx', 'max:5120'],

            // Honeypot: debe llegar vacío
            'website'   => ['size:0'],
            // Trampa de tiempo (segundos transcurridos desde que cargó el form)
            'form_time' => ['required', 'integer'],
        ];
    }

    public function messages(): array
    {
        return [
            'nombres.required'  => 'El nombre es obligatorio.',
            'apellidos.required'=> 'El apellido es obligatorio.',
            'correo.required'   => 'El correo es obligatorio.',
            'correo.email'      => 'Ingresa un correo válido.',
            'celular.required'  => 'El celular es obligatorio.',
            'puesto.required'   => 'Selecciona un puesto.',
            'cv.mimes'          => 'El CV debe ser PDF, DOC o DOCX.',
            'cv.max'            => 'El CV no debe superar los 5MB.',
        ];
    }
}