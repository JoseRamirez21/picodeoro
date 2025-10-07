<?php include 'header.php'; ?>

<section class="productos py-5 fade-in">
  <div class="container">
    <h2 class="fw-bold text-center text-primary mb-4">Nuestros Productos</h2>
    <p class="text-center text-secondary mb-5">Conoce nuestras categorías diseñadas para el bienestar, nutrición y rendimiento de tus aves.</p>

    <!-- === BALANCEADOS === -->
    <div class="categoria mb-5">
      <h3 class="text-center fw-bold text-dark mb-4">Balanceados</h3>
      <div class="row g-4">
        <?php
        $productos = [
          ["img" => "./assets/img/balanceado1.jpg", "nombre" => "Balanceado Premium", "desc" => "Nutrición completa para aves de competencia."],
          ["img" => "./assets/img/balanceado2.jpg", "nombre" => "Balanceado Crecimiento", "desc" => "Ideal para etapas tempranas de desarrollo."],
          ["img" => "./assets/img/balanceado3.jpg", "nombre" => "Balanceado Engorde", "desc" => "Favorece la ganancia de peso con ingredientes naturales."]
        ];
        foreach ($productos as $i => $p): ?>
          <div class="col-md-4">
            <div class="card product-card shadow hover-lift border-0">
              <img src="<?= $p['img'] ?>" class="card-img-top" alt="<?= $p['nombre'] ?>">
              <div class="card-body text-center">
                <h5 class="fw-bold"><?= $p['nombre'] ?></h5>
                <p class="text-muted"><?= $p['desc'] ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?= $i ?>">Ver más</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- === SUPLEMENTOS === -->
    <div class="categoria mb-5">
      <h3 class="text-center fw-bold text-dark mb-4">Suplementos</h3>
      <div class="row g-4">
        <?php
        $suplementos = [
          ["img" => "./assets/img/suplemento1.jpg", "nombre" => "Suplemento Energético", "desc" => "Aumenta la resistencia física de tus aves."],
          ["img" => "./assets/img/suplemento2.jpg", "nombre" => "Suplemento Multivitamínico", "desc" => "Refuerza el sistema inmune y crecimiento."],
          ["img" => "./assets/img/suplemento3.jpg", "nombre" => "Reforzador de Plumas", "desc" => "Favorece el brillo y resistencia del plumaje."]
        ];
        foreach ($suplementos as $j => $s): ?>
          <div class="col-md-4">
            <div class="card product-card shadow hover-lift border-0">
              <img src="<?= $s['img'] ?>" class="card-img-top" alt="<?= $s['nombre'] ?>">
              <div class="card-body text-center">
                <h5 class="fw-bold"><?= $s['nombre'] ?></h5>
                <p class="text-muted"><?= $s['desc'] ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSup<?= $j ?>">Ver más</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- === MEDICAMENTOS === -->
    <div class="categoria mb-5">
      <h3 class="text-center fw-bold text-dark mb-4">Medicamentos</h3>
      <div class="row g-4">
        <?php
        $medicamentos = [
          ["img" => "./assets/img/medicamento1.jpg", "nombre" => "Antiparasitario Avícola", "desc" => "Elimina parásitos internos y externos."],
          ["img" => "./assets/img/medicamento2.jpg", "nombre" => "Antibiótico Avilox", "desc" => "Previene y trata infecciones respiratorias."],
          ["img" => "./assets/img/medicamento3.jpg", "nombre" => "Desinfectante Gallocid", "desc" => "Ideal para mantener un ambiente higiénico."]
        ];
        foreach ($medicamentos as $k => $m): ?>
          <div class="col-md-4">
            <div class="card product-card shadow hover-lift border-0">
              <img src="<?= $m['img'] ?>" class="card-img-top" alt="<?= $m['nombre'] ?>">
              <div class="card-body text-center">
                <h5 class="fw-bold"><?= $m['nombre'] ?></h5>
                <p class="text-muted"><?= $m['desc'] ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMed<?= $k ?>">Ver más</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- === VITAMINAS === -->
    <div class="categoria mb-5">
      <h3 class="text-center fw-bold text-dark mb-4">Vitaminas</h3>
      <div class="row g-4">
        <?php
        $vitaminas = [
          ["img" => "./assets/img/vitamina1.jpg", "nombre" => "Vitamina A+E", "desc" => "Mejora la visión y el sistema inmune."],
          ["img" => "./assets/img/vitamina2.jpg", "nombre" => "Vitamina B-Complex", "desc" => "Optimiza el metabolismo y crecimiento."],
          ["img" => "./assets/img/vitamina3.jpg", "nombre" => "Vitamina C Forte", "desc" => "Potente antioxidante para mayor vitalidad."]
        ];
        foreach ($vitaminas as $v => $vit): ?>
          <div class="col-md-4">
            <div class="card product-card shadow hover-lift border-0">
              <img src="<?= $vit['img'] ?>" class="card-img-top" alt="<?= $vit['nombre'] ?>">
              <div class="card-body text-center">
                <h5 class="fw-bold"><?= $vit['nombre'] ?></h5>
                <p class="text-muted"><?= $vit['desc'] ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalVit<?= $v ?>">Ver más</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- === ACCESORIOS === -->
    <div class="categoria">
      <h3 class="text-center fw-bold text-dark mb-4">Accesorios</h3>
      <div class="row g-4">
        <?php
        $accesorios = [
          ["img" => "./assets/img/accesorio1.jpg", "nombre" => "Bebedero Automático", "desc" => "Práctico y resistente para todas las edades."],
          ["img" => "./assets/img/accesorio2.jpg", "nombre" => "Comedero Reforzado", "desc" => "Evita desperdicios y facilita la limpieza."],
          ["img" => "./assets/img/accesorio3.jpg", "nombre" => "Jaula Premium", "desc" => "Espaciosa, ventilada y de alta durabilidad."]
        ];
        foreach ($accesorios as $a => $acc): ?>
          <div class="col-md-4">
            <div class="card product-card shadow hover-lift border-0">
              <img src="<?= $acc['img'] ?>" class="card-img-top" alt="<?= $acc['nombre'] ?>">
              <div class="card-body text-center">
                <h5 class="fw-bold"><?= $acc['nombre'] ?></h5>
                <p class="text-muted"><?= $acc['desc'] ?></p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAcc<?= $a ?>">Ver más</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
