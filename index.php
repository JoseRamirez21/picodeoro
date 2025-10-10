<?php include 'header.php'; ?>
<!-- HERO / CARRUSEL -->
<div id="carouselExample" class="carousel slide mb-5" data-bs-ride="carousel" style="max-height: 700px; overflow: hidden;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner1.jpg" class="d-block w-100 hero-img" alt="Productos balanceados"
           style="object-fit: cover; height: 700px;">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-6">Productos de Calidad para tus Aves</h2>
        <p class="fs-5">Balanceados, medicamentos y suplementos de confianza.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/img/banner2.jpg" class="d-block w-100 hero-img" alt="Gallos sanos"
           style="object-fit: cover; height: 700px;">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-6">Salud y Rendimiento Garantizado</h2>
        <p class="fs-5">Cuida tus aves con productos de primera calidad.</p>
      </div>
    </div>

    <div class="carousel-item">
      <img src="assets/img/banner3.jpg" class="d-block w-100 hero-img" alt="Gallinas felices"
           style="object-fit: cover; height: 700px;">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-6">Confianza y Compromiso</h2>
        <p class="fs-5">Tu aliado en el cuidado de tus aves.</p>
      </div>
    </div>
  </div>

  <!-- CONTROLES -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>


<!-- BIENVENIDA -->
<!-- SECCIÓN BIENVENIDA -->
<section class="container text-center py-5 fade-in">
  <h2 class="fw-bold text-primary mb-3">
    Bienvenido a <span class="text-warning">Pico de Oro</span>
  </h2>
  <p class="lead text-secondary mb-5">
    Ofrecemos productos de alta calidad para el bienestar, crecimiento y desarrollo de tus gallos y gallinas.
  </p>

  <div class="row g-4">
    <div class="col-md-4 fade-in">
      <div class="card border-0 shadow-lg hover-lift rounded-4 overflow-hidden">
        <img src="assets/img/balanceado1.jpg" class="card-img-top" alt="Balanceados Pico de Oro">
        <div class="card-body">
          <h5 class="fw-bold text-primary mt-3">Balanceados</h5>
          <p class="text-muted">Alimentos nutritivos para el mejor rendimiento y energía.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 fade-in">
      <div class="card border-0 shadow-lg hover-lift rounded-4 overflow-hidden">
        <img src="assets/img/medicamentos.jpg" class="card-img-top" alt="Medicamentos Pico de Oro">
        <div class="card-body">
          <h5 class="fw-bold text-primary mt-3">Medicamentos</h5>
          <p class="text-muted">Tratamientos y productos veterinarios de confianza.</p>
        </div>
      </div>
    </div>

    <div class="col-md-4 fade-in">
      <div class="card border-0 shadow-lg hover-lift rounded-4 overflow-hidden">
        <img src="assets/img/suplementos.jpg" class="card-img-top" alt="Suplementos Pico de Oro">
        <div class="card-body">
          <h5 class="fw-bold text-primary mt-3">Suplementos</h5>
          <p class="text-muted">Fortalece su sistema inmune y mejora su desarrollo físico.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ESTILOS ADICIONALES -->
<style>
  .hover-lift {
    transition: transform 0.4s ease, box-shadow 0.4s ease;
  }

  .hover-lift:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
  }

  .card img {
    height: 230px;
    object-fit: cover;
    transition: transform 0.4s ease;
  }

  .card:hover img {
    transform: scale(1.08);
  }

  /* Animación de entrada suave */
  .fade-in {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s forwards;
  }

  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
</style>

<!-- ANIMACIÓN AL HACER SCROLL -->
<script>
  const faders = document.querySelectorAll('.fade-in');
  const appearOptions = { threshold: 0.2, rootMargin: "0px 0px -50px 0px" };

  const appearOnScroll = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      entry.target.classList.add('appear');
      observer.unobserve(entry.target);
    });
  }, appearOptions);

  faders.forEach(fader => appearOnScroll.observe(fader));
</script>


<!-- NOSOTROS -->
<section class="about-section py-5 text-light fade-in">
  <div class="container text-center">
    <h2 class="fw-bold mb-3">Nuestra Historia</h2>
    <p class="mb-5 text-light-50">
      Somos una empresa dedicada a ofrecer productos de nutrición y salud animal con un compromiso real con la excelencia.
      En <strong>Pico de Oro</strong> buscamos brindar confianza, asesoramiento y resultados visibles.
    </p>
    <a href="nosotros.php" class="btn btn-outline-light px-4 btn-animate">Conócenos Más</a>
  </div>
</section>

