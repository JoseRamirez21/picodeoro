<?php include 'header.php'; ?>

<!-- SECCIÓN NOSOTROS -->
<section class="nosotros py-5" style="background: linear-gradient(135deg, #004aad, #007bff); color: white;">
  <div class="container fade-in">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h2 class="fw-bold mb-3">Sobre <span class="text-warning">Pico de Oro</span></h2>
        <p class="lead">Somos una empresa dedicada al bienestar, desarrollo y nutrición de aves de combate y granja. Con más de 10 años de experiencia, ofrecemos productos balanceados, suplementos y medicamentos de calidad superior, comprometidos con la excelencia y la confianza de nuestros clientes.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="./assets/img/nosotros.jpg" alt="Nosotros Pico de Oro" class="img-fluid rounded-4 shadow-lg hover-lift">
      </div>
    </div>
  </div>
</section>

<!-- MISIÓN Y VISIÓN -->
<section class="py-5 bg-light fade-in">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-md-6">
        <div class="card p-4 border-0 shadow h-100 hover-lift">
          <i class="fa-solid fa-bullseye fa-3x text-primary mb-3"></i>
          <h4 class="fw-bold">Misión</h4>
          <p class="text-secondary">Proveer productos de nutrición y salud avícola de la más alta calidad, garantizando el bienestar animal y contribuyendo al éxito de los criadores y productores del país.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card p-4 border-0 shadow h-100 hover-lift">
          <i class="fa-solid fa-eye fa-3x text-primary mb-3"></i>
          <h4 class="fw-bold">Visión</h4>
          <p class="text-secondary">Ser una empresa líder en el sector agropecuario peruano, reconocida por su innovación, compromiso y excelencia en el desarrollo de productos avícolas.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VALORES CORPORATIVOS -->
<section class="valores py-5 fade-in" style="background: linear-gradient(135deg, #007bff, #00c6ff); color: white;">
  <div class="container text-center">
    <h3 class="fw-bold mb-4">Nuestros Valores</h3>
    <div class="row justify-content-center g-4">
      <div class="col-md-3 col-6">
        <div class="card bg-transparent border-0 text-white hover-scale">
          <i class="fa-solid fa-handshake fa-3x mb-3"></i>
          <h6 class="fw-bold">Compromiso</h6>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card bg-transparent border-0 text-white hover-scale">
          <i class="fa-solid fa-heart fa-3x mb-3"></i>
          <h6 class="fw-bold">Pasión</h6>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card bg-transparent border-0 text-white hover-scale">
          <i class="fa-solid fa-scale-balanced fa-3x mb-3"></i>
          <h6 class="fw-bold">Honestidad</h6>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card bg-transparent border-0 text-white hover-scale">
          <i class="fa-solid fa-leaf fa-3x mb-3"></i>
          <h6 class="fw-bold">Responsabilidad</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- NUESTRO EQUIPO -->
<section class="equipo py-5 bg-light fade-in">
  <div class="container text-center">
    <h3 class="fw-bold text-primary mb-4">Nuestro Equipo</h3>
    <p class="text-secondary mb-5">Contamos con un equipo altamente calificado que trabaja con dedicación para ofrecer el mejor servicio y asesoramiento a nuestros clientes.</p>
    <div class="row justify-content-center g-4">
      <div class="col-md-3 col-6">
        <div class="card border-0 shadow-sm hover-lift">
          <img src="./assets/img/team1.jpg" class="card-img-top rounded-top" alt="Gerente General">
          <div class="card-body">
            <h6 class="fw-bold mb-0">Carlos Gutiérrez</h6>
            <small class="text-muted">Gerente General</small>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border-0 shadow-sm hover-lift">
          <img src="./assets/img/team2.jpg" class="card-img-top rounded-top" alt="Jefa de Ventas">
          <div class="card-body">
            <h6 class="fw-bold mb-0">María López</h6>
            <small class="text-muted">Jefa de Ventas</small>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border-0 shadow-sm hover-lift">
          <img src="./assets/img/team3.jpg" class="card-img-top rounded-top" alt="Veterinario">
          <div class="card-body">
            <h6 class="fw-bold mb-0">Juan Torres</h6>
            <small class="text-muted">Veterinario Especialista</small>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="card border-0 shadow-sm hover-lift">
          <img src="./assets/img/team4.jpg" class="card-img-top rounded-top" alt="Asesora Técnica">
          <div class="card-body">
            <h6 class="fw-bold mb-0">Lucía Ramos</h6>
            <small class="text-muted">Asesora Técnica</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- ESTILOS ADICIONALES -->
<style>
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1.2s ease-out forwards;
}
@keyframes fadeInUp {
  to { opacity: 1; transform: translateY(0); }
}
.hover-lift {
  transition: all 0.3s ease;
}
.hover-lift:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.2);
}
.hover-scale {
  transition: transform 0.4s ease;
}
.hover-scale:hover {
  transform: scale(1.1);
}
</style>
