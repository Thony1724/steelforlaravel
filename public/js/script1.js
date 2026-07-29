/* ============================================================
   STEELFOR — js/script.js
   ============================================================ */

/* ── DOM Ready ─────────────────────────────────────────────── */
document.addEventListener('DOMContentLoaded', () => {
  initHeader();
  initHeroSlider();
  initScrollReveal();
  initCounters();
  initHamburger();
  initBackToTop();
  initFormSubmit();
  initFilterBar();
});

/* ═══════════════════════════════════════════════════════════
   HEADER — scroll behavior
═══════════════════════════════════════════════════════════ */
function initHeader() {
    const header = document.getElementById('header');
    if (!header) return;

    function onScroll() {
        if (window.scrollY > 60) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
}

/* ═══════════════════════════════════════════════════════════
   HAMBURGER MENU
═══════════════════════════════════════════════════════════ */
function initHamburger() {
  const btn  = document.querySelector('.hamburger');
  const menu = document.querySelector('.mobile-nav');
  if (!btn || !menu) return;

  btn.addEventListener('click', () => {
    btn.classList.toggle('open');
    menu.classList.toggle('open');
  });

  // Close on link click
  menu.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      btn.classList.remove('open');
      menu.classList.remove('open');
    });
  });
}

/* ═══════════════════════════════════════════════════════════
   HERO SLIDER
═══════════════════════════════════════════════════════════ */
function initHeroSlider() {
  const track  = document.querySelector('.slider-track');
  const slides = document.querySelectorAll('.slide');
  const dots   = document.querySelectorAll('.slider-dot');
  const prev   = document.querySelector('.slider-arrow.prev');
  const next   = document.querySelector('.slider-arrow.next');
  const bar    = document.querySelector('.slider-progress-bar');

  if (!track || slides.length === 0) return;

  let current  = 0;
  let total    = slides.length;
  let autoTimer, progressTimer, progressWidth = 0;
  const DURATION = 6000; // ms per slide

  function goTo(index) {
    slides[current].classList.remove('active');
    current = (index + total) % total;
    track.style.transform = `translateX(-${(100 / total) * current}%)`;
    slides[current].classList.add('active');

    dots.forEach((d, i) => d.classList.toggle('active', i === current));

    // Reset progress bar
    progressWidth = 0;
    if (bar) {
      bar.style.transition = 'none';
      bar.style.width = '0%';
    }
    requestAnimationFrame(() => {
      requestAnimationFrame(() => {
        if (bar) {
          bar.style.transition = `width ${DURATION}ms linear`;
          bar.style.width = '100%';
        }
      });
    });
  }

  function startAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(() => goTo(current + 1), DURATION);
  }

  function resetAuto() {
    clearInterval(autoTimer);
    startAuto();
  }

  // Init
  goTo(0);
  startAuto();

  if (prev) prev.addEventListener('click', () => { goTo(current - 1); resetAuto(); });
  if (next) next.addEventListener('click', () => { goTo(current + 1); resetAuto(); });
  dots.forEach((dot, i) => dot.addEventListener('click', () => { goTo(i); resetAuto(); }));

  // Swipe / touch support
  let touchStartX = 0;
  const heroEl = document.getElementById('hero');
  if (heroEl) {
    heroEl.addEventListener('touchstart', e => { touchStartX = e.changedTouches[0].screenX; }, { passive: true });
    heroEl.addEventListener('touchend', e => {
      const dx = e.changedTouches[0].screenX - touchStartX;
      if (Math.abs(dx) > 50) {
        goTo(current + (dx < 0 ? 1 : -1));
        resetAuto();
      }
    });
  }
}

/* ═══════════════════════════════════════════════════════════
   SCROLL REVEAL
═══════════════════════════════════════════════════════════ */
function initScrollReveal() {
  const els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  if (els.length === 0) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry, i) => {
      if (entry.isIntersecting) {
        // Stagger delay based on data-delay attribute
        const delay = entry.target.dataset.delay || 0;
        setTimeout(() => {
          entry.target.classList.add('visible');
        }, delay);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });

  els.forEach(el => observer.observe(el));
}

/* ═══════════════════════════════════════════════════════════
   ANIMATED COUNTERS
═══════════════════════════════════════════════════════════ */
function initCounters() {
  const counters = document.querySelectorAll('.counter-num');
  if (counters.length === 0) return;

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el    = entry.target;
        const end   = parseInt(el.dataset.target, 10);
        const suf   = el.dataset.suffix || '';
        const dur   = 2000;
        let startTime = null;

        function animate(ts) {
          if (!startTime) startTime = ts;
          const progress = Math.min((ts - startTime) / dur, 1);
          const value    = Math.floor(easeOut(progress) * end);
          // Keep suffix span if exists
          const suffixEl = el.querySelector('.counter-suffix');
          if (suffixEl) {
            el.childNodes[0].textContent = value;
          } else {
            el.textContent = value + suf;
          }
          if (progress < 1) requestAnimationFrame(animate);
          else {
            if (suffixEl) el.childNodes[0].textContent = end;
            else el.textContent = end + suf;
          }
        }
        requestAnimationFrame(animate);
        observer.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(el => observer.observe(el));
}

