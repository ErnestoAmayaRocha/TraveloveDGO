<?php 
session_start();
    if (!empty($_SESSION["usuario"])){
      $nombre = $_SESSION["usuario"];
    } else {
      header("Location: ../index.html");
      exit();
    }

    ?>


<!DOCTYPE html>

<html lang="es">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../cssindex/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../styles_botonarriba.css">
  <link rel="stylesheet" href="../estilos_iconos.css">
  <link rel="stylesheet" href="../cssindex/assets/css/stilos2.css">
     <link rel="stylesheet" href="btnwp.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <title>Travelove</title>
  <link rel="shorcut icon" type="image/x-icon" href="img/logotra.png">
</head>

<body>
  <nav class="navbar navbar-expand-md  fixed-top maine-menu">
    <div class="container">
      <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mx-auto">
        <li class="nav-item active"> <a class="nav-link" href="#">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#about" tabindex="-1" aria-disabled="true">Nosotros</a></li>
          <li class="nav-item"> <a class="nav-link" href="../destinos.html" tabindex="-1" aria-disabled="true">Destinos</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="../destinos.html" tabindex="-1" aria-disabled="true">Proximos destinos</a></li>
          
          <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contacto</a></li>
         
          <li class="nav-item"> <a class="nav-link" tabindex="-1" aria-disabled="true">Bienvenid@ <?php echo $nombre;?> </a>
          
            <ul class="listausuario">
            
                <li class="nav-item"> <a class="nav-link" href="cerrar_sesion.php">Cerrar sesion</a> </li>
                <li class="nav-item"> <a class="nav-link" tabindex="-1" aria-disabled="true">Editar usuario </a>   </li> 


            
            </ul>
          
          
          
          
           </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid fh5co-home-banner">
    <div class="card"> <img class="card-img" src="../img/banner1.jpg" alt="">
      <div class="card-img-overlay">
        <div class="center-text">
          <h2 class="card-title">Travelove Dgo</h2>
          <a href="../destinos.html" class="btn">
            <svg width="201" height="51" viewBox="0 0 201 51">
              <defs>
                <style>
                .cls-1 {
                  fill: none;
                  stroke-width: 1px;
                  stroke: url(#linear-gradient);
                }
              </style>
              <linearGradient id="linear-gradient" x1="140.508" y1="50.5" x2="60.492" y2="0.5" gradientUnits="userSpaceOnUse">
                <stop offset="0" stop-color="#32e0c4"/>
                <stop offset="1" stop-color="#222831"/>
              </linearGradient>
            </defs>
            <rect id="Rounded_Rectangle_1" data-name="Rounded Rectangle 1" class="cls-1" x="0.5" y="0.5" width="200" height="50" rx="25" ry="25"/>
          </svg>
        Descubre</a> </div>
      </div>
    </div>
  </div>
  <div class="container-fluid fh5co-two-img">
    <div class="row">
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="../img/imgpri3.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
      <div class="col-sm-6 pr-0 pl-0">
        <div class="card"> <img class="card-img" src="../img/imgpri2.jpg" alt="">
          <div class="card-img-overlay"> </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fh5co-recent-work">
    <div class="container contact-pop">
      <div class="row">
        <div class="col-md-6  pr-0">
          <div class="card"> <img class="card-img w-100" src="../img/logotra.png" alt="">
            <div class="card-img-overlay"> </div>
          </div>
        </div>
        <div class="col-md-6 pl-0" id="about">
          <div class="content">
            <h3>Sobre nosotros</h3>
            <h4>Misi??n</h4>
            <hr/>
            <p>Crear momentos de felicidad y emoci??n a trav??s de la experiencia de viajar, volver inmortales
              los recuerdos de cada viaje en cada uno de nuestros clientes.</p>
            <h4>Visi??n</h4>
            <hr/>
            <p>Liderar en el mercado estatal a trav??s del reconocimiento de nuestros clientes por rindar 
              las mejores experiencias al cliente,con vajes llenos de magia y diversi??n.</p>
            
          </div>
        </div>
      </div>
  </div>
  
      <div class="container" id="team">
        <div class="row">
          <div class="col-md-12">
            <h2 class="wow bounce">CONOCE AL EQUIPO</h2>
          </div>
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
            <img src="../img/Index/ale.png" class="img-responsive" alt="team img">
            <h4>Relaciones P??blicas</h4>
            <h3>Alejandra D??az</h3>
            <p>Encargada de manejar las??relaciones??entre Travelove Dgo  y sus clientes.</p>
          
          </div>
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
            <img src="../img/Index/raso.png" class="img-responsive" alt="team img">
            <h4>Director General</h4>
            <h3>??NGEL PALACIOS</h3>
            <p>M??xima autoridad en la gesti??n y direcci??n administrativa de Travelove Dgo.</p>
            
          </div>
          <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
            <img src="../img/Index/jes.png" class="img-responsive" alt="team img">
            <h4>Gerente General</h4>
            <h3>Jes??s Rueda</h3>
            <p>Garantiza la eficiencia, productividad y desempe??o general de Travelove Dgo.</p>
            
          </div>
          
          
        </div>
      </div>
  
  <div class="container recent" id="activity">
    <div class="row">
      <h2>Recientes</h2>
      <div class="owl-carousel owl-carousel2 owl-theme">
        <div>
          <div class="card"> <img class="card-img" src="../img/Index/recientes7.png" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="../img/heart.png" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Cero del Cubilete</h5>
                <p class="card-text">Guanajuato</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card"> <img class="card-img" src="../img/Index/recientes4.png" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="../img/heart.png" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Mexiquillo</h5>
                <p class="card-text">Durango</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card"> <img class="card-img" src="../img/Index/recientes5.png" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="../img/heart.png" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">San Francisco</h5>
                <p class="card-text">Nayarit</p>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="card"> <img class="card-img" src="../img/Index/tolu10.png" alt="">
            <div class="card-img-overlay"> <a href="#"><img src="../img/heart.png" class="heart" alt="heart icon"></a>
              <div class="bottom-text">
                <h5 class="card-title">Nevado de Toluca</h5>
                <p class="card-text">Toluca</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
  <div class="container-fluid fh5co-about-me" id="testimonial">
    <div id="my-carousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="card"> <img class="card-img d-block w-100" src="../img/Index/banneropi.png" alt="">
          <div class="card-img-overlay">
            <h2>Opiniones de viajeros Travelove</h2>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="../img/quote-icon.png" alt="">
            <p>Excelente servicio, el trato por parte de los encargados es muy bueno, te hacen pasar experiencias muy agradables.
              Recomendado 100% </p>
          </div>
        </div>
        <div class="carousel-item active">
          <div class="carousel-caption d-md-block"> <img src="../img/quote-icon.png" alt="">
            <p>Excelente servicio y muy linda actitud del staff, sin duda una gran decisi??n el tomar el tour al Carnaval de Mazatl??n (express)</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-caption d-md-block"> <img src="../img/quote-icon.png" alt="">
            <p>El ambiente es inigualable, sus staff amables y sus precios accesibles</p>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" > <img src="../img/Index/opi1.png" alt=""> <span>Marisol Ibarra</span> </li>
        <li class="active" data-target="#my-carousel" data-slide-to="1" aria-current="location"> <img src="../img/Index/opi2.png" alt=""> <span>Karla Morales</span> </li>
        <li data-target="#my-carousel" data-slide-to="2"> <img src="../img/Index/opi3.png" alt=""> <span>Jose Alonso Macias</span> </li>
      </ol>
    </div>
  </div>
  <div class="container-fluid fh5co-recent-work activity">
    <div class="container recent">
      <div class="row">
        <h2>Viajes m??s populares</h2>
        <div class="owl-carousel owl-carousel3 owl-theme">
          <div>
            <div class="card"> <img class="card-img" src="../cssindex/assets/img/mexi13.jpg" alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Mexiquillo</h5>
                  <a href="mexiquillo.html" target="_blank" >Leer m??s <img src="../assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="../cssindex/assets/img/maza11.jpg"  alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Mazatl??n</h5>
                  <a href="mazatlan.html" target="_blank" >Leer m??s <img src="../assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="card"> <img class="card-img" src="../cssindex/assets/img/cubi3.jpg" alt="">
              <div class="card-img-overlay">
                <div class="bottom-text">
                  <h5 class="card-title">Cerro del Cubilete</h5>
                  <a href="cubilete.html" target="_blank" >Leer m??s <img src="../assets/img/double-right.svg" alt=""></a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid fh5co-insta-feed activity">
    <div class="container recent">
      <div class="row mb-5 pb-5">
        <div class="col-lg-6">
          <div class="twit-box">
           <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="img/logotra.png" width="20%" alt="">
              <div class="media-body">
                <h5 class="mb-0 mt-3">Travelove Dgo</h5>
                <p>@TraveloveDgo</p>
              </div>
            </div>
            <p class="text-justify"> ???Viaja no para escapar de la vida, si no para que la vida no se te escape."</p>
            <div class="clearfix"> <a href="https://twitter.com/TraveloveDgo" target="_blank"  class="btn btn-primary mt-2 float-right">Seguir</a> </div>
          </div>
          
        </div>
        <div class="col-lg-6 feed-caro">
          <h2>Instagram</h2>
          <div class="owl-carousel owl-carousel4 owl-theme">
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/prueba1.jpg" alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/tw2.png"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/recientes1.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/recientes3.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/tolu10.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/insta1.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/insta2.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
            <div>
              <div class="card"> <img class="card-img" src="../img/Index/insta3.jpg"  alt="">
                <div class="card-img-overlay"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-center d-block">Encuentranos en nuestras redes sociales</h2>
      <div class="row social-links">
        <ul class="nav mx-auto">
          <li class="nav-item"> <a class="nav-link" href="https://www.facebook.com/TraveloveDgo/"><img src="../cssindex/assets/img/facebook.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://twitter.com/TraveloveDgo"><img src="../cssindex/assets/img/twitter.png" alt=""></a> </li>
          <li class="nav-item"> <a class="nav-link" href="https://www.instagram.com/travelovedgo/?hl=es-la"><img src="../img/Index/intsalogo.png" width="25"   alt=""></a> </li></ul>
      </div>
      
    </div>
  </div>


  <footer class="container-fluid p-0 pr-0">
    <div class="row mr-0 ml-0">
      <div class="col-md-6 pr-0 pl-0 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.0746857796157!2d-104.67147168837784!3d24.028431326660254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869bc82347b8ba4b%3A0xc45f040fbe8df428!2sCalle%20Gral.%20Esteban%20Coronado%20420%2C%20Zona%20Centro%2C%2034000%20Durango%2C%20Dgo.!5e0!3m2!1ses!2smx!4v1591217679963!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-md-6 content-us">
        <div class="contact-form" id="contact">
        <form action="envdud.php" method="POST">
          <h3 class="text-uppercase">Contactanos</h3>
          <input type="text" class="form-control" placeholder="Tu nombre" name="nombre"  required>
          <input type="text" class="form-control" placeholder="Tu email" name="correo"  required>
          <textarea class="form-control" name="mensaje" placeholder="Tu mensaje" required></textarea>
          <button type="submit">Enviar</button>
        </form>
        </div>
      </div>
    </div>
     
    <div class="copy pt-4 pb-4">
      <p>&copy; Copyright (c) 2020 </a>  &nbsp;  |  &nbsp; Travelove Dgo &nbsp; | &nbsp;  Todos los derechos reservados</p>
    </div>
    
  </footer>
  
  
  
  
  
  <script src="../cssindex/assets/js/jquery-3.3.1.slim.min.js"></script>
  <script src="../cssindex/assets/js/popper.min.js" ></script> 
  <script src="../cssindex/assets/js/bootstrap.min.js"></script> 
  <script src="../js/jquery.js"></script>
  
 
  <script src="../cssindex/assets/js/main.js"></script>
  <div class="cm-up" id="cm-up">
    <input type="button" class="cm-text-up" value="Subir al inicio">
    <a href="#" class="btn-arriba"><span class="cm-icon">
      <i data-icon="a" ></i>
      </span></a>
      <script src="../js_button/jquery-3.5.1.min.js"></script>
      <script src="../js_button/btn-up.js"></script>
      
  </div>
  <script src="../cssindex/assets/js/owl.carousel.min.js"></script>
 
  

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+526181413614&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20los%20viajes." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

</body>
</html>