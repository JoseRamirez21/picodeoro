<?php include 'header.php'; ?>

<!-- HERO / CARRUSEL -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/banner1.jpg" class="d-block w-100 hero-img" alt="Productos balanceados">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-5">Productos de Calidad para tus Aves</h2>
        <p class="fs-5">Balanceados, medicamentos y suplementos de confianza.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner2.jpg" class="d-block w-100 hero-img" alt="Gallos sanos">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-5">Salud y Rendimiento Garantizado</h2>
        <p class="fs-5">Cuida tus aves con productos de primera calidad.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/img/banner3.jpg" class="d-block w-100 hero-img" alt="Gallinas felices">
      <div class="carousel-caption d-none d-md-block animate__animated animate__fadeInUp">
        <h2 class="fw-bold text-light display-5">Confianza y Compromiso</h2>
        <p class="fs-5">Tu aliado en el cuidado de tus aves.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- BIENVENIDA -->
<section class="container text-center py-5 fade-in">
  <h2 class="fw-bold text-primary mb-3">Bienvenido a <span class="text-warning">Pico de Oro</span></h2>
  <p class="lead text-secondary">Ofrecemos productos de alta calidad para el bienestar, crecimiento y desarrollo de tus gallos y gallinas.</p>

  <div class="row mt-5">
    <div class="col-md-4 mb-4 fade-in">
      <div class="card feature-card shadow border-0 hover-lift">
        <div class="card-body">
          <i class="fa-solid fa-seedling fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Balanceados</h5>
          <p>Alimentos nutritivos para el mejor rendimiento y energía.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4 fade-in">
      <div class="card feature-card shadow border-0 hover-lift">
        <div class="card-body">
          <i class="fa-solid fa-prescription-bottle-medical fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Medicamentos</h5>
          <p>Tratamientos y productos veterinarios de confianza.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-4 fade-in">
      <div class="card feature-card shadow border-0 hover-lift">
        <div class="card-body">
          <i class="fa-solid fa-drumstick-bite fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Suplementos</h5>
          <p>Fortalece su sistema inmune y mejora su desarrollo físico.</p>
        </div>
      </div>
    </div>
  </div>
</section>

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

<!-- TESTIMONIOS -->
<section class="testimonios py-5 bg-light fade-in">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4">Testimonios</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card p-3 border-0 shadow-sm testimonial-card hover-lift">
          <p>"Desde que uso sus balanceados, mis aves están más fuertes y saludables. ¡100% recomendado!"</p>
          <h6 class="fw-bold text-primary mt-3">Juan Pérez</h6>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card p-3 border-0 shadow-sm testimonial-card hover-lift">
          <p>"Excelente atención y productos de calidad. Mi criadero confía en Pico de Oro."</p>
          <h6 class="fw-bold text-primary mt-3">Luis Ramos</h6>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card p-3 border-0 shadow-sm testimonial-card hover-lift">
          <p>"Los suplementos son increíbles, mis gallinas están más activas y con mejor plumaje."</p>
          <h6 class="fw-bold text-primary mt-3">María Torres</h6>
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
