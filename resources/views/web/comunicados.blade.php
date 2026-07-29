@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')

<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb"><a href="index.html">Inicio</a> / Comunicados</div>
        <h1>Comuni<span>cados</span></h1>
    </div>
</section>

<section class="comunicados-page">
    <div class="container">

        <!-- Featured -->
        <div class="com-featured">
            <div class="com-featured-main reveal-left">
                <div class="com-featured-img">
                    <svg data-feather="zap"></svg>
                </div>
                <div class="com-featured-body">
                    <div class="featured-label">
                        <span>★ Destacado</span> · Abril 2025 · Innovación
                    </div>
                    <h2>Nueva línea de cisternas con sistema de monitoreo IoT integrado</h2>
                    <p>STEELFOR presenta su nueva generación de cisternas equipadas con sensores inteligentes que permiten el
                        monitoreo en tiempo real del volumen, temperatura y presión de carga desde cualquier dispositivo. Una
                        revolución en la gestión del transporte de fluidos.</p>
                    <a href="#">Leer artículo completo <svg data-feather="arrow-right" width="14" height="14"></svg></a>
                </div>
            </div>
            <div class="com-side reveal-right">
                <div class="com-side-card">
                    <div class="side-icon"><svg data-feather="award"></svg></div>
                    <div class="side-body">
                        <div class="side-date">Marzo 2025 · Certificación</div>
                        <h4>STEELFOR obtiene certificación internacional en fabricación de cisternas</h4>
                    </div>
                </div>
                <div class="com-side-card">
                    <div class="side-icon"><svg data-feather="users"></svg></div>
                    <div class="side-body">
                        <div class="side-date">Febrero 2025 · Empresa</div>
                        <h4>Ampliación de planta duplica capacidad operativa de STEELFOR</h4>
                    </div>
                </div>
                <div class="com-side-card">
                    <div class="side-icon"><svg data-feather="star"></svg></div>
                    <div class="side-body">
                        <div class="side-date">Enero 2025 · Logros</div>
                        <h4>500 unidades fabricadas: un hito en nuestra historia</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- All posts -->
        <div class="section-label reveal" style="margin-bottom:32px;">Todos los Comunicados</div>
        <div class="com-grid-all">

            <div class="comunicado-card reveal" data-delay="0">
                <div class="comunicado-img"><svg data-feather="file-text" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Abril 2025</span><span
                            class="comunicado-tag">Innovación</span></div>
                    <h3>Sistema IoT para monitoreo de cisternas en tiempo real</h3>
                    <p>Conoce en detalle cómo funciona nuestra nueva tecnología de monitoreo embebido en cisternas de última
                        generación.</p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

            <div class="comunicado-card reveal" data-delay="80">
                <div class="comunicado-img"><svg data-feather="award" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Marzo 2025</span><span
                            class="comunicado-tag">Certificación</span></div>
                    <h3>Certificación de calidad en fabricación de cisternas</h3>
                    <p>Nuestro proceso productivo fue auditado y aprobado bajo estrictos estándares técnicos internacionales.
                    </p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

            <div class="comunicado-card reveal" data-delay="160">
                <div class="comunicado-img"><svg data-feather="home" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Febrero 2025</span><span
                            class="comunicado-tag">Empresa</span></div>
                    <h3>Inauguración de nueva nave de producción STEELFOR</h3>
                    <p>Ampliamos nuestras instalaciones con una moderna nave equipada con maquinaria de vanguardia.</p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

            <div class="comunicado-card reveal" data-delay="0">
                <div class="comunicado-img"><svg data-feather="star" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Enero 2025</span><span
                            class="comunicado-tag">Hito</span></div>
                    <h3>500 unidades fabricadas: un hito de excelencia</h3>
                    <p>Celebramos la entrega de nuestra unidad número 500, un testimonio de la confianza de nuestros clientes.
                    </p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

            <div class="comunicado-card reveal" data-delay="80">
                <div class="comunicado-img"><svg data-feather="truck" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Dic. 2024</span><span
                            class="comunicado-tag">Proyecto</span></div>
                    <h3>Entrega de flota de cisternas para empresa minera del sur</h3>
                    <p>Concluimos exitosamente el proyecto de 12 cisternas para transporte de agua industrial en operaciones
                        mineras.</p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

            <div class="comunicado-card reveal" data-delay="160">
                <div class="comunicado-img"><svg data-feather="briefcase" style="color:rgba(255,255,255,.2)"></svg></div>
                <div class="comunicado-body">
                    <div class="comunicado-meta"><span class="comunicado-date">Nov. 2024</span><span
                            class="comunicado-tag">Alianza</span></div>
                    <h3>STEELFOR firma alianza estratégica con proveedor de acero certificado</h3>
                    <p>Aseguramos el suministro de materiales de la más alta calidad para mantener nuestra promesa de
                        excelencia.</p>
                    <a href="#">Leer más <svg data-feather="arrow-right" width="13" height="13"></svg></a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
@section('scripts')

@endsection