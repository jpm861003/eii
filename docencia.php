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
<script src="./js/main.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio interno</title>
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="../styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="../styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="./styles/styles.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>
  <div class="container-1">
    <div class="contenedor">
      <div class="row align-items-center">
        <div class="col-1">
         <p>|</p>
        </div>
        <div class="col-sm-4">
          <h1>Docencia</h1>
        </div>
      </div>
    </div>
  </div>
  <main>
    <section class="inv">
        <div class="total">
          <p align="right">Por su seguridad, no olvide salir de esta página
            <a href="espacioCerrar.php"><i class="fa fa-window-close" aria-hidden="true"></i></a>
          </p>
        </div>
        <div class="total">
          <div class="container text-center">
            <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
              <thead>
                <tr>
                  <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                  <th>Ver</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd">
                  <td>Convenios y Bases de Colaboración de Docencia y Educación Continua</td>
                  <td><a href="http://132.248.246.131/eii/docsInfo/form/Convenios y Bases de Colaboracion de Docencia y Educacion Continua.docx" target="_blank">Ver</a></td>
                </tr>
                <tr class="even">
                  <td>La Educación continua en el CEIICH</td>
                  <td><a href="http://132.248.246.131/eii/docsInfo/form/La Educacion continua en el CEIICH.docx" target="_blank">Ver</a></td>
                </tr>
                <tr class="odd">
                  <td>Proceso para inicio y término de servicio social</td>
                  <td><a href="http://132.248.246.131/eii/docsInfo/form/Proceso para inicio y termino de servicio social.docx" target="_blank">Ver</a></td>
                </tr>               
              </tbody>
            </table>                        
          </div>
        </div>
    </section>
  </main>

<?php
  require './php/footer.php'
?>
  <script src="./js/libraries/Swiper/swiper.min.js"></script>
    <script src="./js/jquery-latest.js"></script>
    <script src="./js/menuResponsive.js"></script> 
 </body>
