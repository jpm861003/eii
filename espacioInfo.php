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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espacio Informativo</title>
    <meta name="description" content="Pagina principal del Centro de Investigaciones Interdiciplinarias en Ciencias y Humanidades">
        <!-- Estilos de FontAwesome -->
        <link rel="stylesheet" href="./styles/libraries/fontawesome-5.15.1/css/all.min.css">
         <!-- Swiper IO -->
        <link rel="stylesheet" href="./styles/libraries/Swiper/swiper.min.css">
        <!-- Estilos del sitio -->
        <link rel="stylesheet" href="./styles/styles.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

</head>
<script>
function mostrar(enla , etik) {
  obj = document.getElementById(etik);
  obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
}
</script>
<script src="./js/buscador.js"></script>

<body>
  <div class="col-md-10 mx-auto col-lg-12 xs-auto">
  <div class="container-1">
    <div class="contenedor">
      <div class="row align-items-center">
        <div class="col-1">
         <p>|</p>
        </div>
        <div class="col-sm-4">
          <h1>Espacio informativo
          </h1>
        </div>
      </div>
    </div>
  </div>
  <main>
    <section class="inv">
      <div>
        <a href="javascript:subir();"><i class="fas fa-angle-up up" alt="Ir arriba"></i></a>
      </div>
      <div class="total">
        <p align="right">Por su seguridad, no olvide salir de esta página
          <a href="espacioCerrar.php"><i class="fa fa-window-close" aria-hidden="true"></i></a>
        </p>
      </div>
      <div>

      <div class="total">
        <div class="container text-center">
            <ul class="nav nav-tabs" id="espacioTab" role="tablist">
              <li class="nav-item" role="presentacion">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Consejo Interno</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="informes-tab" data-bs-toggle="tab" data-bs-target="#informes-tab-pane" type="button" role="tab" aria-controls="informes-tab-pane" aria-selected="false">Informes y programas <br>de actividades</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="presupuesto-tab" data-bs-toggle="tab" data-bs-target="#presupuesto-tab-pane" type="button" role="tab" aria-controls="presupuesto-tab-pane" aria-selected="false">Ejercicio presupuestal</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="oficiales-tab" data-bs-toggle="tab" data-bs-target="#oficiales-tab-pane" type="button" role="tab" aria-controls="oficiales-tab-pane" aria-selected="false">Documentos oficiales</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="audiovisual-tab" data-bs-toggle="tab" data-bs-target="#audiovisual-tab-pane" type="button" role="tab" aria-controls="audiovisual-tab-pane" aria-selected="false">Producción audiovisual</button>
              </li>
               <li class="nav-item" role="presentacion">
                <button class="nav-link" id="editorial-tab" data-bs-toggle="tab" data-bs-target="#editorial-tab-pane" type="button" role="tab" aria-controls="editorial-tab-pane" aria-selected="false">Plan editorial</button>
              </li>
            </ul> 

            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
               
                <table id="" class="display">                
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody id="myTable">
                    <tr>
                      <td>Calendario de sesiones, 2022</td>
                      <td>Calendario</td>
                      <td>2022-01-07</td>
                      <td><a href="http://132.248.246.131/eii/docsInfo/CalendarioDeSesionesCI2022.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="odd">
                      <td data-search="Acta del 29 de marzo">Acta del 29 de marzo</td>
                      <td data-search="Ordinaria">Ordinaria</td>
                      <td data-order="20160329">2016-03-29</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/9. 29 de marzo.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td data-search="Acta del 12 de abril">Acta del 12 de abril</td>
                      <td data-search="Ordinaria">Ordinaria</td>
                      <td data-order="20160412">2016-04-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/10. 12 de abril.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de abril</td>
                      <td class="sorting_1">Complementaria</td>
                      <td>2016-04-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/11. 12 de abril complementaria.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 21 de abril</td>
                      <td>Ordinaria</td>
                      <td>2016-04-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/12. 21 de abril.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de abril</td>
                      <td>Ordinaria</td>
                      <td>2016-04-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. 26 de abril.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/14. 2 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de mayo, becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/15. 2 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de mayo, cambio de adscripción</td>
                      <td>Complementaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/16. 2 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17. 11 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 24 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/18. 24 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de mayo</td>
                      <td>Complementaria</td>
                      <td>2016-05-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/19. 24 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de junio</td>
                      <td>Ordinaria</td>
                      <td>2016-06-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/20. 7 de junio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de junio</td>
                      <td>Ordinaria</td>
                      <td>2016-06-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/21. 22 de junio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de junio</td>
                      <td>Complementaria</td>
                      <td>2016-06-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/22. 22 de junio complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de julio</td>
                      <td>Ordinaria</td>
                      <td>2016-07-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/23. 27 de julio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de julio</td>
                      <td>Complementaria</td>
                      <td>2016-07-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/24. 27 de julio complementria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2016-08-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/25. 10 de agosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2016-08-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/26. 23 de agosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2016-09-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/27. 6 de septiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2016-09-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/28. 21 de septiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2016-10-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/29. 5 de octubre.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 19 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/30. 19 de octubre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de octubre, solicitud becas</td>
                      <td>Complementaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/31. 19 de octubre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de octubre, informes anuales</td>
                      <td>Complementaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/32. 19 de octubre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/33. 7 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/34. 17 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de noviembre</td>
                      <td>Complementaria</td>
                      <td>2016-11-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/35. 17 de noviembre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/36. 30 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2016-12-14</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/37. 14 de diciembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de diciembre</td>
                      <td>Complementaria</td>
                      <td>2016-12-14</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/38. 14 de diciembre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Actas del 16, 17, 18 y 25 de enero</td>
                      <td>Ordinaria</td>
                      <td>2017-01-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta 16, 17, 18 y 25 de enero de  2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 18 de enero</td>
                      <td>Ordinaria</td>
                      <td>2017-01-18</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta 18 de enero de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 18 de enero</td>
                      <td>Complementaria</td>
                      <td>2017-01-18</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Complementaria 18 de enero de  2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 01 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2017-02-01</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/4. Acta 1 de febrero de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 15 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2017-02-15</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/5. Acta 15 de febrero de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 01 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2017-03-01</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/6. Acta  1 de marzo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 15 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2017-03-15</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/7. Acta 15 de marzo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 29 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2017-03-29</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/8. Acta 29 de marzo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de abril</td>
                      <td>Ordinaria</td>
                      <td>2017-04-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta  5 de abril de 2017 Pos  doctorado.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de abril</td>
                      <td>Ordinaria</td>
                      <td>2017-04-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/9.  Acta 19 de abril de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2017-05-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/12. Acta 3 de mayo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2017-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. Acta 11 de mayo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2017-05-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/14. Acta 31 de mayo de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de junio</td>
                      <td>Ordinaria</td>
                      <td>2017-06-14</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/15. Acta 14 de junio de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de junio</td>
                      <td>Ordinaria</td>
                      <td>2017-06-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/16. Acta  28 de junio de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de julio</td>
                      <td>Complementaria</td>
                      <td>2017-07-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17. Acta del 26 de julio de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2017-08-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/18. Acta 2 de agosto de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2017-08-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/19. Acta del 16 de agosto de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2017-08-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/20. Acta del 30 de agosto de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2017-09-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/21. Acta 13 de septiembre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2017-10-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/22. Acta 3 de octubre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de octubre</td>
                      <td>Complementaria</td>
                      <td>2017-10-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/22. Acta 3 de octubre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2017-10-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 11 de octubre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2017-10-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 25 de octubre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2017-11-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 8 de noviembre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2017-11-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 22 de noviembre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2017-12-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 5  de diciembre de 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero</td>
                      <td>Ordinaria</td>
                      <td>2018-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta 10 de enero de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero, informes SIAH 2017</td>
                      <td>Complementaria</td>
                      <td>2018-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta 10 de enero de 2018(Informes SIAH 2017).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero, Reconocimiento Sor Juana</td>
                      <td>Complementaria</td>
                      <td>2018-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta 10 de enero de 2018  (Reconocimiento Sor Juana).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero, renovaciones posdoctorados</td>
                      <td>Complementaria</td>
                      <td>2018-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Acta de 10 de enero de 2018  (Renovaciones Pos Doc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de enero</td>
                      <td>Ordinaria</td>
                      <td>2018-01-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/5.Acta del 24 de enero de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de enero</td>
                      <td>Complementaria</td>
                      <td>2018-01-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/6. Acta del 24 de enero de 2018  complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de enero</td>
                      <td>Extraordinaria</td>
                      <td>2018-01-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/7.Acta del 31 de enero de 2018 (acta extraordinaria).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2018-02-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/8. Acta de 7 de febrero de  2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2018-02-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 21 de febrero de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2018-03-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 9 de marzo de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de marzo, programa de becas</td>
                      <td>Complementaria</td>
                      <td>2018-03-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 9 de marzo de 2018 (Programa de becas).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2018-03-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 21 de marzo de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de abril, becas posdoctorales</td>
                      <td>Extraordinaria</td>
                      <td>2018-04-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta del 2 de abril de 2018 Pos Doc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de abril, informes anuales posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2018-04-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. Acta del 2 d abril de 2018 (Informes Anuales Pos-doc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de abril</td>
                      <td>Ordinaria</td>
                      <td>2018-04-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. Acta del 11 de abril de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de abril</td>
                      <td>Ordinaria</td>
                      <td>2018-04-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/15. acta del 25 de abril de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2018-05-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/16. Acta del 9 de mayo de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2018-05-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17. Acta del 23 de mayo de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de junio</td>
                      <td>Ordinaria</td>
                      <td>2018-06-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/18. Acta del 6 de junio de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de junio</td>
                      <td>Ordinaria</td>
                      <td>2018-06-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/19. Acta del 20 de junio de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de julio</td>
                      <td>Ordinaria</td>
                      <td>2018-07-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/21. Acta de 25 de julio de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de julio, renovaciones posdoctorados</td>
                      <td>Complementaria</td>
                      <td>2018-07-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/20. Acta de 25 de julio de 2018 (Renovaciones Pos-Doc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2018-08-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/22. Acta de 8 de agosto de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2018-08-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/23. Acta de 22 de agosto de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2018-09-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/24. Acta de 5 de septiembre de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de septiembre, becas posdoctorales</td>
                      <td>Extraordinaria</td>
                      <td>2018-09-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/25. Acta de 24 de septiembre de  2018 (Pos Doc Nuevos 2018-II).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de septiembre, informes posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2018-09-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/26. Acta de 24 de septiembre de 2018 (Informes anuales y  semestrales  posdoc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2018-09-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/27. Acta de 26 de septiembre de  2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2018-10-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/28. Acta de 10 de octubre de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2018-10-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/29. Acta de 24 de octubre de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2018-11-14</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo//30. Acta del 14 de noviembre de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2018-11-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/31. Acta del 28 de noviembre de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de enero</td>
                      <td>Ordinaria</td>
                      <td>2019-01-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta de 9 de enero de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de enero, SIAH 2018 y Plan de actividades 2019</td>
                      <td>Complementaria</td>
                      <td>2019-01-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta de 9 de enero de 2019 (Informes 2018 Y Plan de actividades  2019).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de enero, Reconocimiento Sor Juana</td>
                      <td>Complementaria</td>
                      <td>2019-01-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Acta de 9 de enero de 2019 (Reconocimiento Sor Juana Ines).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de enero, renovaciones posdoctorados</td>
                      <td>Complementaria</td>
                      <td>2019-01-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/4. Acta de 9 de enero de 2019 (Renovaciones Pos Doc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de enero</td>
                      <td>Ordinaria</td>
                      <td>2019-01-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/5. Acta de 23 de enero de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de enero, estímulos</td>
                      <td>Complementaria</td>
                      <td>2019-01-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/6. Acta de 23 de enero de 2019 (Estimulos).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2019-02-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 6 de febrero de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2019-02-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/9. Acta de 20 de febrero de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2019-03-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 6 de marzo de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2019-03-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 27 de marzo de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de abril</td>
                      <td>Ordinaria</td>
                      <td>2019-04-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/12. Acta de 10 de abril de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de abril, informes anuales posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2019-04-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/12.3 Acta de 10 de abril de 2019 (Informes anuales posdoc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de abril, becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2019-04-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/12.2 Acta de 10 de abril de 2019 (Posdoc nuevos).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2019-05-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. Acta de 8 de mayo de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2019-05-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 22 de mayo de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de junio</td>
                      <td>Ordinaria</td>
                      <td>2019-06-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/15. Acta de 5 de junio de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de junio</td>
                      <td>Ordinaria</td>
                      <td>2019-06-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/16. Acta de 19 de junio de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de julio</td>
                      <td>Ordinaria</td>
                      <td>2019-07-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17. Acta de 24 de julio de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de julio, convocatoria Nettie Lee B.</td>
                      <td>Complementaria</td>
                      <td>2019-07-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17.1 Acta de 24 de julio de 2019 (Convocatoria Nettie Lee B.).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de julio, renovaciones becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2019-07-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17.2 Acta de 24 de julio de 2019 (Renovaciones Posdoc ).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2019-08-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/18. Acta de 7 de agosto de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2019-08-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/19. Acta de 21 de agosto de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2019-09-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/20. Acta de 4 de septiembre de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 18 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2019-09-18</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 18 de septiembre de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de septiembre, becas posdoctorales</td>
                      <td>Extraordinaria</td>
                      <td>2019-09-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/25. Acta de 30 de septiembre de 2019 (Posdoc Nuevos).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2019-10-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 2 de octubre de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2019-10-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta de 16 de octubre de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2019-11-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/30. Acta de 27 de noviembre 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2019-12-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/31. Acta de 4 de diciembre de 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de enero</td>
                      <td>Ordinaria</td>
                      <td>2020-01-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta de 8 de enero de 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de enero, Reconocimiento Sor Juana</td>
                      <td>Complementaria</td>
                      <td>2020-01-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta de 8 de enero de 2020 (Sor Juana Ines de la Cruz).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de enero, informes SIAH 2019 y Plan de actividades 2020</td>
                      <td>Complementaria</td>
                      <td>2020-01-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Acta de 8 de enero de 2020 (Informes SIAH 2019).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de enero, renovaciones posdoctorados</td>
                      <td>Complementaria</td>
                      <td>2020-01-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/4. Acta de 8 de enero de 2020 (Renovaciones Posdoc).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de enero</td>
                      <td>Ordinaria</td>
                      <td>2020-01-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/5. Acta de 22 de enero de 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2020-02-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta5febrero2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de febrero, estímulos por asistencia</td>
                      <td>Complementaria</td>
                      <td>2020-02-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta5febrero2020(Estimulos).pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2020-02-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta19febrero2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2020-03-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta4demarzo2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 18 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2020-03-18</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta18demarzo2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 29 de abril</td>
                      <td>Ordinaria</td>
                      <td>2020-04-29</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta29deabril2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de mayo, solicitud de becas de posdoctorado</td>
                      <td>Extraordinaria</td>
                      <td>2020-05-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta20demayo2020_solicitudBecasPosdoc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2020-05-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta27demayo2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de mayo, informes becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2020-05-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta27demayo2020_informesBPosdoc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de junio, elecciones CEIICH</td>
                      <td>Extraordinaria</td>
                      <td>2020-06-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3dejunio_eleccionesCEIICH.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de junio, cancelación de contratación</td>
                      <td>Complementaria</td>
                      <td>2020-06-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3dejunio_complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de junio</td>
                      <td>Ordinaria</td>
                      <td>2020-06-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta17dejunio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de junio, renovaciones de becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2020-06-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta17dejunio_renovacionesbecasposdoctorales.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de junio, renovaciones posdoctorales PUEAA</td>
                      <td>Complementaria</td>
                      <td>2020-06-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta17dejunio_renovacionesposdoctoralesPUEAA.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2020-08-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta5deagosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2020-08-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta19deagosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2020-09-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta2deseptiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2020-09-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta21deseptiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2020-09-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actacomplementaria23deseptiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2020-10-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta7deoctubre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de octubre</td>
                      <td>Complementaria</td>
                      <td>2020-10-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actacomplementaria7deoctubre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2020-10-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta21deoctubre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2020-11-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta4denoviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de noviembre</td>
                      <td>Complementaria</td>
                      <td>2020-11-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actacomplementaria4denoviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 18 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2020-11-18</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta18denoviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2020-12-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta2dediciembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2020-12-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta9dediciembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta 02 y 09 de diciembre (2020) y 06 de enero (2021)</td>
                      <td>Ordinaria</td>
                      <td>2020-12-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actadic2020ene2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de enero</td>
                      <td>Ordinaria</td>
                      <td>2021-01-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta6deenero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de enero</td>
                      <td>Complementaria</td>
                      <td>2021-01-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actacomplementaria6deenero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de enero</td>
                      <td>Ordinaria</td>
                      <td>2021-01-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta11deenero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de enero</td>
                      <td>Ordinaria</td>
                      <td>2021-01-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta13enero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de enero</td>
                      <td>Complementaria</td>
                      <td>2021-01-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Actacomplementaria13enero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2021-02-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3defebrero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de febrero, estímulos CF</td>
                      <td>Complementaria</td>
                      <td>2021-02-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3defebrero_EstimulosCF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de febrero, becas posdoctorales</td>
                      <td>Extraordinaria</td>
                      <td>2021-02-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta10defebrero_BecasPosdoctorales.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de febrero, cambio del calendario C.I.</td>
                      <td>Extraordinaria</td>
                      <td>2021-02-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta10defebrero_CambioCalendarioCI.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2021-02-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta17defebrero.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2021-03-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3Marzo2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de marzo</td>
                      <td>Complementaria</td>
                      <td>2021-03-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta3Marzo2021Complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2021-03-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta17Marzo2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2021-03-24</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta24Marzo2021_InformesPosdoc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de abril</td>
                      <td>Ordinaria</td>
                      <td>2021-04-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta7Abril2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de abril</td>
                      <td>Ordinaria</td>
                      <td>2021-04-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta21Abril2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2021-05-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta5Mayo2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de mayo, elecciones C.I.</td>
                      <td>Complementaria</td>
                      <td>2021-05-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta5Mayo2021_EleccionesCI.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2021-05-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta19mayo2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de junio</td>
                      <td>Ordinaria</td>
                      <td>2021-06-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta2junio2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de junio</td>
                      <td>Ordinaria</td>
                      <td>2021-06-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta16junio2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de junio, renovación de becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2021-06-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta16junio2021RenovacionBecaPosdoc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de junio</td>
                      <td>Ordinaria</td>
                      <td>2021-06-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta30junio2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de junio, nuevas becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2021-06-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta30junio2021NuevasBecasPosdoc.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de julio</td>
                      <td>Ordinaria</td>
                      <td>2021-07-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta28julio2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 04 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2021-08-04</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta4agosto2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2021-08-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta11agosto2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2021-08-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta25agosto2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 25 de agosto</td>
                      <td>Complementaria</td>
                      <td>2021-08-25</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta25agosto2021_LicenciasComisiones.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2021-09-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta8septiembre2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2021-09-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta22septiembre2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2021-10-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta6Octubre2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de octubre</td>
                      <td>Complementaria</td>
                      <td>2021-10-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta6octubre2021_LicenciasComisiones.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de octubre, resolutivo dictaminadora</td>
                      <td>Extraordinaria</td>
                      <td>2021-10-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta11Octubre2021_ResolutivoDictaminadora.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2021-10-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta20Octubre2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de octubre</td>
                      <td>Complementaria</td>
                      <td>2021-10-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta20Octubre2021_LicenciaComisiones.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 y 15 de diciembre 2021 y 12 de enero 2022, Informes SIAH</td>
                      <td>Ordinaria</td>
                      <td>2021-12-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta12enero2022_Informes.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero, reconocimiento Sor Juana</td>
                      <td>Extraordinaria</td>
                      <td>2022-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta10enero2022SorJuana.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de enero, elección de representantes</td>
                      <td>Extraordinaria</td>
                      <td>2022-01-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta10enero2022.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de enero, beca posdoctoral</td>
                      <td>Ordinaria</td>
                      <td>2022-01-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta12enero2022.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de enero, licencia académica</td>
                      <td>Ordinaria</td>
                      <td>2022-01-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta12enero2022Ord.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de enero</td>
                      <td>Ordinaria</td>
                      <td>2022-01-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/6. Ordinaria. 26 Enero_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de febrero, solicitud de becas</td>
                      <td>Extraordinaria</td>
                      <td>2022-02-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/7. Extraordinaria. 2 Febrero. Solicitud de Becas Posdoctorales_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2022-02-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/8. Ordinaria. 9 Febrero_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de febrero</td>
                      <td>Ordinaria</td>
                      <td>2022-02-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/9. Ordinaria. 23 Febrero_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de febrero, presupuesto</td>
                      <td>Complementaria</td>
                      <td>2022-02-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/10. Complementaria. 23 Febrero_Presupuesto 2022_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de febrero, estímulos</td>
                      <td>Complementaria</td>
                      <td>2022-02-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/11_Complementaria23FebreroEstimulos_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2022-03-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/13. Ordinaria. 10 Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de marzo, comisiones académicas</td>
                      <td>Complementaria</td>
                      <td>2022-03-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/14. Complementaria. 10 Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de marzo, informe de labores</td>
                      <td>Complementaria</td>
                      <td>2022-03-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/15. Complementaria. 10 Marzo_Informe SIAH_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de marzo, Informes becas posdoctorales</td>
                      <td>Extraordinaria</td>
                      <td>2022-03-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/16_Extraordinaria_16Marzo_InformesBP_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2022-03-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17_Ordinaria_23Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de marzo</td>
                      <td>Ordinaria</td>
                      <td>2022-03-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/17_Ordinaria_23Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de marzo, comisión académica</td>
                      <td>Complementaria</td>
                      <td>2022-03-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/18_Complementaria_23Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de marzo, Comisión Dictaminadora</td>
                      <td>Complementaria</td>
                      <td>2022-03-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/19_Complementaria_23Marzo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 06 de abril</td>
                      <td>Ordinaria</td>
                      <td>2022-04-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/20_Ordinaria_6Abril_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de abril</td>
                      <td>Ordinaria</td>
                      <td>2022-04-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/21_Ordinaria_27Abril_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de abril, comisión académica</td>
                      <td>Complementaria</td>
                      <td>2022-04-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/22_Complementaria_27Abril_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de mayo</td>
                      <td>Extraordinaria</td>
                      <td>2022-05-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/23_Extraordinaria_2Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 02 de mayo, beca posdoctoral</td>
                      <td>Extraordinaria</td>
                      <td>2022-05-02</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/24_Extraordinaria_2Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2022-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/25_Ordinaria_11Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo, complementaria extenso</td>
                      <td>Complementaria</td>
                      <td>2022-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/26_ComplementariaExtenso_11Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo, Comisión Dictaminadora</td>
                      <td>Complementaria</td>
                      <td>2022-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/27_Complementaria_11Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2022-05-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/28_Ordinaria_26Mayo_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de junio</td>
                      <td>Ordinaria</td>
                      <td>2022-06-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/29_Ordinaria_8Junio_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 08 de junio, licencias académicas</td>
                      <td>Complementaria</td>
                      <td>2022-06-08</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/30_Complementaria_8Junio_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de junio</td>
                      <td>Ordinaria</td>
                      <td>2022-06-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/31_Ordinaria_22Junio_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de junio</td>
                      <td>Extraordinaria</td>
                      <td>2022-06-27</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/32_Extraordinaria_27Junio_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2022-08-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/33_Ordinaria_3Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de agosto, licencia y comisiones académicas</td>
                      <td>Complementaria</td>
                      <td>2022-08-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/34_Complementaria_3Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de agosto, solicitudes de apoyo</td>
                      <td>Complementaria</td>
                      <td>2022-08-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/35_Complementaria_3Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 03 de agosto, beca posdoctoral</td>
                      <td>Ordinaria</td>
                      <td>2022-08-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/36_BecasPosdoc_3Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2022-08-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/37_Ordinaria_17Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de agosto, licencia académica</td>
                      <td>Complementaria</td>
                      <td>2022-08-17</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/38_Complementaria_17Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2022-08-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/39. Ordinaria. 31 Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de agosto, licencia y comisiones</td>
                      <td>Complementaria</td>
                      <td>2022-08-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/40. Complementaria. 31 Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 31 de agosto, Comisión evaluadora PRIDE</td>
                      <td>Complementaria</td>
                      <td>2022-08-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/41. Complementaria. 31 Agosto_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2022-09-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/42. Ordinaria. 13 Septiembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de septiembre</td>
                      <td>Complementaria</td>
                      <td>2022-09-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/43. Complementaria. 13 Septiembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de septiembre</td>
                      <td>Extraordinaria</td>
                      <td>2022-09-22</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/44. Extraordinaria. 22 Septiembre. Informes BP_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2022-09-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/45. Ordinaria. 28 Septiembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de septiembre, recontratación</td>
                      <td>Complementaria</td>
                      <td>2022-09-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/46. Complementaria. 28 Septiembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 28 de septiembre, licencias académicas</td>
                      <td>Complementaria</td>
                      <td>2022-09-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/47. Complementaria. 28 Septiembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2022-10-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/48. Ordinaria. 12 Octubre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de octubre, promoción Dr. Juárez</td>
                      <td>Complementaria</td>
                      <td>2022-10-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/49_ComplementariaPromocionDrJulioJuarez_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de octubre, promoción Dra. Maass</td>
                      <td>Complementaria</td>
                      <td>2022-10-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/50_ComplementariaPromocionDraMargaritaMaass_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2022-10-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/51. Ordinaria. 26 Octubre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de octubre, comisiones académicas</td>
                      <td>Complementaria</td>
                      <td>2022-10-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/52. Complementaria. 26 Octubre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de octubre, modificación reglamento CEC</td>
                      <td>Complementaria</td>
                      <td>2022-10-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/53_Complementaria26Octubre_CF" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de octubre, becas posdoctorales</td>
                      <td>Complementaria</td>
                      <td>2022-10-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/54_Complementaria26OctubreBP_CF" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2022-11-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/55. Ordinaria. 9 Noviembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de noviembre, beca posdoctoral</td>
                      <td>Complementaria</td>
                      <td>2022-11-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/56. Complementaria. 9 Noviembre BP_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 09 de noviembre, representante Comisión PRIDE</td>
                      <td>Complementaria</td>
                      <td>2022-11-09</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/57. Complementaria. 9 Noviembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2022-11-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/58. Ordinaria. 23 Noviembre_CF.pdf" target="_blank">Ver</a></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </tfoot>
                </table>                
              </div>

              <div class="tab-pane fade" id="informes-tab-pane" role="tabpanel" aria-labelledby="informes-tab" tabindex="0">
                <table id="" class="table dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Informes aprobados 2016</td>
                      <td>2017-02-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Informes aprobados 2016.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Informes aprobados 2017</td>
                      <td>2018-02-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Informes aprobados 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="odd">
                      <td>Informes aprobados 2018</td>
                      <td>2019-02-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Informe aprobados 2018.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Informes aprobados 2019</td>
                      <td>2020-02-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/4. Informe aprobados 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="odd">
                      <td>Informes aprobados 2020</td>
                      <td>2021-02-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/5. Informe aprobados 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Informes aprobados 2021</td>
                      <td>2022-02-10</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Informes2021.pdf" target="_blank">Ver</a></td>
                    </tr>  
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="presupuesto-tab-pane" role="tabpanel" aria-labelledby="presupuesto-tab" tabindex="0">
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Contrataciones de asistentes de investigadores</td>
                      <td>Contrato</td>
                      <td>2017-06-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Copia de Contratacion asistentes inv.  2017-1_.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para viajes de académicos</td>
                      <td>Viajes</td>
                      <td>2017-09-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Copia de Presupuesto  Investigadores  y  Tecnicos Aca. 2017_.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2017-09-06</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Copia de PRESUPUESTO 2017 INVITADOS _.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para personal de apoyo</td>
                      <td>Personal de apoyo</td>
                      <td>2017-06-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/PERSONAL DE APOYO DE SERVICIOS PTA.    282 - 2017-1.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para viajes de académicos</td>
                      <td>Viajes</td>
                      <td>2018-11-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/VIAJES ACADEMICOS 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2018-11-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/PROFESORES INVITADOS 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para personal de apoyo</td>
                      <td>Personal de apoyo</td>
                      <td>2018-04-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/PERSONAL DE APOYO CONTRATACION DE  SERVICIOS  2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto 2018 vs 2019</td>
                      <td>Comparativo</td>
                      <td>2019-10-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Presupuesto 2018-2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2019-12-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/VIAJES ACADEMICOS 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2019-12-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/PROFESORES INVITADOS 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2020-02-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/VIAJES ACADEMICOS 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2020-02-19</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/PROFESORES INVITADOS 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2021-10-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/RELACION DE VIAJES 2021-oct.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para profesores invitados</td>
                      <td>Invitados</td>
                      <td>2021-10-28</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/RELACION DE PROF INVITADOS 2021-oct.pdf" target="_blank">Ver</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="oficiales-tab-pane" role="tabpanel" aria-labelledby="oficiales-tab" tabindex="0">
                <table id="" class="table dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Manual de Organización del CEIICH</td>
                      <td>2016-10-01</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/MANUAL DE ORGANIZACION 2016.pdf" target="_blank">Ver</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="audiovisual-tab-pane" role="tabpanel" aria-labelledby="audiovisual-tab" tabindex="0">
                <table id="" class="table dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Polifonías feministas</td>
                      <td>Dictamen</td>
                      <td>2022-02-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Predictamen Polifonias feministas VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Dalia</td>
                      <td>Dictamen</td>
                      <td>2022-03-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Predictamen Dalia VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de marzo</td>
                      <td>Acuerdos</td>
                      <td>2021-03-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/ActaprimerareunionSubcomiteProduccionAudiovisual_VF.pdf" target="_blank">Ver</a></td>
                    </tr> 
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="editorial-tab-pane" role="tabpanel" aria-labelledby="editorial-tab" tabindex="0">
                <table id="" class="display">                               
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Programa editorial, 2022</td>
                      <td>Programa</td>
                      <td>2022-03-31</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Programa editorial 2022_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Lineamientos editoriales, 2021</td>
                      <td data-search="">Lineamientos</td>
                      <td data-order="">2021-09-01</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/LineamientosEditoriales2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Guía de entrega de originales para publicación</td>
                      <td>Guía</td>
                      <td>2021-08-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/GuiaEntregaOriginales.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Cuestionario de estrategia de contribución e impacto académico</td>
                      <td>Cuestionario</td>
                      <td>2020-04-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/CuestionarioEstrategia.docx" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Programa editorial, 2019</td>
                      <td>Programa</td>
                      <td>2019-08-15</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Programa editorial.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Material de acceso abierto descargado</td>
                      <td>Documento</td>
                      <td>2017-06-16</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Descargas_2017-06-16FINAL.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2017</td>
                      <td>Relación</td>
                      <td>2017-11-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/RELACION DE SEGUIMIENTO DE DICTAMENES 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2018</td>
                      <td>Relación</td>
                      <td>2018-11-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/RELACION DE SEGUIMINETO DE DICTAMENES 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2019</td>
                      <td>Relación</td>
                      <td>2019-05-11</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/RELACION DE SEGUIMINETO DE DICTAMENES 2019.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 01 de abril</td>
                      <td>Acuerdos</td>
                      <td>2022-04-01</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del Comité Editorial 01-04-2022_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de diciembre</td>
                      <td>Acuerdos</td>
                      <td>2021-12-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/ActaComiteEditorial07_12_2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de julio</td>
                      <td>Acuerdos</td>
                      <td>2021-07-30</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/ActaComiteEditorial30-07-2021_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de abril</td>
                      <td>Acuerdos</td>
                      <td>2021-04-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/ActaComiteEditorial07-04-2021_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2020-11-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/ActaComiteEditorial26-11-2020VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2020-06-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta_26junio2020_com_edit.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2019-11-12</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/3. Acta 12 noviembre 19-Com. Edit..pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2019-06-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. Acta 26 junio 19-CE.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 05 de marzo</td>
                      <td>Acuerdos</td>
                      <td>2019-03-05</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/1. Acta del 5 de marzo de 2019-Com. Edit.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de octubre</td>
                      <td>Acuerdos</td>
                      <td>2018-10-23</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta Comite Editorial-23-10-18.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2018-06-26</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 26 de junio de 2018-Com. Edit.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 03 de abril</td>
                      <td>Acuerdos</td>
                      <td>2018-04-03</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta del 3 de abril de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2017-11-21</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. acta comite editorial-13-11-21.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de junio</td>
                      <td>Acuerdos</td>
                      <td>2017-06-13</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/2. acta comite editorial-13-06-17.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de febrero</td>
                      <td>Acuerdos</td>
                      <td>2017-02-20</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta-Comte-Edit_2017-02-20.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 y 24 de octubre</td>
                      <td>Acuerdos</td>
                      <td>2016-10-07</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/Acta-Comte-Edit_2016-10-07.pdf" target="_blank">Ver</a></td>
                    </tr>         
                  </tbody>
                </table>
              </div>
            </div>  
        </div>
      </div>



            <!--<div class="hov">
              <a href="javascript:mostrarDeTrabajo();"><i class="fas fa-dice-d20"> DOCUMENTOS DE TRABAJO</i></a>
              <div id="flotanteDeTrabajo" class="flotante" align="center">
                <a href="javascript:cerrarDeTrabajo();"><i2 class="fas fa-times-circle"></i2></a>
                <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/oficioCTH17asesión_07octubre2021.pdf" target="_blank">Nueva área y programa de investigación</a>
              </div>
            </div>-->

        </section>
      </div>     
    </section>
</main>

<?php
  require './php/footer.php'
?>
<script src="./js/main.js"></script>
<script src="./js/libraries/Swiper/swiper.min.js"></script>

<script src="./js/menuResponsive.js"></script>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>
