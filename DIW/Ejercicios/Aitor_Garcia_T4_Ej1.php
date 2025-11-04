<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio 1 Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <link rel="stylesheet" href="styless.css">
</head>
<body class="bg-light">

<!-- Navbar -->
<header>
  <nav class="navbar bg-white">
    <div class="container position-relative">
      <a class="navbar-brand fw-bold text-danger" href="#">E.S</a>

      <!-- Botón del menú -->
      <button class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-bs-target="#navbarNav" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menú desplegable -->
      <div class="dropdown-menu dropdown-menu-end mt-2" id="navbarNav">
        <ul class="navbar-nav px-3">
          <li class="nav-item"><a class="nav-link" href="#about">Sobre mí</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">Portafolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonios</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>


<section class="hero py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Texto a la izquierda -->
      <div class="col-md-6 text-center text-md-start">
        <p class="text-muted mb-1">Hola, soy</p>
        <h1 class="fw-bold">Diseñador Web</h1>
        <h5 class="text-muted mb-3">Aitor Garcia</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#portfolio" class="btn btn-danger mt-3">Ver mi trabajo</a>
      </div>

      <!-- Imagen a la derecha -->
      <div class="col-md-6 text-center text-md-end">
        <img src="/img/Aitor.jpg" alt="Foto perfil" class="profile-img">
      </div>
    </div>
  </div>
</section>



<section id="about" class="container">
  <h2 class="section-title">Sobre Mí</h2>
  <div class="row align-items-center">
<div class="col-md-6 text-center">
  <h3>Me gusta mucho el diseño web</h3>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
  
  <div class="row text-center mb-4">
    <div class="col">
      <div class="fs-2 fw-bold">100</div>
      <div class="fs-6 text-muted">Proyectos</div>
    </div>
    <div class="col">
      <div class="fs-2 fw-bold">90</div>
      <div class="fs-6 text-muted">Clientes Felices</div>
    </div>
    <div class="col">
      <div class="fs-2 fw-bold">95</div>
      <div class="fs-6 text-muted">Opiniones Positivas</div>
    </div>
  </div>

  <div class="d-flex justify-content-center align-items-center gap-3">
    <button class="btn btn-danger">Descargar CV</button>
    <a href="#" class="text-danger fs-4"><i class="bi bi-instagram"></i></a>
    <a href="#" class="text-danger fs-4"><i class="bi bi-x"></i></a>
    <a href="#" class="text-danger fs-4"><i class="bi bi-linkedin"></i></a>
  </div>
</div>
    <div class="col-md-6">
      <p>HTML</p>
      <div class="progress mb-2"><div class="progress-bar" style="width: 95%"></div></div>
      <p>CSS</p>
      <div class="progress mb-2"><div class="progress-bar" style="width: 75%"></div></div>
      <p>JavaScript</p>
      <div class="progress mb-2"><div class="progress-bar" style="width: 60%"></div></div>
      <p>Bootstrap</p>
      <div class="progress"><div class="progress-bar" style="width: 50%"></div></div>
    </div>
  </div>
</section>



<section id="services" class=" py-5">
  <div class="container">
    <h2 class="section-title text-center mb-5">Lo que hago</h2>
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-sm p-4">
          <i class="bi bi-code-slash fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Desarrollo Web</h5>
          <p class="text-muted mb-0">Diseños modernos y funcionales.</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-sm p-4">
          <i class="bi bi-palette fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Diseño Creativo</h5>
          <p class="text-muted mb-0">Interfaces atractivas e intuitivas.</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card h-100 text-center border-0 shadow-sm p-4">
          <i class="bi bi-images fs-1 text-danger mb-3"></i>
          <h5 class="fw-bold">Photoshop</h5>
          <p class="text-muted mb-0">Edición y composición profesional.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="portfolio" class="container py-5">
  <h2 class="section-title text-center mb-4">Últimos Trabajos</h2>
  <div class="row justify-content-center">
    <div class="col-lg-6 text-center">
      <img src="/img/Juego_Vida.png" class="img-fluid rounded mb-2" alt="Trabajo 1">
      <p class="mt-2 fw-bold">Juego de la Vida en PHP</p>
    </div>
  </div>
