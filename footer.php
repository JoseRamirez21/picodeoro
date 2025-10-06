  <!-- FOOTER -->
  <footer class="footer text-light pt-5 pb-3 mt-5">
    <div class="container text-center">

      <!-- LOGO -->
      <div class="mb-3">
        <img src="./assets/img/logo.png" alt="Logo Pico de Oro" class="footer-logo">
      </div>

      <!-- NOMBRE Y DESCRIPCIÓN -->
      <h5 class="fw-bold mb-1">Pico de Oro</h5>
      <p class="text-secondary mb-4">Productos balanceados y veterinarios para gallos y gallinas</p>

      <!-- REDES SOCIALES -->
      <div class="mb-4">
        <a href="#" class="social-link mx-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="social-link mx-2"><i class="bi bi-instagram"></i></a>
        <a href="#" class="social-link mx-2"><i class="bi bi-whatsapp"></i></a>
      </div>

      <!-- ENLACES RÁPIDOS -->
      <div class="footer-links mb-4">
        <a href="index.php">Inicio</a>
        <a href="productos.php">Productos</a>
        <a href="referencias.php">Referencias</a>
        <a href="nosotros.php">Nosotros</a>
        <a href="login.php">Iniciar Sesión</a>
      </div>

      <!-- LÍNEA DIVISORIA -->
      <hr class="footer-line">

      <!-- COPYRIGHT -->
      <p class="mb-0 small text-secondary">
        © 2025 <strong>Pico de Oro</strong> | Todos los derechos reservados
      </p>
    </div>
  </footer>

  <!-- ESTILOS FOOTER -->
  <style>
    .footer {
      background: #0d0d0d;
      position: relative;
      overflow: hidden;
    }

    .footer-logo {
      height: 70px;
      filter: drop-shadow(0 0 6px rgba(255,255,255,0.1));
      transition: transform 0.3s ease;
    }

    .footer-logo:hover {
      transform: scale(1.08);
    }

    .social-link {
      color: #f5f5f5;
      font-size: 1.6rem;
      transition: color 0.3s, transform 0.3s;
    }

    .social-link:hover {
      color: #2196f3;
      transform: translateY(-4px);
    }

    .footer-links a {
      color: #bfbfbf;
      text-decoration: none;
      margin: 0 10px;
      font-size: 0.95rem;
      transition: color 0.3s;
    }

    .footer-links a:hover {
      color: #2196f3;
    }

    .footer-line {
      width: 80%;
      margin: 15px auto;
      border-color: rgba(255, 255, 255, 0.1);
    }

    /* Animación suave al aparecer */
    .footer {
      animation: fadeInUp 1s ease;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- JS personalizado -->
  <script src="assets/js/main.js"></script>

</body>
</html>
