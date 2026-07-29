@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb"><a href="index.html">Inicio</a> / Bolsa de Trabajo</div>
        <h1>Únete al <span>Equipo</span></h1>
    </div>
</section>

<section class="bolsa-page">
    <div class="container">

        <div class="values-strip reveal">
            <div class="container values-strip-inner">
                <div class="vs-item">
                    <div class="vs-icon"><svg data-feather="trending-up"></svg></div>
                    <h4>Crecimiento</h4>
                    <p>Oportunidades reales de desarrollo profesional dentro de la empresa.</p>
                </div>
                <div class="vs-item">
                    <div class="vs-icon"><svg data-feather="heart"></svg></div>
                    <h4>Bienestar</h4>
                    <p>Ambiente de trabajo sano, respetuoso y orientado al equipo.</p>
                </div>
                <div class="vs-item">
                    <div class="vs-icon"><svg data-feather="award"></svg></div>
                    <h4>Reconocimiento</h4>
                    <p>Valoramos el esfuerzo y la dedicación de cada colaborador.</p>
                </div>
                <div class="vs-item">
                    <div class="vs-icon"><svg data-feather="shield"></svg></div>
                    <h4>Estabilidad</h4>
                    <p>Empresa sólida, en expansión, con contratos formales y beneficios.</p>
                </div>
            </div>
        </div>

        <!-- Reuse bolsa section from index -->
        <div class="bolsa-grid">
            <div class="job-listings">
                <div class="section-label" style="color:var(--orange);margin-bottom:28px;">Vacantes Disponibles</div>

                <div class="job-card reveal" data-delay="0">
                    <div class="job-card-header">
                        <div class="job-title">Soldador MIG/TIG Senior</div>
                        <span class="job-badge">Tiempo Completo</span>
                    </div>
                    <div class="job-meta">
                        <span><svg data-feather="map-pin"></svg> Trujillo</span>
                        <span><svg data-feather="briefcase"></svg> 3+ años</span>
                        <span><svg data-feather="dollar-sign"></svg> Según experiencia</span>
                    </div>
                    <p class="job-desc">Requerimos soldador senior con amplia experiencia en estructuras metálicas industriales,
                        procesos MIG y TIG. Deseable conocimiento en fabricación de cisternas y cumplimiento de planos técnicos.
                    </p>
                </div>

                <div class="job-card reveal" data-delay="80">
                    <div class="job-card-header">
                        <div class="job-title">Técnico Metalmecánico</div>
                        <span class="job-badge">Tiempo Completo</span>
                    </div>
                    <div class="job-meta">
                        <span><svg data-feather="map-pin"></svg> Trujillo</span>
                        <span><svg data-feather="briefcase"></svg> 1+ años</span>
                    </div>
                    <p class="job-desc">Técnico con sólidos conocimientos en manufactura metálica, lectura de planos y uso de
                        herramientas de taller. Actitud proactiva, responsable y orientado a resultados.</p>
                </div>

                <div class="job-card reveal" data-delay="160">
                    <div class="job-card-header">
                        <div class="job-title">Ingeniero de Producción</div>
                        <span class="job-badge">Tiempo Completo</span>
                    </div>
                    <div class="job-meta">
                        <span><svg data-feather="map-pin"></svg> Trujillo</span>
                        <span><svg data-feather="briefcase"></svg> 3+ años</span>
                    </div>
                    <p class="job-desc">Profesional de ingeniería mecánica o industrial para planificar, supervisar y optimizar
                        los procesos de fabricación. Experiencia en control de calidad y mejora continua requerida.</p>
                </div>

                <div class="job-card reveal" data-delay="240">
                    <div class="job-card-header">
                        <div class="job-title">Ejecutivo de Ventas B2B</div>
                        <span class="job-badge">Tiempo Completo</span>
                    </div>
                    <div class="job-meta">
                        <span><svg data-feather="map-pin"></svg> Lima / Trujillo</span>
                        <span><svg data-feather="briefcase"></svg> 2+ años</span>
                    </div>
                    <p class="job-desc">Comercial dinámico con experiencia en venta consultiva al sector industrial, transporte
                        o logística. Habilidad de negociación, gestión de pipeline y orientación al cliente corporativo.</p>
                </div>

                <div class="job-card reveal" data-delay="320">
                    <div class="job-card-header">
                        <div class="job-title">Asistente de Diseño CAD</div>
                        <span class="job-badge">Tiempo Completo</span>
                    </div>
                    <div class="job-meta">
                        <span><svg data-feather="map-pin"></svg> Trujillo</span>
                        <span><svg data-feather="briefcase"></svg> 1+ años</span>
                    </div>
                    <p class="job-desc">Asistente con manejo de AutoCAD o SolidWorks para soporte en diseño de carrocerías y
                        cisternas. Metódico, detallista y con capacidad de trabajo en equipo.</p>
                </div>
            </div>

            <div class="apply-form-wrap reveal-right">
                <h3>Postula Aquí</h3>
                <p>Tu próxima gran oportunidad profesional comienza con este formulario.</p>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-error">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('bolsa_trabajo.store') }}" enctype="multipart/form-data" id="applyForm">
                    @csrf

                    {{-- Honeypot --}}
                    <div style="position:absolute;left:-9999px;top:-9999px;" aria-hidden="true">
                        <label>Website</label>
                        <input type="text" name="website" tabindex="-1" autocomplete="off" value="{{ old('website') }}">
                    </div>

                    {{-- Trampa de tiempo --}}
                    <input type="hidden" name="form_time" id="form_time" value="0">

                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nombres *</label>
                            <input type="text" name="nombres" placeholder="Juan Carlos" value="{{ old('nombres') }}" required />
                            @error('nombres') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Apellidos *</label>
                            <input type="text" name="apellidos" placeholder="García López" value="{{ old('apellidos') }}" required />
                            @error('apellidos') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Correo *</label>
                            <input type="email" name="correo" placeholder="correo@ejemplo.com" value="{{ old('correo') }}" required />
                            @error('correo') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label>Celular *</label>
                            <input type="tel" name="celular" placeholder="+51 900 000 000" value="{{ old('celular') }}" required />
                            @error('celular') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group full">
                            <label>Puesto de interés *</label>
                            <select name="puesto" required>
                                <option value="">Selecciona un puesto</option>
                                <option {{ old('puesto') == 'Soldador MIG/TIG Senior' ? 'selected' : '' }}>Soldador MIG/TIG Senior</option>
                                <option {{ old('puesto') == 'Técnico Metalmecánico' ? 'selected' : '' }}>Técnico Metalmecánico</option>
                                <option {{ old('puesto') == 'Ingeniero de Producción' ? 'selected' : '' }}>Ingeniero de Producción</option>
                                <option {{ old('puesto') == 'Ejecutivo de Ventas B2B' ? 'selected' : '' }}>Ejecutivo de Ventas B2B</option>
                                <option {{ old('puesto') == 'Asistente de Diseño CAD' ? 'selected' : '' }}>Asistente de Diseño CAD</option>
                                <option {{ old('puesto') == 'Otro' ? 'selected' : '' }}>Otro</option>
                            </select>
                            @error('puesto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group full">
                            <label>Años de experiencia</label>
                            <select name="experiencia">
                                <option>Menos de 1 año</option>
                                <option>1 – 2 años</option>
                                <option>3 – 5 años</option>
                                <option>Más de 5 años</option>
                            </select>
                        </div>
                        <div class="form-group full">
                            <label>Presentación personal</label>
                            <textarea name="presentacion" placeholder="Cuéntanos brevemente sobre ti, tu experiencia y motivación...">{{ old('presentacion') }}</textarea>
                        </div>
                        <div class="form-group full">
                            <label>Adjuntar CV (PDF, DOC)</label>
                            <input type="file" name="cv" accept=".pdf,.doc,.docx" />
                            @error('cv') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn-primary" style="margin-top:20px;width:100%;justify-content:center;">
                        <svg data-feather="send" width="16" height="16"></svg>
                        Enviar Postulación
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('form_time').value = Math.floor(Date.now() / 1000);
    document.getElementById('applyForm').addEventListener('submit', function () {
        const loaded = parseInt(document.getElementById('form_time').value);
        const elapsed = Math.floor(Date.now() / 1000) - loaded;
        document.getElementById('form_time').value = elapsed;
    });
});
</script>
@endsection