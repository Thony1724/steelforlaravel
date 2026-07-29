@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')


<!-- Page Hero -->
<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb">
            <a href="index.html">Inicio</a> / Nosotros
        </div>
        <h1>Quiénes <span>Somos</span></h1>
    </div>
</section>

<!-- Content -->
<section class="nosotros-content">
    <div class="container">
        <div class="nosotros-intro-grid">
            <div class="reveal-left">
                <p class="big-text">Fabricamos <span>confianza</span> en acero desde hace más de una década.</p>
            </div>
            <div class="reveal-right">
                <p>STEELFOR es una empresa especializada en el diseño, fabricación y mantenimiento de carrocerías para el
                    transporte por carretera. Desde nuestros inicios, hemos mantenido un compromiso firme con la calidad, la
                    seguridad y la innovación técnica.</p>
                <p>Nacimos para transformar la industria del transporte pesado en el Perú, ofreciendo soluciones estructurales
                    de alto rendimiento que protegen tanto a los operadores como a las cargas que transportan.</p>
                <p>Guiados por principios de integridad y excelencia, hemos construido una reputación sólida basada en el
                    cumplimiento, la honestidad y el respeto por nuestros clientes y colaboradores.</p>
                <div style="margin-top:32px;">
                    <a href="contactenos.html" class="btn-primary">
                        <svg data-feather="arrow-right" width="16" height="16"></svg>
                        Trabajemos Juntos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Timeline -->
<section class="timeline">
    <div class="container">
        <h2 class="timeline-title reveal">Nuestra <span>Trayectoria</span></h2>
        <div class="tl-items">

            <div class="tl-item reveal">
                <div class="tl-left">
                    <div class="tl-card">
                        <h4>Fundación</h4>
                        <p>STEELFOR es fundada en Trujillo con la misión de elevar los estándares de fabricación de carrocerías en
                            el norte del Perú.</p>
                    </div>
                </div>
                <div class="tl-dot">2012</div>
                <div class="tl-right"></div>
            </div>

            <div class="tl-item reveal">
                <div class="tl-left"></div>
                <div class="tl-dot">2015</div>
                <div class="tl-right">
                    <div class="tl-card">
                        <h4>Expansión de Planta</h4>
                        <p>Inauguramos nuestra primera nave de producción ampliada, triplicando nuestra capacidad operativa y
                            sumando equipos de alta tecnología.</p>
                    </div>
                </div>
            </div>

            <div class="tl-item reveal">
                <div class="tl-left">
                    <div class="tl-card">
                        <h4>Línea de Cisternas</h4>
                        <p>Lanzamos nuestra línea especializada de cisternas para combustible y agua, con diseño propio y
                            certificación de seguridad.</p>
                    </div>
                </div>
                <div class="tl-dot">2018</div>
                <div class="tl-right"></div>
            </div>

            <div class="tl-item reveal">
                <div class="tl-left"></div>
                <div class="tl-dot">2021</div>
                <div class="tl-right">
                    <div class="tl-card">
                        <h4>Certificación de Calidad</h4>
                        <p>Obtenemos certificaciones que avalan nuestros procesos de fabricación bajo estándares técnicos
                            internacionales.</p>
                    </div>
                </div>
            </div>

            <div class="tl-item reveal">
                <div class="tl-left">
                    <div class="tl-card">
                        <h4>Innovación Tecnológica</h4>
                        <p>Incorporamos sistemas de monitoreo IoT en cisternas y carrocerías, posicionándonos a la vanguardia del
                            sector en Perú.</p>
                    </div>
                </div>
                <div class="tl-dot">2025</div>
                <div class="tl-right"></div>
            </div>

        </div>
    </div>
</section>

<!-- ═══════════════════════════════════════════════════════
  MISIÓN, VISIÓN Y VALORES
