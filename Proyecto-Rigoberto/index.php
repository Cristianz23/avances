<?php
    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/utils/session_start.php";

    if(isset($_GET['views'])){
        $url = explode("/", $_GET['views']);
    }else {
        $url=["index"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./app/views/utils/head.php"; ?>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="./app/views/img/favicon.ico" style="max-height: 66px;" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html#inicio" class="">Inicio</a></li>
          <li><a href="index.html#mision">Misión y Visión</a></li>
          <li><a href="index.html#historia">Historia</a></li>
          <li><a href="index.html#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn btn-primary btn-getstarted" href="Vistas/login.php">Acceder</a>

    </div>
  </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="inicio" class="section hero">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="">"Seguimos el legado histórico que nos dejó el héroe Rigoberto López Pérez</h1>
            <p>Ahora tenemos una patria soñada, una patria azul y blanco libre, soberana. Eso se concretiza ahora en estos nuevos tiempos, en el cual los jóvenes pueden escoger la carrera que ellos han soñado estudiar libremente, con una educación que es gratuita”.</p>
            <div class="d-flex">
              <p><b>Director: </b>Roger Salgado Selva.</p>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img">
            <img src="./app/views/img/Rigoberto-front.jpg" class="img-fluid" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="mision" class="section about">

      <div class="container">

        <div class="row gy-3">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="./app/views/img/Rigoberto-front2.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Misión y visión</h3>
              <ul>
                <li>
                  <i class="bi bi-person"></i>
                  <div>
                    <h4>Misión</h4>
                    <p>Formar educandos logrando en ellos un desarrollo pleno en el que adquieran conocimientos, 
                      habilidades, valores y capacidades con la participación de directivos, docentes, personal de apoyo 
                      y padres de familia para que respondan de manera efectiva a las necesidades de la sociedad.
                    </p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-eye"></i>
                  <div>
                    <h4>Visión</h4>
                    <p>En nuestro colegio, buscamos ser un faro de excelencia educativa, donde cada estudiante descubra 
                      su máximo potencial y desarrolle un amor por el aprendizaje que los acompañará a lo largo de sus vidas.
                    </p>
                  </div>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="historia" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Historia</h2>
        <p>Pascual Rigoberto López Pérez (León, 13 de mayo de 1929 - 21 de septiembre de 1956), fue un poeta nicaragüense, 
          importante símbolo de la revolución nicaragüense, que se inmoló al dar muerte al tirano Anastasio Somoza García. 
          León, Nicaragua. El colegio del ilustre se encuentra ubicado de la calle ENEL Central 500 varas Al Sur
        </p>
      </div><!-- End Section Title -->



    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
        <p>Puedes contactarnos a través de los siguientes enlaces:</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Dirección</h3>
                  <p>Enel central, 500m al sur., Managua, Nicaragua</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Teléfono</h3>
                  <p>+505 8113 0723</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Correo</h3>
                  <p>info@rigobertolopezperez.edu</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-facebook flex-shrink-0"></i>
                <div>
                  <h3>Facebook</h3>
                  <p>facebook.com/OficiaLINRLP/</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-twitter flex-shrink-0"></i>
                <div>
                  <h3>Twitter</h3>
                  <p>@OficiaLINRLP</p>
                </div>
              </div><!-- End Info Item -->
            </div>
          </div>

          <div class="col-lg-7">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3900.9129234551874!2d-86.2780379886136!3d12.118110232964364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f7155eaf4bf89bf%3A0xc8ffd139ef2447db!2sInstituto%20Nacional%20Rigoberto%20L%C3%B3pez%20P%C3%A9rez!5e0!3m2!1ses!2sni!4v1714962926572!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative">
    <div class="container copyright text-center mt-4">
      <p><span></span> <strong class="px-1 sitename">Colegio Rigoberto López Pérez - MANAGUA 2024</strong></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <?php 
      use app\controllers\viewsController;

      $viewsController = new viewsController();

      $vista = $viewsController->obtenerVistasControlador($url[0]);

     /* if($vista=="login" || $vista=="404"){
        require_once "./app/views/content/".$vista."-view.php";
      }else {
        require_once $vista;
      }*/
      require_once "./app/views/utils/script.php"; 
  ?>
  

</body>

</html>