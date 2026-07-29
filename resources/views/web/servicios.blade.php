@extends('web.layouts.principal')
@section('style')

@endsection
@section('content')

<section class="page-hero">
    <div class="container page-hero-content">
        <div class="page-breadcrumb">
            <a href="index.html">Inicio</a> / Servicios
        </div>
        <h1>Nuestros<br><span>Servicios</span></h1>
        <p>Soluciones de ingeniería metálica para el transporte pesado: desde el diseño hasta la entrega, con la calidad y seguridad que tu operación exige.</p>
    </div>
</section>

<!-- ── Service Blocks ─────────────────────────────────── -->
<section class="servicios-detail">
    <div class="container">

        <!-- Servicio 1 -->
        <div class="svc-block reveal">
            <div class="svc-visual">
                <div class="svc-visual-inner">
                    <svg data-feather="tool"></svg>
                    <span>[ Imagen de Carrocería ]</span>
                </div>
                <div class="svc-visual-badge">Servicio 01</div>
                <div class="svc-visual-num">01</div>
            </div>
            <div class="svc-text">
                <div class="section-label">Fabricación</div>
                <h2>Diseño y Fabricación<br>de <span>Carrocerías</span></h2>
                <p>Construimos carrocerías a medida para todo tipo de vehículos de transporte pesado: camiones, tracto-camiones, volquetes y más. Utilizamos acero estructural de alta resistencia y procesos de soldadura certificados que garantizan la integridad de cada estructura.</p>
                <p>Cada proyecto parte de un diseño técnico personalizado, ajustado a las especificaciones del chasis, la carga y los requerimientos operativos del cliente.</p>
                <div class="svc-features">
                    <div class="svc-feat">
                        <div class="dot"></div>Diseño CAD personalizado
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Acero estructural A-36 y A-572
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Soldadura MIG/TIG certificada
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Acabado con pintura epóxica industrial
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Control de calidad en cada etapa
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Solicitar Cotización
                </a>
            </div>
        </div>

        <!-- Servicio 2 -->
        <div class="svc-block reverse reveal">
            <div class="svc-visual">
                <div class="svc-visual-inner">
                    <svg data-feather="droplet"></svg>
                    <span>[ Imagen de Cisterna ]</span>
                </div>
                <div class="svc-visual-badge">Servicio 02</div>
                <div class="svc-visual-num">02</div>
            </div>
            <div class="svc-text">
                <div class="section-label">Cisternas</div>
                <h2>Cisternas y<br><span>Soluciones Especiales</span></h2>
                <p>Diseñamos y fabricamos cisternas para el transporte de combustibles, agua potable, agua no potable, productos químicos y otras sustancias líquidas. Cada cisterna es construida respetando estrictamente las normativas de seguridad, señalización y transporte vigentes.</p>
                <p>Ofrecemos diferentes capacidades y configuraciones de válvulas, bocas de inspección y sistemas de llenado/descarga según la aplicación requerida.</p>
                <div class="svc-features">
                    <div class="svc-feat">
                        <div class="dot"></div>Cisternas de combustible desde 2,000 a 10,000+ gal.
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Cisternas de agua potable y no potable
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Cisternas para productos químicos
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Sistemas de válvulas y accesorios certificados
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Señalización de seguridad reglamentaria
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Solicitar Cotización
                </a>
            </div>
        </div>

        <!-- Servicio 3 -->
        <div class="svc-block reveal">
            <div class="svc-visual">
                <div class="svc-visual-inner">
                    <svg data-feather="wrench"></svg>
                    <span>[ Imagen de Mantenimiento ]</span>
                </div>
                <div class="svc-visual-badge">Servicio 03</div>
                <div class="svc-visual-num">03</div>
            </div>
            <div class="svc-text">
                <div class="section-label">Mantenimiento</div>
                <h2>Mantenimiento y<br><span>Reparación</span></h2>
                <p>El tiempo fuera de operación cuesta dinero. Por eso ofrecemos un servicio de mantenimiento preventivo y correctivo ágil y especializado, orientado a devolver tus unidades a la carretera en el menor tiempo posible.</p>
                <p>Nuestro equipo técnico está capacitado para reparar y refaccionar carrocerías, cisternas y estructuras de todo tipo, incluyendo trabajos de soldadura, arenado, pintura y reemplazo de componentes.</p>
                <div class="svc-features">
                    <div class="svc-feat">
                        <div class="dot"></div>Mantenimiento preventivo programado
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Reparación de daños estructurales
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Arenado y pintura industrial
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Reparación de cisternas y válvulas
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Atención de urgencia disponible
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Solicitar Atención
                </a>
            </div>
        </div>

        <!-- Servicio 4 -->
        <div class="svc-block reverse reveal">
            <div class="svc-visual">
                <div class="svc-visual-inner">
                    <svg data-feather="grid"></svg>
                    <span>[ Imagen de Estructuras ]</span>
                </div>
                <div class="svc-visual-badge">Servicio 04</div>
                <div class="svc-visual-num">04</div>
            </div>
            <div class="svc-text">
                <div class="section-label">Estructuras Metálicas</div>
                <h2>Estructuras Metálicas<br>para <span>Transporte</span></h2>
                <p>Fabricamos componentes y subestructuras metálicas para el sector transporte: sub-marcos, plataformas de carga, guardafangos, protecciones laterales, estribos y refuerzos estructurales para chasis de camión.</p>
                <p>Cada pieza es fabricada con tolerancias de precisión, asegurando un ensamblaje correcto y una vida útil prolongada en condiciones de trabajo exigentes.</p>
                <div class="svc-features">
                    <div class="svc-feat">
                        <div class="dot"></div>Sub-marcos y bastidores auxiliares
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Plataformas y camas planas
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Guardafangos y protecciones
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Estribos y peldaños industriales
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Refuerzos y adaptaciones de chasis
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Solicitar Cotización
                </a>
            </div>
        </div>

        <!-- Servicio 5 -->
        <div class="svc-block reveal">
            <div class="svc-visual">
                <div class="svc-visual-inner">
                    <svg data-feather="layers"></svg>
                    <span>[ Imagen de Proyecto Especial ]</span>
                </div>
                <div class="svc-visual-badge">Servicio 05</div>
                <div class="svc-visual-num">05</div>
            </div>
            <div class="svc-text">
                <div class="section-label">Proyectos Especiales</div>
                <h2>Proyectos<br><span>a la Medida</span></h2>
                <p>Cuando los estándares no son suficientes, STEELFOR desarrolla soluciones de ingeniería completamente personalizadas. Acompañamos al cliente desde la conceptualización hasta la entrega final, integrando diseño, fabricación y pruebas de calidad en un solo proceso.</p>
                <p>Hemos ejecutado proyectos especiales para sectores como minería, construcción, agroindustria y logística, con requerimientos técnicos únicos y desafiantes.</p>
                <div class="svc-features">
                    <div class="svc-feat">
                        <div class="dot"></div>Ingeniería conceptual y diseño CAD 3D
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Prototipos y validación técnica
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Fabricación bajo planos del cliente
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Gestión integral del proyecto
                    </div>
                    <div class="svc-feat">
                        <div class="dot"></div>Entrega con documentación técnica completa
                    </div>
                </div>
                <a href="contactenos.html" class="btn-primary">
                    <svg data-feather="send" width="16" height="16"></svg>
                    Conversemos sobre tu Proyecto
                </a>
            </div>
        </div>

    </div>
</section>

<!-- ── CTA Band ──────────────────────────────────────── -->
<section class="cta-band reveal">
    <div class="container">
        <h2>¿Listo para empezar<br>tu <span>próximo proyecto</span>?</h2>
        <p>Cuéntanos qué necesitas. Nuestro equipo técnico y comercial responderá con una propuesta en menos de 24 horas hábiles.</p>
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