</section>

<section class="cta">
  <h3>¿Tienes algún proyecto?</h3>
  <p>Estoy disponible para trabajos como freelancer.</p>
  <a href="#contact" class="btn btn-light">Contrátame</a>
</section>


<section id="testimonials" class="py-5">
  <h2 class="section-title text-center mb-4">Testimonios</h2>

  <div class="container" style="max-width:600px;">
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner text-center">

        <!-- Testimonio 1 -->
        <div class="carousel-item active">
          <div class="testimonial px-3">
            <img src="/img/3135768.png" class="rounded-circle mb-2" alt="Cliente" height="70" width="70">
            <h6 class="mb-1">Raj Himachal</h6>
            <p class="text-muted small mb-1">SEO Manager</p>
            <p class="small">"Excelente profesional, cumplió con los plazos y superó expectativas."</p>
            <div class="text-danger small">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>

        <!-- Testimonio 2 -->
        <div class="carousel-item">
          <div class="testimonial px-3">
            <img src="/img/3135768.png" class="rounded-circle mb-2" alt="Cliente" height="70" width="70">
            <h6 class="mb-1">Maria López</h6>
            <p class="text-muted small mb-1">Project Manager</p>
            <p class="small">"Trabajo impecable, muy atento y profesional."</p>
            <div class="text-danger small">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>

        <!-- Testimonio 3 -->
        <div class="carousel-item">
          <div class="testimonial px-3">
            <img src="/img/3135768.png" class="rounded-circle mb-2" alt="Cliente" height="70" width="70">
            <h6 class="mb-1">Carlos Fernández</h6>
            <p class="text-muted small mb-1">Developer</p>
            <p class="small">"Muy recomendable, entendió perfectamente mis necesidades."</p>
            <div class="text-danger small">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
          </div>
        </div>

      </div>

      <!-- Controles -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
</section>





<section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 mb-4 mb-md-0">
        <div class="d-flex align-items-center mb-3">
          <i class="bi bi-envelope-fill text-danger fs-3 me-3"></i>
          <div>
            <h6 class="fw-bold mb-0">Correo</h6>
            <p class="mb-0 text-muted">aitorgt2005@gmail.com</p>
          </div>
        </div>

        <div class="d-flex align-items-center mb-3">
          <i class="bi bi-telephone-fill text-danger fs-3 me-3"></i>
          <div>
            <h6 class="fw-bold mb-0">Teléfono</h6>
            <p class="mb-0 text-muted">+34 699 49 13 71</p>
          </div>
        </div>

        <div class="d-flex align-items-center">
          <i class="bi bi-geo-alt-fill text-danger fs-3 me-3"></i>
          <div>
            <h6 class="fw-bold mb-0">Ubicación</h6>
            <p class="mb-0 text-muted">Madrid, España</p>
          </div>
        </div>
      </div>

     <div class="col-md-7">
        <form method="POST">
          <div class="row mb-3">
            <div class="col">
              <input type="text" name="name" class="form-control" placeholder="Tu nombre" required>
            </div>
            <div class="col">
              <input type="email" name="email" class="form-control" placeholder="Tu email" required>
            </div>
          </div>
          <input type="text" name="subject" class="form-control mb-3" placeholder="Asunto">
          <textarea name="message" rows="4" class="form-control mb-3" placeholder="Tu mensaje"></textarea>
          <button type="submit" class="btn btn-danger">Enviar Mensaje</button>
        </form>
      </div>
  </div>
</section>



<footer class="bg-light text-white py-4 ">
  <p class="text-black">© 2025 Aitor Garcia Portafolio Web</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