<!-- PRODUCTOS DESTACADOS -->
<section class="container py-5 text-center fade-in">
  <h2 class="fw-bold text-primary mb-4">Productos Destacados</h2>
  <div class="row">
    <?php
    $productos = [
      ["img" => "prod1.jpg", "titulo" => "Balanceado Premium", "desc" => "Nutrición completa para aves de combate."],
      ["img" => "prod2.jpg", "titulo" => "Suplemento Vital+", "desc" => "Aumenta el rendimiento físico y resistencia."],
      ["img" => "prod3.jpg", "titulo" => "Antibiótico Gallero", "desc" => "Protege la salud y mejora la recuperación."],
      ["img" => "prod4.jpg", "titulo" => "Vitaminas Fort+", "desc" => "Fortalece el sistema inmunológico."]
    ];
    foreach ($productos as $p): ?>
      <div class="col-md-3 mb-4 fade-in">
        <div class="card shadow-sm product-card hover-lift">
          <img src="assets/img/<?= $p['img'] ?>" class="card-img-top" alt="<?= $p['titulo'] ?>">
          <div class="card-body">
            <h6 class="fw-bold"><?= $p['titulo'] ?></h6>
            <p class="small text-muted"><?= $p['desc'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
<!-- SECCIÓN DE TESTIMONIOS -->
<section class="testimonios py-5 bg-gradient-to-r from-primary to-info text-light fade-in">
  <div class="container text-center">
    <h2 class="fw-bold text-warning mb-4">Lo que dicen nuestros clientes</h2>
    <p class="mb-5 text-light-50">La confianza se gana con resultados. Esto es lo que opinan quienes confían en <strong>Pico de Oro</strong>.</p>

    <div class="row g-4">
      <!-- Testimonio 1 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio1.jpg" alt="Cliente 1" class="rounded-circle mb-3 testimonial-img">
            <p>"Desde que uso sus balanceados, mis aves están más fuertes y saludables."</p>
            <h6 class="fw-bold text-warning mt-3">Juan Pérez</h6>
            <small class="text-light-50">Criador Profesional</small>
          </div>
        </div>
      </div>

      <!-- Testimonio 2 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio2.jpg" alt="Cliente 2" class="rounded-circle mb-3 testimonial-img">
            <p>"Excelente atención y productos de primera calidad. Mi criadero confía en Pico de Oro."</p>
            <h6 class="fw-bold text-warning mt-3">Luis Ramos</h6>
            <small class="text-light-50">Dueño de Criadero San Luis</small>
          </div>
        </div>
      </div>

      <!-- Testimonio 3 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio3.jpg" alt="Cliente 3" class="rounded-circle mb-3 testimonial-img">
            <p>"Los suplementos son increíbles, mis gallinas están más activas y con mejor plumaje."</p>
            <h6 class="fw-bold text-warning mt-3">María Torres</h6>
            <small class="text-light-50">Avicultora</small>
          </div>
        </div>
      </div>

      <!-- Testimonio 4 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio4.jpg" alt="Cliente 4" class="rounded-circle mb-3 testimonial-img">
            <p>"El servicio al cliente es excelente. Siempre dispuestos a ayudar y resolver dudas."</p>
            <h6 class="fw-bold text-warning mt-3">Carla Gómez</h6>
            <small class="text-light-50">Emprendedora</small>
          </div>
        </div>
      </div>

      <!-- Testimonio 5 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio5.jpg" alt="Cliente 5" class="rounded-circle mb-3 testimonial-img">
            <p>"He probado muchos productos, pero Pico de Oro destaca por su calidad y resultados."</p>
            <h6 class="fw-bold text-warning mt-3">Pedro Alarcón</h6>
            <small class="text-light-50">Criador Nacional</small>
          </div>
        </div>
      </div>

      <!-- Testimonio 6 -->
      <div class="col-md-4 col-lg-4">
        <div class="card testimonial-card shadow-lg border-0 bg-dark text-light hover-lift">
          <div class="card-body">
            <img src="./assets/img/testimonio6.jpg" alt="Cliente 6" class="rounded-circle mb-3 testimonial-img">
            <p>"Gracias a sus productos, mis aves tienen un rendimiento impresionante."</p>
            <h6 class="fw-bold text-warning mt-3">Lucía Fernández</h6>
            <small class="text-light-50">Criadora Independiente</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- LLAMADO A LA ACCIÓN -->
<section class="cta text-center text-light py-5 fade-in">
  <div class="container">
    <h2 class="fw-bold mb-3">¿Listo para mejorar el bienestar de tus aves?</h2>
    <p class="mb-4">Descubre nuestros productos y únete a la familia <strong>Pico de Oro</strong>.</p>
    <a href="productos.php" class="btn btn-warning px-4 py-2 fw-bold btn-animate">Ver Productos</a>
  </div>
</section>
<a href="https://docs.google.com/forms/d/e/1FAIpQLScgn1EYwejb7MmJJGA00gc0fU1p3Ey4NhmJlLgDcbeYzdw4tQ/viewform" class="btn btn-success">Ir al formulario</a>

<?php include 'footer.php'; ?>

<!-- ESTILOS -->
<style>
  /* ==== HERO ==== */
  .hero-img {
    height: 85vh;
    object-fit: cover;
    filter: brightness(70%);
    transition: transform 10s ease;
  }
  .carousel-item.active .hero-img {
    transform: scale(1.08);
  }

  /* ==== EFECTOS DE ENTRADA ==== */
  .fade-in {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.9s ease-out;
  }
  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }

  /* ==== TARJETAS ==== */
  .hover-lift {
    transition: all 0.4s ease;
  }
  .hover-lift:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
  }

  .about-section {
    background: linear-gradient(135deg, #003c9d, #2a52be);
  }

  .product-card img {
    transition: transform 0.6s ease;
  }
  .product-card:hover img {
    transform: scale(1.1);
  }

  .testimonial-card {
    transition: all 0.4s ease;
  }
  .testimonial-card:hover {
    background: #f1f7ff;
    transform: translateY(-5px);
  }

  .cta {
    background: linear-gradient(90deg, #0a1f44, #003c9d);
  }

  .btn-animate {
    transition: all 0.3s ease;
  }
  .btn-animate:hover {
    transform: scale(1.08);
    box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
  }

  body {
    padding-top: 130px;
  }
</style>

<!-- Animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- Scroll Animation -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const elements = document.querySelectorAll(".fade-in");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  }, { threshold: 0.2 });
  elements.forEach(el => observer.observe(el));
});
</script>
