@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')

<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb">
            <a href="index.html">Inicio</a> / Proyectos
        </div>
        <h1>Proyectos<br><span>Realizados</span></h1>
        <p>Cada unidad que fabricamos es evidencia de nuestro compromiso con la ingeniería de precisión, la seguridad y la
            excelencia operativa.</p>
    </div>
</section>

<!-- ── Stats Strip ─────────────────────────────────────── -->
<div class="stats-strip">
    <div class="container stats-strip-inner">
        <div class="ss-item">
            <h3>500+</h3>
            <p>Unidades fabricadas</p>
        </div>
        <div class="ss-item">
            <h3>12+</h3>
            <p>Años de experiencia</p>
        </div>
        <div class="ss-item">
            <h3>50+</h3>
            <p>Empresas atendidas</p>
        </div>
        <div class="ss-item">
            <h3>98%</h3>
            <p>Satisfacción del cliente</p>
        </div>
    </div>
</div>

<!-- ── Projects ──────────────────────────────────────── -->
<section class="proyectos-full">
    <div class="container">

        <!-- Featured -->
        <div class="featured-project reveal">
            <div class="fp-visual">
                <div class="fp-tag">★ Proyecto Destacado</div>
                <svg data-feather="droplet"></svg>
                <span>[ Imagen del Proyecto ]</span>
            </div>
            <div class="fp-info">
                <div class="fp-cat">Cisternas · 2024</div>
                <h2>Flota de 12 Cisternas para Empresa Minera</h2>
                <p>Diseño, fabricación y entrega de una flota completa de 12 cisternas para transporte de agua industrial en
                    operaciones mineras del sur del Perú. Cada unidad fue fabricada bajo especificaciones técnicas rigurosas y
                    cumplimiento de normativas de seguridad minera.</p>
                <div class="fp-specs">
                    <div class="fp-spec">
                        <div class="spec-label">Capacidad</div>
                        <div class="spec-val">5,000 gal. c/u</div>
                    </div>
                    <div class="fp-spec">
                        <div class="spec-label">Unidades</div>
                        <div class="spec-val">12 cisternas</div>
                    </div>
                    <div class="fp-spec">
                        <div class="spec-label">Sector</div>
                        <div class="spec-val">Minería</div>
                    </div>
                    <div class="fp-spec">
                        <div class="spec-label">Plazo entrega</div>
                        <div class="spec-val">4 meses</div>
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Solicitar proyecto similar
                </a>
            </div>
        </div>

        <!-- Grid -->
        <div class="proj-header">
            <div>
                <div class="section-label">Portafolio Completo</div>
                <h2 class="section-title" style="color:var(--white);">Todos los <span class="accent">Proyectos</span></h2>
            </div>
            <div class="filter-bar" style="margin-bottom:0;">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="cisterna">Cisternas</button>
                <button class="filter-btn" data-filter="carroceria">Carrocerías</button>
                <button class="filter-btn" data-filter="estructura">Estructuras</button>
                <button class="filter-btn" data-filter="especial">Especiales</button>
            </div>
        </div>

        <div class="projects-masonry">

            <div class="pm-card tall reveal" data-category="cisterna" data-delay="0">
                <div class="pm-inner"><svg data-feather="droplet"></svg><span>Cisterna Combustible</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Cisternas</div>
                    <h4>Cisterna de Combustible 9,000 gal.</h4>
                    <span>Empresa de transporte · Trujillo, 2024</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="carroceria" data-delay="60">
                <div class="pm-inner"><svg data-feather="truck"></svg><span>Volquete</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Carrocerías</div>
                    <h4>Volquete 14m³ Alta Resistencia</h4>
                    <span>Constructora · Ancash, 2024</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="carroceria" data-delay="120">
                <div class="pm-inner"><svg data-feather="box"></svg><span>Plataforma de Carga</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Carrocerías</div>
                    <h4>Plataforma Extendida de Carga</h4>
                    <span>Empresa logística · Lima, 2024</span>
                </div>
            </div>

            <div class="pm-card wide reveal" data-category="cisterna" data-delay="0">
                <div class="pm-inner"><svg data-feather="droplet"></svg><span>Cisterna Agua No Potable</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Cisternas</div>
                    <h4>Cisterna de Agua No Potable 5,000 gal. — Flota de 4 unidades</h4>
                    <span>Municipalidad · La Libertad, 2023</span>
                </div>
            </div>

            <div class="pm-card tall reveal" data-category="especial" data-delay="60">
                <div class="pm-inner"><svg data-feather="package"></svg><span>Unidad de Emergencia</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Especiales</div>
                    <h4>Unidad de Respuesta a Emergencias</h4>
                    <span>Empresa minera · Cajamarca, 2023</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="estructura" data-delay="0">
                <div class="pm-inner"><svg data-feather="grid"></svg><span>Sub-marco</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Estructuras</div>
                    <h4>Sub-marco Reforzado para Tracto</h4>
                    <span>Flota privada · Trujillo, 2023</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="cisterna" data-delay="60">
                <div class="pm-inner"><svg data-feather="droplet"></svg><span>Cisterna Química</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Cisternas</div>
                    <h4>Cisterna para Ácido Sulfúrico 3,000 gal.</h4>
                    <span>Empresa química · Lima, 2023</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="carroceria" data-delay="120">
                <div class="pm-inner"><svg data-feather="truck"></svg><span>Carrocería Frigorífica</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Carrocerías</div>
                    <h4>Carrocería Isotérmica para Transporte Frío</h4>
                    <span>Empresa agroindustrial · La Libertad, 2022</span>
                </div>
            </div>

            <div class="pm-card reveal" data-category="estructura" data-delay="0">
                <div class="pm-inner"><svg data-feather="layers"></svg><span>Estructura Escalera</span></div>
                <div class="pm-overlay">
                    <div class="pm-cat">Estructuras</div>
                    <h4>Escaleras y Plataformas de Acceso Industrial</h4>
                    <span>Planta industrial · Trujillo, 2022</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ── CTA Band ──────────────────────────────────────── -->
<section class="cta-band reveal">
    <div class="container">
        <h2>¿Tu proyecto es el <span>siguiente</span>?</h2>
        <p>Cuéntanos qué necesitas y nuestro equipo diseñará la solución más adecuada para tu operación.</p>
        <div class="cta-band-btns">
            <a href="contactenos.html" class="btn-primary">
                <svg data-feather="send" width="16" height="16"></svg>
                Solicitar Cotización
            </a>
            <a href="https://wa.me/51908915609" class="btn-outline" target="_blank" rel="noopener">
                <svg data-feather="message-circle" width="16" height="16"></svg>
                WhatsApp Directo
            </a>
        </div>
    </div>
</section>


@endsection
@section('scripts')

@endsection