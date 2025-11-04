<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mi Empresa Profesional</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Iconos -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    /* Estilos personalizados */
    body {
      scroll-behavior: smooth;
    }

    .navbar {
      background-color: #0d6efd;
    }

    .navbar a.nav-link {
      color: #fff !important;
      font-weight: 500;
    }

    .hero {
      background: linear-gradient(to right, #0d6efd, #6610f2);
      color: white;
      padding: 120px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .section {
      padding: 80px 0;
    }

    footer {
      background-color: #212529;
      color: #bbb;
      padding: 40px 0;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#inicio">MiEmpresa</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#inicio">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Proyectos</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section id="inicio" class="hero d-flex align-items-center justify-content-center">
    <div class="container">
      <h1>Construimos Soluciones Profesionales</h1>
      <p class="lead mt-3">Desarrollo web, diseño y estrategias digitales a tu medida.</p>
      <a href="#servicios" class="btn btn-light btn-lg mt-4">Conoce más</a>
    </div>
  </section>

  <!-- SERVICIOS -->
  <section id="servicios" class="section">
    <div class="container text-center">
      <h2 class="mb-5 fw-bold">Nuestros Servicios</h2>
      <div class="row">
        <div class="col-md-4">
          <i class="bi bi-laptop fs-1 text-primary mb-3"></i>
          <h5>Desarrollo Web</h5>
          <p>Diseñamos sitios modernos, rápidos y adaptables a cualquier dispositivo.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-graph-up-arrow fs-1 text-primary mb-3"></i>
          <h5>Marketing Digital</h5>
          <p>Impulsa tu marca con estrategias efectivas de SEO y redes sociales.</p>
        </div>
        <div class="col-md-4">
          <i class="bi bi-people fs-1 text-primary mb-3"></i>
          <h5>Consultoría</h5>
          <p>Te acompañamos en la transformación digital de tu empresa.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- NOSOTROS -->
  <section id="nosotros" class="section bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="https://source.unsplash.com/600x400/?team,office" class="img-fluid rounded" alt="Equipo de trabajo">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold mb-4">Sobre Nosotros</h2>
          <p>Somos un equipo apasionado por la tecnología y la innovación. Nuestro objetivo es ayudar a las empresas a crecer y destacar en el mundo digital.</p>
          <p>Con más de 10 años de experiencia, combinamos creatividad, estrategia y tecnología para ofrecer resultados medibles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PORTFOLIO -->
  <section id="portfolio" class="section">
    <div class="container text-center">
      <h2 class="fw-bold mb-5">Nuestros Proyectos</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x300/?website,design" class="img-fluid rounded shadow-sm" alt="">
        </div>
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x300/?app,development" class="img-fluid rounded shadow-sm" alt="">
        </div>
        <div class="col-md-4">
          <img src="https://source.unsplash.com/400x300/?marketing,seo" class="img-fluid rounded shadow-sm" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACTO -->
  <section id="contacto" class="section bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Contáctanos</h2>
        <p>¿Listo para comenzar tu proyecto? Envíanos un mensaje.</p>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Tu nombre">
            </div>
            <div class="mb-3">
              <label class="form-label">Correo Electrónico</label>
              <input type="email" class="form-control" placeholder="nombre@correo.com">
            </div>
            <div class="mb-3">
              <label class="form-label">Mensaje</label>
              <textarea class="form-control" rows="4" placeholder="Escribe tu mensaje"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <p class="mb-1">© 2025 MiEmpresa. Todos los derechos reservados.</p>
      <div>
        <a href="#" class="text-light me-3"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-light me-3"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>