function easeOut(t) {
  return 1 - Math.pow(1 - t, 3);
}

/* ═══════════════════════════════════════════════════════════
   BACK TO TOP
═══════════════════════════════════════════════════════════ */
function initBackToTop() {
  const btn = document.getElementById('back-top');
  if (!btn) return;

  window.addEventListener('scroll', () => {
    btn.classList.toggle('show', window.scrollY > 400);
  }, { passive: true });

  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
}

/* ═══════════════════════════════════════════════════════════
   FORM SUBMIT (demo)
═══════════════════════════════════════════════════════════ */
function initFormSubmit() {
  document.querySelectorAll('form:not(#applyForm)').forEach(form => {
    form.addEventListener('submit', e => {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      const original = btn ? btn.textContent : '';
      if (btn) {
        btn.textContent = '✓ Enviado con éxito';
        btn.style.background = '#16a34a';
        setTimeout(() => {
          btn.textContent = original;
          btn.style.background = '';
          form.reset();
        }, 3000);
      }
    });
  });
}

/* ═══════════════════════════════════════════════════════════
   FILTER BAR (Projects)
═══════════════════════════════════════════════════════════ */
function initFilterBar() {
  const btns  = document.querySelectorAll('.filter-btn');
  const cards = document.querySelectorAll('.proyecto-card');
  if (btns.length === 0) return;

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      cards.forEach(card => {
        const cat = card.dataset.category;
        if (filter === 'all' || cat === filter) {
          card.style.display = '';
          setTimeout(() => { card.style.opacity = 1; card.style.transform = ''; }, 10);
        } else {
          card.style.opacity = 0;
          card.style.transform = 'scale(0.95)';
          setTimeout(() => { card.style.display = 'none'; }, 300);
        }
      });
    });
  });
}


(function () {
  const WA_NUMBER = '51908915609';
  const DEFAULT_MSG = 'Hola STEELFOR, me gustaría solicitar información.';
 
  const toggle = document.getElementById('waToggle');
  const panel  = document.getElementById('waPanel');
  const close  = document.getElementById('waClose');
  const form   = document.getElementById('waForm');
  const input  = document.getElementById('waMessage');
 
  if (!toggle || !panel || !close || !form || !input) return;
 
  toggle.addEventListener('click', () => {
    panel.classList.toggle('open');
    if (panel.classList.contains('open')) input.focus();
  });
 
  close.addEventListener('click', () => panel.classList.remove('open'));
 
  document.addEventListener('click', (e) => {
    if (!panel.contains(e.target) && !toggle.contains(e.target)) {
      panel.classList.remove('open');
    }
  });
 
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const text = input.value.trim() || DEFAULT_MSG;
    const url = `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(text)}`;
    window.open(url, '_blank', 'noopener');
    panel.classList.remove('open');
    input.value = '';
  });
})();
 

/* ============================================================

   Envía los datos del formulario de cotización a WhatsApp
   ============================================================ */

(function () {
  const WA_NUMBER = '51908915609'; // mismo número que usas en el botón flotante

  const form = document.getElementById('cotizacionForm');
  if (!form) return;

  form.addEventListener('submit', (e) => {
    e.preventDefault();

    // Validación nativa del navegador (campos required)
    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    const data = new FormData(form);
    const nombre       = (data.get('nombre') || '').trim();
    const empresa       = (data.get('empresa') || '').trim();
    const correo         = (data.get('correo') || '').trim();
    const telefono       = (data.get('telefono') || '').trim();
    const tipoProyecto   = (data.get('tipoProyecto') || '').trim();
    const mensaje         = (data.get('mensaje') || '').trim();

    const lineas = [
      'Hola STEELFOR, quiero solicitar una cotización:',
      '',
      `*Nombre:* ${nombre}`,
    ];

    if (empresa) lineas.push(`*Empresa:* ${empresa}`);

    lineas.push(`*Correo:* ${correo}`);

    if (telefono) lineas.push(`*Teléfono:* ${telefono}`);

    lineas.push(
      `*Tipo de proyecto:* ${tipoProyecto}`,
      '',
      `*Detalle:* ${mensaje}`
    );

    const texto = lineas.join('\n');
    const url = `https://wa.me/${WA_NUMBER}?text=${encodeURIComponent(texto)}`;

    window.open(url, '_blank', 'noopener');

    form.reset();
  });
})();


/* ═══════════════════════════════════════════════════════════
   FORM TIME (anti-bot: postulación)
═══════════════════════════════════════════════════════════ */
(function () {
  const timeInput = document.getElementById('form_time');
  const applyForm = document.getElementById('applyForm');
  if (!timeInput || !applyForm) return;

  const loadedAt = Math.floor(Date.now() / 1000);
  timeInput.value = 0;

  applyForm.addEventListener('submit', () => {
    const elapsed = Math.floor(Date.now() / 1000) - loadedAt;
    timeInput.value = elapsed;
  });
})();