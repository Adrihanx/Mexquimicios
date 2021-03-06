<?php
  require 'vendor/autoload.php';
  include("vendor/phpauth/Config.php");
  include("vendor/phpauth/Auth.php");
  $dbh = new PDO("mysql:host=localhost;dbname=phpauth", "root", "");
  $config = new PHPAuth\Config($dbh);
  $auth   = new PHPAuth\Auth($dbh, $config);

  if (!$auth->isLogged()) {
      header('HTTP/1.0 403 Forbidden');
      echo "Forbidden";
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Mexiquimicos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/dynatable/vendor/jquery.dynatable.css">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script src="vendor/dynatable/vendor/jquery.dynatable.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOmbbkCuGv-LdmKR2UjLW8B_eR6djVEuo&callback=initMap" async defer></script>
  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Top Bar
  ============================-->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contacto@mexquimicos.com</a>
        <i class="fa fa-phone"></i> +1 52 442 42 19 88 1
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        <a href="#" class="link">Entrar</a>
        <a href="#" class="link">Registrarse</a>
      </div>
    </div>
  </section>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">Mex<span>quimicos</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Inicio</a></li>
          <li><a href="#about">Acerca de Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#portfolio">Historia</a></li>
          <li><a href="#team">Nosotros</a></li>
          <li><a href="#contact">Contacto</a></li>
          <li class="menu-has-children"><a href="">Acciones</a>
            <ul>
              <li><a href="#">Control de Productos</a></li>
              <li><a href="#">Control de Materiales</a></li>
              <li><a href="ventas.php">Venta de Productos y Materiales</a></li>
              <li><a href="#">Creacion de Reportes de Existencia</a></li>
              <li><a href="#">Creacion de Reportes de Ventas</a></li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>"La química debe convertirse en la astronomía del mundo molecular."</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Entrar</a>
        <a href="#portfolio" class="btn-projects scrollto">Nuestros Proyectos</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel">
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section>
  <!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>Acerca de Nosotros</h2>
            <h3>En Mexquimicos vemos necesario y fundamental la incorporación de variables e indicadores en nuestros proyectos, que tengan armonía con las poblaciones y organizaciones sociales de México. Frente a esta tendencia es importante que en el sector privado busquemos redimensionar el concepto de éxito, fomentando para ello prácticas socialmente responsables.</h3>

            <ul>
              <li>
                <h4>Visión:</h4>Afianzar nuestro desarrollo y crecimiento junto con colaboradores, clientes y proveedores.</li>
              <li>
                <h4>Misión:</h4>Ofrecer productos de calidad a los mejores precios, siendo éticamente responsables con las necesidades de salud de nuestros clientes, su bienestar y economía personal, dando un servicio con sentido social, respeto al entorno y al ser humano,
                para que así trascienda nuestra empresa.</li>
            </ul>
          </div>
        </div>

      </div>
    </section>
    <!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Servicios</h2>
          <p><i>"Somos tu farmacia de siempre".</i></p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Atención a Médicos</a></h4>
              <p class="description">Si eres médico tu receta es lo más importante y te ofrecemos un servicio especializado: te informamos de las últimas novedades de los laboratorios, respetamos las recetas que nos presentes tú o tus pacientes y las hacemos con exactitud.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight">
              <div class="icon"><i class="fa fa-picture-o"></i></div>
              <h4 class="title"><a href="">Autoservicio</a></h4>
              <p class="description">Encuentra todo lo que necesitas en el autoservicio mejor surtido en México. Más de 50 profesionales están a tu disposición para servirte con consejo experto, rapidez y buenos precios.</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Cotizaciones</a></h4>
              <p class="description">Dinos que necesitas y te enviaremos la cotización. Podrás recogerlo en nuestra tienda o si quieres te lo mandamos a donde estés. Aceptamos tarjetas de crédito, débito, VISA y Mastercard. Puedes pagar con Puntos Bancomer. Para cotización
                de Productos llena esta forma:</p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Envíos</a></h4>
              <p class="description">Podemos mandar todos nuestros productos incluyendo medicamentos, instrumental, químicos y productos a granel a cualquier parte de la República Mexicana o del mundo, respetando los procedimientos aduanales de cada país. Para pedir cotización
                de Envíos por favor llena el formulario al final de ésta página.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-cubes"></i></div>
              <h4 class="title"><a href="">Formulación</a></h4>
              <p class="description">Somos la única Farmacia en el mundo que recibe tu fórmula magistral, la evalúa y te entrega el producto el mismo día. Usamos los mejores insumos para garantizar la calidad de nuestras fórmulas. Porque tú y tu salud son únicos.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-line-chart"></i></div>
              <h4 class="title"><a href="">Mayoreo</a></h4>
              <p class="description">Damos servicio a laboratorios químicos y farmacéuticos, farmacias, centros médicos, clínicas y hospitales, así como a médicos y químicos con cédula. Si necesitas productos al mayoreo ponte en contacto con nosotros, llena esta forma:</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- #services -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Clientes</h2>
          <p>En Farmacia París desarrollamos el talento de nuestros colaboradores ofreciéndo una capacitación integral. Creemos que su desempeño está estrechamente ligado a su crecimiento personal y profesional. Consideramos el trabajo como una vía de realización
            del ser humano mediante el cual es posible trascender.</p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section>
    <!-- #clients -->

    <!--==========================
      Our Portfolio Section
    ============================-->
    <section id="portfolio" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Historia</h2>
          <p>Somos una empresa incluyente y socialmente responsable que se distingue por el esfuerzo y compromiso de todos los que aquí laboramos. El servicio al cliente, la salud, la seguridad, así como el cuidado del medio ambiente son nuestra prioridad
            y responsabilidad.</p>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/1.jpg" class="portfolio-popup">
                <img src="img/portfolio/1.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">1557:Nuestro edificio se erige como noviciado para los monjes Agustinos</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/2.jpg" class="portfolio-popup">
                <img src="img/portfolio/2.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">1944: Fundamos Mexquimicos en el Centro Histórico de la Ciudad de México.</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/3.jpg" class="portfolio-popup">
                <img src="img/portfolio/3.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">1950: Don Ignacio Merino Martínez reconstruye Mexiquimicos de inmediato después de ser cubierta por las aguas. </h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/4.jpg" class="portfolio-popup">
                <img src="img/portfolio/4.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">
                  1964: Mexquimicos se convierte en el primer mostrador de América Latina.</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/5.jpg" class="portfolio-popup">
                <img src="img/portfolio/5.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">1994: Ampliámos La París al edificio anexo e inauguramos la Botica.</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/6.jpg" class="portfolio-popup">
                <img src="img/portfolio/6.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">2010: Inauguramos el anexo en República de El Salvador 77.</h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/7.jpg" class="portfolio-popup">
                <img src="img/portfolio/7.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">2011: Farmacia París sigue siendo un negocio familiar conducido por la tercera generación. </h2></div>
                </div>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/8.jpg" class="portfolio-popup">
                <img src="img/portfolio/8.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">2013: Ampliamos nuestros canales de comunicación en Redes Sociales y en Sucursal.</h2></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="portfolio-item wow fadeInUp">
              <a href="img/portfolio/9.jpg" class="portfolio-popup">
                <img src="img/portfolio/9.jpg" alt="">
                <div class="portfolio-overlay">
                  <div class="portfolio-info"><h2 class="wow fadeInUp">2014: Cumplimos 70 años sirviendote y ofreciéndote el mejor surtido,</h2></div>
                </div>
              </a>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- #portfolio -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>A108 Adam Street, NY 535022, USA</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
