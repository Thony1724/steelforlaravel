<header id="header">
  <div class="container header-inner">

    <!-- Logo -->
    <a href="{{asset('/')}}" class="logo">
      <div class="logo-icon">
        <img src="{{asset('img/logoes.png')}}" alt="Logo" class="logo-img">
      </div>
      <span><span class="brand-steel">STEEL</span><span class="brand-for">FOR</span></span>
    </a>

    <!-- Desktop Nav -->
    <nav>
      <a href="{{ url('nosotros') }}"
        class="nav-link {{ request()->is('nosotros') ? 'active' : '' }}">
        Nosotros
      </a>

      <a href="{{ url('servicios') }}"
        class="nav-link {{ request()->is('servicios') ? 'active' : '' }}">
        Servicios
      </a>

      <a href="{{ url('proyectos') }}"
        class="nav-link {{ request()->is('proyectos') ? 'active' : '' }}">
        Proyectos
      </a>

      <a href="{{ url('comunicados') }}"
        class="nav-link {{ request()->is('comunicados') ? 'active' : '' }}">
        Comunicados
      </a>

      <a href="{{ url('bolsa_trabajo') }}"
        class="nav-link {{ request()->is('bolsa_trabajo') ? 'active' : '' }}">
        Bolsa de Trabajo
      </a>
    </nav>

    <!-- CTA -->
    <div class="header-cta">
      <a href="{{asset('contactenos')}}" class="btn-primary">
        <svg data-feather="send" width="16" height="16"></svg>
        Contactenos
      </a>
    </div>

    <!-- Hamburger -->
    <button class="hamburger" aria-label="Menú">
      <span></span><span></span><span></span>
    </button>
  </div>

  <!-- Mobile Nav -->
  <div class="mobile-nav">
    <a href="{{asset('nosotros')}}">Nosotros</a>
    <a href="{{asset('servicios')}}">Servicios</a>
    <a href="{{asset('proyectos')}}">Proyectos</a>
    <a href="{{asset('comunicados')}}">Comunicados</a>
    <a href="{{asset('bolsa_trabajo')}}">Bolsa de Trabajo</a>
    <a href="{{asset('contactenos')}}" class="btn-primary"
      style="margin:16px 24px;text-align:center;justify-content:center;">Contactenos</a>
  </div>
</header>