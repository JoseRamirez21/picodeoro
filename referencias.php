<?php include 'header.php'; ?>

<!-- SECCIÓN DE REFERENCIAS -->
<section class="referencias py-5" style="background: linear-gradient(135deg, #004aad, #007bff); color: white;">
  <div class="container text-center fade-in">
    <h2 class="fw-bold mb-4">Nuestras Referencias y Aliados Estratégicos</h2>
    <p class="lead mb-5">En <span class="fw-bold text-warning">Pico de Oro</span>, trabajamos junto a reconocidas marcas de crianzas de gallos de pelea. teniendo un gran reconocimiento y desempeño en las peleas</p>

    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref1.jpg" class="img-fluid" alt="Referencia 1">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref2.jpg" class="img-fluid" alt="Referencia 2">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref3.jpg" class="img-fluid" alt="Referencia 3">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref4.jpg" class="img-fluid" alt="Referencia 4">
        </div>
      </div>
    </div>

    <div class="row g-4 mt-4">
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref5.jpg" class="img-fluid" alt="Referencia 5">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref6.jpg" class="img-fluid" alt="Referencia 6">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref7.jpg" class="img-fluid" alt="Referencia 7">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="partner-card p-3 bg-white rounded-4 shadow-sm hover-lift">
          <img src="./assets/img/ref8.jpg" class="img-fluid" alt="Referencia 8">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECCIÓN DE CERTIFICACIONES -->
<section class="certificaciones py-5 fade-in" style="background: linear-gradient(180deg, #f8faff 0%, #e9f2ff 100%);">
  <div class="container text-center">
    <h3 class="fw-bold text-primary mb-4">Certificaciones y Reconocimientos</h3>
    <p class="text-secondary mb-5">
      Contamos con certificaciones que garantizan la calidad y seguridad de nuestros productos, 
      cumpliendo con los estándares nacionales e internacionales.
    </p>

    <div class="row justify-content-center g-4">
      <!-- Certificación ISO -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm hover-lift h-100">
          <img src="./assets/img/certificado-iso.jpg" class="card-img-top rounded-top" alt="Certificación ISO 9001">
          <div class="card-body">
            <i class="fa-solid fa-medal fa-2x text-warning mb-3"></i>
            <h5 class="fw-bold">Certificación de Calidad ISO 9001</h5>
            <p class="text-secondary">Reconocimiento por procesos de gestión de calidad eficientes y sostenibles.</p>
          </div>
        </div>
      </div>

      <!-- Certificación SENASA -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm hover-lift h-100">
          <img src="./assets/img/certificado-senasa.jpg" class="card-img-top rounded-top" alt="Certificación SENASA">
          <div class="card-body">
            <i class="fa-solid fa-certificate fa-2x text-primary mb-3"></i>
            <h5 class="fw-bold">Certificación SENASA</h5>
            <p class="text-secondary">Autorizados por el Servicio Nacional de Sanidad Agraria para la venta de productos veterinarios.</p>
          </div>
        </div>
      </div>

      <!-- Reconocimiento Regional -->
      <div class="col-md-4">
        <div class="card border-0 shadow-sm hover-lift h-100">
          <img src="./assets/img/reconocimiento-regional.jpg" class="card-img-top rounded-top" alt="Reconocimiento Regional">
          <div class="card-body">
            <i class="fa-solid fa-award fa-2x text-success mb-3"></i>
            <h5 class="fw-bold">Reconocimiento Regional</h5>
            <p class="text-secondary">Premio al compromiso con el desarrollo del sector avícola en la región centro-sur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ESTILOS -->
<style>
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1s ease-out forwards;
}
@keyframes fadeInUp {
  to { opacity: 1; transform: translateY(0); }
}

.hover-lift {
  transition: all 0.35s ease;
}
.hover-lift:hover {
  transform: translateY(-8px);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.card img {
  height: 220px;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.card:hover img {
  transform: scale(1.05);
}
</style>


<?php include 'footer.php'; ?>

<!-- ESTILOS ADICIONALES -->
<style>
.partner-card {
  transition: all 0.4s ease;
}
.partner-card:hover {
  transform: translateY(-10px) scale(1.05);
  box-shadow: 0 8px 20px rgba(0,0,0,0.2);
}
.fade-in {
  opacity: 0;
  transform: translateY(30px);
  animation: fadeInUp 1.2s ease-out forwards;
}
@keyframes fadeInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
.hover-lift {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hover-lift:hover {
  transform: translateY(-8px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}
</style>
