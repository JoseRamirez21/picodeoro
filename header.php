<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pico de Oro - Productos Avícolas</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Iconos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Fuente moderna -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Estilos personalizados -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7fb;
    }

    /* Header principal */
    .navbar {
      background: linear-gradient(90deg, #0052D4, #4364F7, #6FB1FC);
      transition: background 0.4s ease, box-shadow 0.3s;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .navbar.scrolled {
      background: linear-gradient(90deg, #003c9d, #2a52be, #5d9cec);
      box-shadow: 0 6px 15px rgba(0,0,0,0.25);
    }

    .navbar-brand img {
      height: 65px;
      transition: transform 0.3s ease;
    }

    .navbar-brand img:hover {
      transform: scale(1.1);
    }

    .nav-link {
      color: #ffffff !important;
      font-weight: 500;
      margin: 0 10px;
      position: relative;
      transition: color 0.3s, transform 0.3s;
    }

    .nav-link::after {
      content: "";
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 0%;
      height: 3px;
      background: #fff;
      border-radius: 3px;
      transition: width 0.3s ease;
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .nav-link:hover {
      transform: translateY(-3px);
    }

    .btn-login {
      background: #ffffff;
      color: #0052D4;
      border-radius: 25px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
      border: 2px solid #fff;
    }

    .btn-login:hover {
      background: transparent;
      color: #fff;
      border-color: #fff;
      transform: scale(1.05);
    }

    /* Animación de aparición */
    .fade-in {
      animation: fadeInDown 1s ease;
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg fixed-top fade-in">
    <div class="container">
      <!-- Logo -->
     <a class="navbar-brand" href="index.php">
  <img src="./assets/img/logo.png" alt="Logo Pico de Oro" style="height: 130px; width: 180px;">
</a>


      <!-- Botón responsive -->
      <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="bi bi-list" style="font-size: 1.8rem;"></i>
      </button>

      <!-- Menú -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-lg-center">
          <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
          <li class="nav-item"><a class="nav-link" href="referencias.php">Referencias</a></li>
          <li class="nav-item"><a class="nav-link" href="nosotros.php">Nosotros</a></li>
           <li class="nav-item"><a class="nav-link" href="carrito.php">Carrito</a></li>
          <li class="nav-item ms-lg-3">
        
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script>
    // Efecto de cambio de color al hacer scroll
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      navbar.classList.toggle('scrolled', window.scrollY > 60);
    });
  </script>
<script>
document.addEventListener("DOMContentLoaded", () => {
  const navbar = document.querySelector(".navbar");
  if (navbar) {
    const navbarHeight = navbar.offsetHeight;
    document.body.style.paddingTop = `${navbarHeight + 20}px`;
  }
});
</script>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
