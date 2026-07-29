@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb"><a href="index.html">Inicio</a> / Contáctenos</div>
        <h1>Contác<span>tenos</span></h1>
    </div>
</section>

<section class="contacto-page" id="contacto-form">
    <div class="container">
        <div class="contacto-grid" style="position:relative;z-index:2;">

            <!-- Info -->
            <div class="contacto-info reveal-left">
                <div class="section-label">Estamos Aquí para Ti</div>
                <h2 class="section-title" style="color:var(--white);">Hablemos de tu <span class="accent">Proyecto</span></h2>
                <p class="section-desc">
                    Cuéntanos qué necesitas. Nuestro equipo comercial y técnico está disponible para asesorarte, ofrecerte una
                    cotización detallada y acompañarte en cada etapa de tu proyecto.
                </p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="ci-icon"><svg data-feather="phone"></svg></div>
                        <div>
                            <div class="ci-label">Teléfono / WhatsApp</div>
                            <div class="ci-value">+51 908 915 609</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="ci-icon"><svg data-feather="mail"></svg></div>
                        <div>
                            <div class="ci-label">Correo Electrónico</div>
                            <div class="ci-value">contacto@steelfor.pe</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="ci-icon"><svg data-feather="map-pin"></svg></div>
                        <div>
                            <div class="ci-label">Ubicación</div>
                            <div class="ci-value">Trujillo, La Libertad — Perú</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="ci-icon"><svg data-feather="clock"></svg></div>
                        <div>
                            <div class="ci-label">Horario de Atención</div>
                            <div class="ci-value">Lunes a Viernes: 8:00 am – 6:00 pm</div>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="ci-icon"><svg data-feather="message-circle"></svg></div>
                        <div>
                            <div class="ci-label">WhatsApp Directo</div>
                            <div class="ci-value">
                                <a href="https://wa.me/51908915609" style="color:var(--orange);font-weight:600;" target="_blank">
                                    Iniciar conversación →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="social-links" style="margin-top:8px;">
                    <a href="#" class="social-link" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                        </svg>
                    </a>
                    <a href="https://wa.me/51908915609" class="social-link" aria-label="WhatsApp" target="_blank">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 0 1-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 0 1-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 0 1 2.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0 0 12.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 0 0 5.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 0 0-3.48-8.413Z" />
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Form -->
            <div class="contacto-form-wrap reveal-right">
                <h3>Solicita tu Cotización</h3>
                <p>Responderemos en menos de 24 horas hábiles. Tu consulta es importante para nosotros.</p>
                <form id="cotizacionForm">
                    <div class="form-grid">
                        <div class="form-group">
                            <label>Nombre completo *</label>
                            <input type="text" name="nombre" placeholder="Tu nombre y apellido" required />
                        </div>
                        <div class="form-group">
                            <label>Empresa / Organización</label>
                            <input type="text" name="empresa" placeholder="Nombre de tu empresa" />
                        </div>
                        <div class="form-group">
                            <label>Correo electrónico *</label>
                            <input type="email" name="correo" placeholder="correo@empresa.com" required />
                        </div>
                        <div class="form-group">
                            <label>Teléfono / WhatsApp</label>
                            <input type="tel" name="telefono" placeholder="+51 900 000 000" />
                        </div>
                        <div class="form-group full">
                            <label>Tipo de proyecto / servicio *</label>
                            <select name="tipoProyecto" required>
                                <option value="">Selecciona una opción</option>
                                <option>Fabricación de carrocería para camión</option>
                                <option>Cisterna de combustible</option>
                                <option>Cisterna de agua</option>
                                <option>Cisterna para producto químico</option>
                                <option>Mantenimiento y reparación</option>
                                <option>Estructuras metálicas para transporte</option>
                                <option>Proyecto especial a medida</option>
                                <option>Otro</option>
                            </select>
                        </div>
                        <div class="form-group full">
                            <label>Describe tu proyecto o consulta *</label>
                            <textarea name="mensaje" rows="5"
                                placeholder="Cuéntanos los detalles de tu proyecto: capacidad requerida, tipo de carga, marca de camión, plazos, etc."
                                required></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn-primary"
                        style="margin-top:20px;width:100%;justify-content:center;font-size:1rem;padding:16px;">
                        <svg data-feather="send" width="18" height="18"></svg>
                        Enviar Solicitud de Cotización
                    </button>
                    <p style="font-size:.8rem;color:rgba(255,255,255,.4);text-align:center;margin-top:12px;">
                        Al enviar este formulario, aceptas que STEELFOR use tu información para contactarte.
                    </p>
                </form>
            </div>
        </div>

        <!-- Map placeholder -->
        <div class="map-placeholder reveal">
            <svg data-feather="map-pin"></svg>
            <span>[ Mapa de ubicación — Trujillo, La Libertad, Perú ]</span>
            <a href="https://maps.google.com/?q=Trujillo,Peru" target="_blank" rel="noopener">
                Ver en Google Maps <svg data-feather="external-link" width="14" height="14"></svg>
            </a>
        </div>
    </div>
</section>

@endsection
@section('scripts')

@endsection