════════════════════════════════════════════════════════ -->
<section id="mision">
    <div class="container">

        <div class="mision-header reveal">
            <div class="section-label">Nuestra Esencia</div>
            <h2 class="section-title" style="color:var(--white)">
                Propósito que <span class="accent">Mueve</span> Industrias
            </h2>
        </div>

        <div class="mvv-grid">
            <!-- Misión -->
            <div class="mvv-card reveal" data-delay="0">
                <div class="mvv-icon">
                    <svg data-feather="target"></svg>
                </div>
                <h3>Nuestra Misión</h3>
                <p>Diseñamos y fabricamos carrocerías de alta calidad, comprometidos con la seguridad, eficiencia e innovación
                    en el transporte por carretera. Guiados por principios de integridad, buscamos un crecimiento integral que
                    beneficie tanto a nuestros colaboradores como a nuestros clientes, garantizando siempre excelencia en cada
                    proyecto.</p>
            </div>

            <!-- Visión -->
            <div class="mvv-card reveal" data-delay="150">
                <div class="mvv-icon">
                    <svg data-feather="eye"></svg>
                </div>
                <h3>Nuestra Visión</h3>
                <p>Ser líderes en la industria de carrocerías, transformando el transporte por carretera con soluciones
                    innovadoras que marquen la diferencia en seguridad, eficiencia y durabilidad. Nos esforzamos por ser una
                    empresa de referencia, guiados por el compromiso con el bienestar de las personas y el medio ambiente.</p>
            </div>
        </div>

        <!-- Valores -->
        <div class="valores-title reveal">Nuestros Valores</div>
        <div class="valores-grid">
            <div class="valor-item reveal" data-delay="0">
                <div class="valor-icon"><svg data-feather="shield" style="color:var(--orange)"></svg></div>
                <span>Integridad</span>
            </div>
            <div class="valor-item reveal" data-delay="80">
                <div class="valor-icon"><svg data-feather="star" style="color:var(--orange)"></svg></div>
                <span>Calidad</span>
            </div>
            <div class="valor-item reveal" data-delay="160">
                <div class="valor-icon"><svg data-feather="zap" style="color:var(--orange)"></svg></div>
                <span>Innovación</span>
            </div>
            <div class="valor-item reveal" data-delay="240">
                <div class="valor-icon"><svg data-feather="heart" style="color:var(--orange)"></svg></div>
                <span>Respeto</span>
            </div>
            <div class="valor-item reveal" data-delay="320">
                <div class="valor-icon"><svg data-feather="check-circle" style="color:var(--orange)"></svg></div>
                <span>Compromiso</span>
            </div>
            <div class="valor-item reveal" data-delay="400">
                <div class="valor-icon"><svg data-feather="globe" style="color:var(--orange)"></svg></div>
                <span>Sostenibilidad</span>
            </div>
        </div>

    </div>
</section>


<!-- Equipo -->
<section class="equipo-section">
    <div class="container">
        <div class="section-label">Nuestro Equipo</div>
        <h2 class="section-title reveal">Las Personas Detrás del <span class="accent">Acero</span></h2>
        <div class="equipo-grid">
            <div class="equipo-card reveal" data-delay="0">
                <div class="equipo-avatar"><svg data-feather="user"></svg></div>
                <div class="equipo-info">
                    <h4>Gerente General</h4>
                    <span>Liderazgo Estratégico</span>
                </div>
            </div>
            <div class="equipo-card reveal" data-delay="80">
                <div class="equipo-avatar"><svg data-feather="user"></svg></div>
                <div class="equipo-info">
                    <h4>Jefe de Producción</h4>
                    <span>Ingeniería & Manufactura</span>
                </div>
            </div>
            <div class="equipo-card reveal" data-delay="160">
                <div class="equipo-avatar"><svg data-feather="user"></svg></div>
                <div class="equipo-info">
                    <h4>Jefe de Calidad</h4>
                    <span>Control & Certificación</span>
                </div>
            </div>
            <div class="equipo-card reveal" data-delay="240">
                <div class="equipo-avatar"><svg data-feather="user"></svg></div>
                <div class="equipo-info">
                    <h4>Gerente Comercial</h4>
                    <span>Ventas & Relaciones</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('scripts')

@endsection