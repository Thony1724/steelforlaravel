@extends('web.layouts.principal')
@section('style')
<style>
    @media (max-width: 768px) {

        .slide-vehicle {
            display: none;
        }

        /* Centrar el contenido */
        .slide-content {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            width: 100%;
            padding: 0 20px;
        }

        .slide-text {
            max-width: 100%;
            margin: 0 auto;
        }

        .slide-title,
        .slide-desc,
        .slide-tag {
            text-align: center;
        }

        .slide-btns {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .slider-arrow {
            display: none !important;
        }

    }
</style>
@endsection
@section('content')


<section id="hero">

    <div class="slider-track">

        <!-- ── SLIDE 1 — Innovación Industrial ── -->
        <div class="slide slide-1 active">
            <div class="slide-bg-grid"></div>
            <div class="slide-diagonal"></div>
            <div class="slide-accent-line"></div>

            <!-- Vehicle placeholder (replace with real PNG) -->
            <div class="slide-vehicle">
                <img src="img/camionga.png" alt="" style="margin-top: -900px;margin-left: -150px;">
            </div>

            <div class="slide-badge">01</div>

            <div class="slide-content">
                <div class="slide-text">
                    <div class="slide-tag">Innovación · Fabricación · Seguridad</div>
                    <h1 class="slide-title">
                        Forjamos el<br>
                        <span class="line-accent">Futuro</span> del<br>
                        <span class="line-stroke">Transporte</span>
                    </h1>
                    <p class="slide-desc">
                        Diseñamos y fabricamos carrocerías de alto rendimiento con tecnología de precisión. Cada estructura que
                        construimos es una promesa de seguridad, eficiencia y durabilidad.
                    </p>
                    <div class="slide-btns">
                        <a href="#servicios" class="btn-primary">
                            <svg data-feather="tool" width="16" height="16"></svg>
                            Ver Servicios
                        </a>
                        <a href="#contacto" class="btn-outline">
                            <svg data-feather="send" width="16" height="16"></svg>
                            Cotizar ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── SLIDE 2 — Durabilidad & Eficiencia ── -->
        <div class="slide slide-2">
            <div class="slide-circles"></div>
            <div class="slide-stripe"></div>

            <div class="slide-badge">02</div>

            <div class="slide-content">
                <div class="slide-text">
                    <div class="slide-tag">Durabilidad · Eficiencia · Medida</div>
                    <h1 class="slide-title">
                        Soluciones<br>
                        <span class="line-accent">a la Medida</span><br>
                        de tu Flota
                    </h1>
                    <p class="slide-desc">
                        Desde cisternas de combustible hasta estructuras metálicas especializadas. Cada proyecto es único —
                        engineered to last.
                    </p>
                    <div class="slide-btns">
                        <a href="#proyectos" class="btn-primary">
                            <svg data-feather="layers" width="16" height="16"></svg>
                            Ver Proyectos
                        </a>
                    </div>
                </div>

                <!-- Stat Cards -->
                <div class="slide-stats">
                    <div class="stat-card">
                        <div class="stat-num">500<sup>+</sup></div>
                        <div class="stat-label">Unidades Fabricadas</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-num">12<sup>+</sup></div>
                        <div class="stat-label">Años de Experiencia</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-num">98<sup>%</sup></div>
                        <div class="stat-label">Clientes Satisfechos</div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-num">24<sup>/7</sup></div>
                        <div class="stat-label">Soporte Técnico</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ── SLIDE 3 — Confianza & Legado ── -->
        <div class="slide slide-3">
            <div class="slide-texture"></div>
            <div class="slide-glow"></div>
            <div class="slide-orange-bar"></div>

            <div class="slide-badge">03</div>

            <div class="slide-content">
                <div class="slide-text">
                    <div class="slide-tag">Confianza · Compromiso · Legado</div>
                    <h1 class="slide-title">
                        Construimos<br>
                        con <span class="line-accent">Integridad,</span><br>
                        Entregamos<br>Excelencia
                    </h1>
                    <blockquote class="slide-quote">
                        "Guiados por principios de integridad y excelencia técnica, somos el socio estratégico que tu operación
                        merece."
                    </blockquote>
                    <div class="slide-btns" style="justify-content:center;">
                        <a href="#quienes-somos" class="btn-primary">
                            <svg data-feather="users" width="16" height="16"></svg>
                            Conócenos
                        </a>
                        <a href="#contacto" class="btn-outline">Conversemos</a>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /slider-track -->

    <!-- Slider Controls -->
    <button class="slider-arrow prev" aria-label="Anterior">
        <svg data-feather="chevron-left" width="22" height="22"></svg>
    </button>
    <button class="slider-arrow next" aria-label="Siguiente">
        <svg data-feather="chevron-right" width="22" height="22"></svg>
    </button>

    <!-- Dots -->
    <div class="slider-nav">
        <button class="slider-dot active" aria-label="Slide 1"></button>
        <button class="slider-dot" aria-label="Slide 2"></button>
        <button class="slider-dot" aria-label="Slide 3"></button>
    </div>

    <!-- Progress bar -->
    <div class="slider-progress">
        <div class="slider-progress-bar"></div>
    </div>

</section>


<!-- ═══════════════════════════════════════════════════════
  QUIÉNES SOMOS
════════════════════════════════════════════════════════ -->
<section id="quienes-somos">
    <div class="container quienes-grid">

        <!-- Image -->
        <div class="quienes-image reveal-left">
            <div class="quienes-img-wrap">
                <img src="{{ asset('img/instalaciones.png') }}" alt="Instalaciones STEELFOR" class="quienes-img">
            </div>

            <div class="quienes-badge">
                <div class="badge-num">12+</div>
                <div class="badge-label">Años de Excelencia</div>
            </div>
        </div>

        <!-- Text -->
        <div class="quienes-text reveal-right">
            <div class="section-label">Quiénes Somos</div>
            <h2 class="section-title">
                Metal, Precisión<br>y <span class="accent">Propósito</span>
            </h2>
            <p class="quienes-body">
                STEELFOR nació con una misión clara: elevar los estándares de la industria de carrocerías en el transporte por
                carretera. Somos fabricantes especializados en el diseño, construcción y mantenimiento de carrocerías para
                camiones, cisternas y soluciones metálicas aplicadas al transporte pesado.
            </p>
            <p class="quienes-body" style="margin-top:-12px;">
                Cada estructura que fabricamos es producto de ingeniería rigurosa, materiales de primera calidad y un equipo
                técnico comprometido con la excelencia. No solo fabricamos metal — construimos confianza.
            </p>

            <div class="quienes-features">
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="shield" style="color:var(--orange)"></svg></div>
                    Seguridad certificada
                </div>
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="settings" style="color:var(--orange)"></svg></div>
                    Ingeniería de precisión
                </div>
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="award" style="color:var(--orange)"></svg></div>
                    Calidad garantizada
                </div>
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="clock" style="color:var(--orange)"></svg></div>
                    Soporte post-venta
                </div>
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="map-pin" style="color:var(--orange)"></svg></div>
                    Presencia nacional
                </div>
                <div class="feature-item">
                    <div class="fi-icon"><svg data-feather="users" style="color:var(--orange)"></svg></div>
                    Equipo especializado
                </div>
            </div>

            <a href="#contacto" class="btn-primary">
                <svg data-feather="arrow-right" width="16" height="16"></svg>
                Trabaja con nosotros
            </a>
        </div>

    </div>
</section>

<section id="servicios">
    <div class="container">

        <div class="servicios-header">
            <div>
                <div class="section-label">Lo que Hacemos</div>
                <h2 class="section-title" style="color:var(--white)">
                    Nuestros <span class="accent">Servicios</span>
                </h2>
            </div>
            <a href="#contacto" class="btn-primary reveal-right">
                <svg data-feather="send" width="16" height="16"></svg>
                Solicitar Cotización
            </a>
        </div>

        <div class="servicios-grid">

            <div class="service-card reveal" data-delay="0">
                <div class="service-num">01</div>
                <div class="service-icon">
                    <svg data-feather="tool"></svg>
                </div>
                <h3>Diseño y Fabricación de Carrocerías</h3>
                <p>Construimos carrocerías personalizadas para camiones de carga, plataformas, volquetes y soluciones
                    especiales. Ingeniería aplicada con acero de alta resistencia y soldadura certificada.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

            <div class="service-card reveal" data-delay="100">
                <div class="service-num">02</div>
                <div class="service-icon">
                    <svg data-feather="droplet"></svg>
                </div>
                <h3>Cisternas y Soluciones Especiales</h3>
                <p>Diseño y fabricación de cisternas para combustibles, agua potable, agua no potable, productos químicos y
                    más. Cumplimiento riguroso de normativas de seguridad y transporte.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

            <div class="service-card reveal" data-delay="200">
                <div class="service-num">03</div>
                <div class="service-icon">
                    <svg data-feather="tool"></svg>
                </div>
                <h3>Mantenimiento y Reparación</h3>
                <p>Servicio técnico especializado para el mantenimiento correctivo y preventivo de carrocerías y cisternas.
                    Respondemos con rapidez para minimizar el tiempo fuera de operación de tu flota.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

            <div class="service-card reveal" data-delay="0">
                <div class="service-num">04</div>
                <div class="service-icon">
                    <svg data-feather="grid"></svg>
                </div>
                <h3>Estructuras Metálicas para Transporte</h3>
                <p>Fabricación de estructuras metálicas aplicadas al sector transporte: refuerzos, sub-marcos, plataformas,
                    guardafangos y componentes de alta resistencia estructural.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

            <div class="service-card reveal" data-delay="100">
                <div class="service-num">05</div>
                <div class="service-icon">
                    <svg data-feather="layers"></svg>
                </div>
                <h3>Proyectos a Medida</h3>
                <p>Desarrollamos soluciones de ingeniería personalizadas para necesidades específicas. Desde el diseño CAD
                    hasta la entrega final, acompañamos cada etapa del proyecto con profesionalismo.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

            <div class="service-card reveal" data-delay="200">
                <div class="service-num">06</div>
                <div class="service-icon">
                    <svg data-feather="check-square"></svg>
                </div>
                <h3>Certificación y Control de Calidad</h3>
                <p>Cada unidad que sale de nuestras instalaciones pasa por un riguroso proceso de control de calidad.
                    Documentamos y verificamos cada detalle para garantizar el cumplimiento de estándares técnicos.</p>
                <a href="#contacto" class="service-link">
                    Solicitar <svg data-feather="arrow-right"></svg>
                </a>
            </div>

        </div>
    </div>
</section>

<section id="por-que">
    <div class="container porque-grid">

        <!-- Text side -->
        <div class="porque-text reveal-left">
            <div class="section-label">Nuestra Diferencia</div>
            <h2 class="section-title">¿Por Qué <span class="accent">STEELFOR?</span></h2>
            <p class="porque-desc">
                No somos solo fabricantes — somos socios estratégicos de tu operación. Nuestra ventaja competitiva está en la
                combinación de tecnología, experiencia y un compromiso real con cada cliente.
            </p>

            <div class="porque-list">
                <div class="porque-item">
                    <div class="pi-icon"><svg data-feather="shield" style="color:var(--orange)"></svg></div>
                    <div>
                        <h4>Seguridad en cada estructura</h4>
                        <p>Nuestras carrocerías y cisternas cumplen estrictos protocolos de seguridad. Cada soldadura es
                            inspeccionada y certificada.</p>
                    </div>
                </div>
                <div class="porque-item">
                    <div class="pi-icon"><svg data-feather="zap" style="color:var(--orange)"></svg></div>
                    <div>
                        <h4>Innovación aplicada</h4>
                        <p>Incorporamos nuevas tecnologías de fabricación metálica para optimizar el rendimiento, el peso y la
                            durabilidad de cada unidad.</p>
                    </div>
                </div>
                <div class="porque-item">
                    <div class="pi-icon"><svg data-feather="users" style="color:var(--orange)"></svg></div>
                    <div>
                        <h4>Personal altamente capacitado</h4>
                        <p>Nuestros técnicos y ingenieros cuentan con años de experiencia en el sector metalmecánico y de
                            transporte pesado.</p>
                    </div>
                </div>
                <div class="porque-item">
                    <div class="pi-icon"><svg data-feather="clock" style="color:var(--orange)"></svg></div>
                    <div>
                        <h4>Plazos de entrega cumplidos</h4>
                        <p>Nos comprometemos con los tiempos acordados. Tu operación no puede esperar — y nosotros lo sabemos.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Counters side -->
        <div class="porque-counters reveal-right">
            <div class="counter-card">
                <div class="counter-num" data-target="500" data-suffix="+">
                    0<span class="counter-suffix">+</span>
                </div>
                <div class="counter-label">Unidades Fabricadas</div>
            </div>
            <div class="counter-card">
                <div class="counter-num" data-target="12" data-suffix="+">
                    0<span class="counter-suffix">+</span>
                </div>
                <div class="counter-label">Años de Experiencia</div>
            </div>
            <div class="counter-card">
                <div class="counter-num" data-target="98" data-suffix="%">
                    0<span class="counter-suffix">%</span>
                </div>
                <div class="counter-label">Satisfacción de Clientes</div>
            </div>
            <div class="counter-card">
                <div class="counter-num" data-target="50" data-suffix="+">
                    0<span class="counter-suffix">+</span>
                </div>
                <div class="counter-label">Empresas Atendidas</div>
            </div>
        </div>

    </div>
</section>

<section id="proyectos">
    <div class="container">

        <div class="proyectos-header reveal">
            <div class="section-label" style="justify-content:center;"><span style="display:none"></span>Portafolio
                Industrial</div>
            <h2 class="section-title" style="color:var(--white)">
                Trabajos <span class="accent">Realizados</span>
            </h2>
        </div>
        <p class="proyectos-desc reveal">
            Cada proyecto es muestra de nuestro compromiso con la calidad y la ingeniería de precisión.
        </p>

        <!-- Filter -->
        <div class="filter-bar reveal">
            <button class="filter-btn active" data-filter="all">Todos</button>
            <button class="filter-btn" data-filter="cisterna">Cisternas</button>
            <button class="filter-btn" data-filter="carroceria">Carrocerías</button>
            <button class="filter-btn" data-filter="estructura">Estructuras</button>
            <button class="filter-btn" data-filter="especial">Especiales</button>
        </div>

        <div class="proyectos-grid">

            <div class="proyecto-card reveal" data-category="cisterna" data-delay="0">
                <img src="{{ asset('img/cigas.avif') }}" alt="Cisterna de Combustible" class="proyecto-img">

                <div class="proyecto-overlay">
                    <div class="cat-tag">Cisternas</div>
                    <h4>Cisterna de Combustible 9,000 gl</h4>
                </div>
            </div>
            <div class="proyecto-card reveal" data-category="carroceria" data-delay="80">
                <img src="{{ asset('img/volque.jpg') }}" alt="Cisterna de Combustible" class="proyecto-img">
                <div class="proyecto-overlay">
                    <div class="cat-tag">Carrocerías</div>
                    <h4>Volquete de Alta Resistencia 14m³</h4>
                </div>
            </div>

            <div class="proyecto-card reveal" data-category="cisterna" data-delay="160">
                <img src="{{ asset('img/aguano.png') }}" alt="Cisterna de Agua" class="proyecto-img">
                <div class="proyecto-overlay">
                    <div class="cat-tag">Cisternas</div>
                    <h4>Cisterna de Agua No Potable 5,000 gl</h4>
                </div>
            </div>

            <div class="proyecto-card reveal" data-category="especial" data-delay="0">
                <img src="{{ asset('img/cicon.png') }}" alt="Proyecto Especial" class="proyecto-img">
                <div class="proyecto-overlay">
                    <div class="cat-tag">Especiales</div>
                    <h4>Unidad de Respuesta a Emergencias</h4>
                </div>
            </div>

            <div class="proyecto-card reveal" data-category="estructura" data-delay="80">
                <img src="{{ asset('img/cicon.png') }}" alt="Proyecto Especial" class="proyecto-img"
                    style="width: 550px !important;height: auto;">
                <div class="proyecto-overlay">
                    <div class="cat-tag">Estructuras</div>
                    <h4>Sub-marco reforzado para tracto-camión</h4>
                </div>
            </div>

            <div class="proyecto-card reveal" data-category="carroceria" data-delay="160">
                <img src="{{ asset('img/cicon.png') }}" alt="Proyecto Especial" class="proyecto-img">
                <div class="proyecto-overlay">
                    <div class="cat-tag">Carrocerías</div>
                    <h4>Plataforma de Carga Extendida</h4>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
@section('scripts')

@endsection