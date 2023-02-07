
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio interno</title>
    <link rel="icon" href="./src/images/logoCeiich.png">
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="./styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="./styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="./styles/styles.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>   
</head>
<?php 
        require './php/header.php';
        require './php/menu.php';

    session_start();    
    if ($_SESSION['sesionValida'] != 'uno123') {
       session_destroy();
       header("Location: /index.php");
       exit;
    }
?>
<script>
  function mostrar(enla , etik) {
  obj = document.getElementById(etik);
  obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
  }
</script>
<body>
  <main>
    <section class="inv">
      <section class="espacioInformativo">
        <div align="center">
          <img src="./src/images/Banner-espacio-informativo-CEIICH.jpg" width="250" height="115">
        </div>
        <div class="total">
          <p align="right">Por su seguridad, no olvide salir de esta página
            <a href="espacioCerrar.php"><i class="fa fa-window-close" aria-hidden="true"></i></a>
          </p>
        </div>
        <div class="container text-center">
          <div class="jumbotron">
            <div class="row">
              <div class="col-sm-4">
                <a href="espacioInfo.php"><img src="./src/images/menuEI.jpg" class="rounded mx-auto d-block"></a>
              </div>

              <div class="col-sm-4">
                <a href="procedimientos.php"><img src="./src/images/menuProcedimientos.jpg"></a>
              </div>
              <!--<div class="swiper-slide2">
                  <a href="docs/actas/1. CUADRO CONVOCATORIAS DE PROGRAMA1.pdf" target="_blank"><img src="../src/images/menuEI03.jpg"></a>
              </div>-->
              <div class="col-sm-4">
                  <a href="docencia.php"><img src="./src/images/menuDocencia.jpg"></a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </main>

<?php
  require './php/footer.php'
?>
    <script src="./js/libraries/Swiper/swiper.min.js"></script>
    <script src="./js/jquery-latest.js"></script>
    <script src="./js/menuResponsive.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
