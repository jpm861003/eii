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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="/media/js/site.js?_=1d5abd169416a09a2b389885211721dd" data-domain="datatables.net" data-api="https://plausible.sprymedia.co.uk/api/event"></script>
        <script src="https://media.ethicalads.io/media/client/ethicalads.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>
<script>
function mostrar(enla , etik) {
  obj = document.getElementById(etik);
  obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
}
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('#tablaEII').DataTable({
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
    });
});
</script>
<script src="./js/buscador.js"></script>

<body>
  <div class="container-1">
    <div class="contenedor">
      <div class="row align-items-center">
        <div class="col-1">
         <p>|</p>
        </div>
        <div class="col-sm-4">
          <h1>Espacio informativo</h1>
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
                <a class="nav-link" href="javascript:mostrarConsejoInterno();">Consejo Interno</a>
                <table name="tablaEII" data-order='[[ 3, "asc" ]]' id="tablaEII" class="order-table display dataTable">

                <div id="tablaEII_wrapper" class="dataTables_wrapper">
                  <div class="dataTables_length" id="tablaEII_length">
                    Mostrar:
                      <select id="tablaEII" aria-controls="example">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                      </select> entradas
                  </div>
                  <div id="tablaEII" class="dataTables_filter" align="right">
                    <label align="right">Buscar:<input type="text" class="form-control col-md-2 light-table-filter" placeholder="" data-table="order-table"></label>
                  </div>
                  <div></div>
                </div>
                
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="tablaEII" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="tablaEII" aria-label="Name: activate to sort column ascending">Tipo</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td data-search="Acta del 29 de marzo">Acta del 29 de marzo</td>
                      <td data-search="Ordinaria">Ordinaria</td>
                      <td data-order="20160329">2016-03-29</td>
                      <td><a href="https://drive.google.com/file/d/1fUiw7Cr_p5xvmn29xatxb50GPJUjnHmc/view?usp=sharing" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td data-search="Acta del 12 de abril">Acta del 12 de abril</td>
                      <td data-search="Ordinaria">Ordinaria</td>
                      <td data-order="20160412">2016-04-12</td>
                      <td><a href="https://drive.google.com/file/d/1FOsVrAt6vqMB7JdKi3fW7pBuAkxbB9Vq/view?usp=sharing" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de abril</td>
                      <td class="sorting_1">Complementaria</td>
                      <td>2016-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/11. 12 de abril complementaria.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 21 de abril</td>
                      <td>Ordinaria</td>
                      <td>2016-04-21</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/12. 21 de abril.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de abril</td>
                      <td>Ordinaria</td>
                      <td>2016-04-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. 26 de abril.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 2 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/14. 2 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 2 de mayo (Tema)</td>
                      <td>Complementaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/15. 2 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 2 de mayo (Tema)</td>
                      <td>Complementaria</td>
                      <td>2016-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/16. 2 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 11 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-11</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17. 11 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 24 de mayo</td>
                      <td>Ordinaria</td>
                      <td>2016-05-24</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/18. 24 de mayo.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 24 de mayo</td>
                      <td>Complementaria</td>
                      <td>2016-05-24</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/19. 24 de mayo complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 7 de junio</td>
                      <td>Ordinaria</td>
                      <td>2016-06-07</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/20. 7 de junio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de junio</td>
                      <td>Ordinaria</td>
                      <td>2016-06-22</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/21. 22 de junio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 22 de junio</td>
                      <td>Complementaria</td>
                      <td>2016-06-22</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/22. 22 de junio complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de julio</td>
                      <td>Ordinaria</td>
                      <td>2016-07-27</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/23. 27 de julio.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 27 de julio</td>
                      <td>Complementaria</td>
                      <td>2016-07-27</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/24. 27 de julio complementria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 10 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2016-08-10</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/25. 10 de agosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de agosto</td>
                      <td>Ordinaria</td>
                      <td>2016-08-23</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/26. 23 de agosto.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 6 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2016-09-06</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/27. 6 de septiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de septiembre</td>
                      <td>Ordinaria</td>
                      <td>2016-09-21</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/28. 21 de septiembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 5 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2016-10-05</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/29. 5 de octubre.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 19 de octubre</td>
                      <td>Ordinaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/30. 19 de octubre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de octubre, solicitud becas</td>
                      <td>Complementaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/31. 19 de octubre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 19 de octubre, informes anuales</td>
                      <td>Complementaria</td>
                      <td>2016-10-19</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/32. 19 de octubre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 7 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-07</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/33. 7 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-17</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/34. 17 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 17 de noviembre</td>
                      <td>Complementaria</td>
                      <td>2016-11-17</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/35. 17 de noviembre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de noviembre</td>
                      <td>Ordinaria</td>
                      <td>2016-11-30</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/36. 30 de noviembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de diciembre</td>
                      <td>Ordinaria</td>
                      <td>2016-12-14</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/37. 14 de diciembre.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 14 de diciembre</td>
                      <td>Complementaria</td>
                      <td>2016-12-14</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/38. 14 de diciembre complementaria.pdf" target="_blank">Ver</a></td>
                    </tr>     
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="informes-tab-pane" role="tabpanel" aria-labelledby="informes-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Informes aprobados 2016</td>
                      <td>2016-03-29</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Informes aprobados 2016.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Informes aprobados 2017</td>
                      <td>2017-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Informes aprobados 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Informes aprobados 2018</td>
                      <td>2018-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Informe aprobados 2018.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Informes aprobados 2019</td>
                      <td>2019-04-21</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/4. Informe aprobados 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Informes aprobados 2020</td>
                      <td>2020-04-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/5. Informe aprobados 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Informes aprobados 2021</td>
                      <td>2021-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Informes2021.pdf" target="_blank">Ver</a></td>
                    </tr>  
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="presupuesto-tab-pane" role="tabpanel" aria-labelledby="presupuesto-tab" tabindex="0">
                <div id="example_wrapper" class="dataTables_wrapper">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="example_length">
                          Mostrar:
                            <select name="example_length" aria-controls="example" class="">
                              <option value="10"><font style="vertical-align: inherit;">10</font></option>
                              <option value="25"><font style="vertical-align: inherit;">25</font></option>
                              <option value="50"><font style="vertical-align: inherit;">50</font></option>
                              <option value="100"><font style="vertical-align: inherit;">100</font></option>
                            </select> entradas
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="tablaEII" class="dataTables_filter" align="right">
                          <label align="right">Buscar:<input  type="text" class="form-control col-md-3 light-table-filter" placeholder="" data-table="order-table"></label>
                        </div>
                      </div>
                    </div>
                  </div>
                <table data-order='[[ 3, "asc" ]]' id="example" class="order-table display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example"aria-label="Name: activate to sort column ascending">Tipo</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Contrataciones de asistentes de investigadores</td>
                      <td>Contrato</td>
                      <td>2017-03-29</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Copia de Contratacion asistentes inv.  2017-1_.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para viajes de académicos</td>
                      <td>Viajes</td>
                      <td>2017-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Copia de Presupuesto  Investigadores  y  Tecnicos Aca. 2017_.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2017-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Copia de PRESUPUESTO 2017 INVITADOS _.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para personal de apoyo</td>
                      <td>Personal de apoyo</td>
                      <td>2017-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/PERSONAL DE APOYO DE SERVICIOS PTA.    282 - 2017-1.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para viajes de académicos</td>
                      <td>Viajes</td>
                      <td>2018-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/VIAJES ACADEMICOS 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2018-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/PROFESORES INVITADOS 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para personal de apoyo</td>
                      <td>Personal de apoyo</td>
                      <td>2018-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/PERSONAL DE APOYO CONTRATACION DE  SERVICIOS  2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto 2018 vs 2019</td>
                      <td>Comparativo</td>
                      <td>2019-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Presupuesto 2018-2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2019-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/VIAJES ACADEMICOS 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2019-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/PROFESORES INVITADOS 2019.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2020-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/VIAJES ACADEMICOS 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para invitados</td>
                      <td>Invitados</td>
                      <td>2020-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/PROFESORES INVITADOS 2020.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td>Presupuesto para viajes de académicos</td>
                      <td >Viajes</td>
                      <td>2021-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/RELACION DE VIAJES 2021-oct.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Presupuesto para profesores invitados</td>
                      <td>Invitados</td>
                      <td>2021-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/RELACION DE PROF INVITADOS 2021-oct.pdf" target="_blank">Ver</a></td>
                    </tr>


                  </tbody>
                </table>


              </div>
              <div class="tab-pane fade" id="oficiales-tab-pane" role="tabpanel" aria-labelledby="oficiales-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Manual de Organización del CEIICH</td>
                      <td>2019-10-25</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/MANUAL DE ORGANIZACION 2016.pdf" target="_blank">Ver</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="audiovisual-tab-pane" role="tabpanel" aria-labelledby="audiovisual-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example"aria-label="Name: activate to sort column ascending">Tipo</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Polifonías feministas</td>
                      <td>Dictamen</td>
                      <td>2016-03-29</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Predictamen Polifonias feministas VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Dalia</td>
                      <td>Dictamen</td>
                      <td>2016-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Predictamen Dalia VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 16 de marzo</td>
                      <td>Acuerdos</td>
                      <td>2021-03-16</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/ActaprimerareunionSubcomiteProduccionAudiovisual_VF.pdf" target="_blank">Ver</a></td>
                    </tr> 
                  </tbody>
                </table>
              </div>

              <div class="tab-pane fade" id="editorial-tab-pane" role="tabpanel" aria-labelledby="editorial-tab" tabindex="0">
                <table name="tablaEII" data-order='[[ 3, "asc" ]]' id="tablaEII" class="order-table display dataTable">

                  
                  <div id="example_wrapper" class="dataTables_wrapper">
                    <div class="row">
                      <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="example_length">
                          Mostrar:
                            <select name="example_length" aria-controls="example" class="">
                              <option value="10"><font style="vertical-align: inherit;">10</font></option>
                              <option value="25"><font style="vertical-align: inherit;">25</font></option>
                              <option value="50"><font style="vertical-align: inherit;">50</font></option>
                              <option value="100"><font style="vertical-align: inherit;">100</font></option>
                            </select> entradas
                        </div>
                      </div>
                      <div class="col-sm-12 col-md-6">
                        <div id="tablaEII" class="dataTables_filter" align="right">
                          <label align="right">Buscar:<input  type="text" class="form-control col-md-3 light-table-filter" placeholder="" data-table="order-table"></label>
                        </div>
                      </div>
                    </div>
                  </div>
              
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="tablaEII" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="tablaEII" aria-label="Name: activate to sort column ascending">Tipo</th>
                      <th class="sorting sorting_asc">Fecha</th>
                      <th>Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td data-search="">Programa editorial, 2022</td>
                      <td data-search="">Programa</td>
                      <td data-order="">2022-03-29</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Programa editorial 2022_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="even">
                      <td data-search="">Lineamientos editoriales, 2021</td>
                      <td data-search="">Lineamientos</td>
                      <td data-order="">2021-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/LineamientosEditoriales2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Guía de entrega de originales para publicación</td>
                      <td class="sorting_1">Guía</td>
                      <td>2020-04-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/GuiaEntregaOriginales.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Cuestionario de estrategia de contribución e impacto académico</td>
                      <td>Cuestionario</td>
                      <td>2020-04-21</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs//CuestionarioEstrategia.docx" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Programa editorial, 2019</td>
                      <td>Programa</td>
                      <td>2019-04-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Programa editorial.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Material de acceso abierto descargado</td>
                      <td>Documento</td>
                      <td>2017-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Descargas_2017-06-16FINAL.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2017</td>
                      <td>Relación</td>
                      <td>2017-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/RELACION DE SEGUIMIENTO DE DICTAMENES 2017.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2018</td>
                      <td>Relación</td>
                      <td>2018-05-02</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/RELACION DE SEGUIMINETO DE DICTAMENES 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Seguimiento de dictámenes, 2019</td>
                      <td>Relación</td>
                      <td>2019-05-11</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/RELACION DE SEGUIMINETO DE DICTAMENES 2019.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 01 de abril</td>
                      <td>Acuerdos</td>
                      <td>2022-04-01</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del Comité Editorial 01-04-2022_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 07 de diciembre</td>
                      <td>Acuerdos</td>
                      <td>2021-12-07</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/ActaComiteEditorial07_12_2021.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 30 de julio</td>
                      <td>Acuerdos</td>
                      <td>2021-07-30</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/ActaComiteEditorial30-07-2021_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 7 de abril</td>
                      <td>Acuerdos</td>
                      <td>2021-04-07</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/ActaComiteEditorial07-04-2021_VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2020-11-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/ActaComiteEditorial26-11-2020VF.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2020-06-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta_26junio2020_com_edit.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 12 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2019-11-12</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Acta 12 noviembre 19-Com. Edit..pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2019-06-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta 26 junio 19-CE.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 5 de marzo</td>
                      <td>Acuerdos</td>
                      <td>2019-03-05</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta del 5 de marzo de 2019-Com. Edit.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 23 de octubre</td>
                      <td>Acuerdos</td>
                      <td>2018-10-23</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta Comite Editorial-23-10-18.pdf" target="_blank">Ver</a></td>
                    </tr>  
                    <tr>
                      <td>Acta del 26 de junio</td>
                      <td>Acuerdos</td>
                      <td>2018-06-26</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 26 de junio de 2018-Com. Edit.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Acta del 3 de abril</td>
                      <td>Acuerdos</td>
                      <td>2018-04-03</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 3 de abril de 2018.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 21 de noviembre</td>
                      <td>Acuerdos</td>
                      <td>2017-11-21</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. acta comite editorial-13-11-21.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 13 de junio</td>
                      <td>Acuerdos</td>
                      <td>2017-06-13</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. acta comite editorial-13-06-17.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 20 de febrero</td>
                      <td>Acuerdos</td>
                      <td>2017-02-20</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta-Comte-Edit_2017-02-20.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr>
                      <td>Acta del 7 y 24 de octubre</td>
                      <td>Acuerdos</td>
                      <td>2016-10-07</td>
                      <td><a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta-Comte-Edit_2016-10-07.pdf" target="_blank">Ver</a></td>
                    </tr>         
                  </tbody>
                </table>
              </div>
            </div>  
        </div>
      </div>


      <div class="total">
        <section class="organos">
          <div class="hov">
            <div id="flotanteConsejo" class="flotante">
              <a href="javascript:cerrarConsejoInterno();"><i2 class="fas fa-times-circle"></i2></a>
              <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/CalendarioDeSesionesCI2022.pdf" target="_blank">Calendario de sesiones, 2022</a>             

              <p><b> 2017 <a href="#" onclick="mostrar(this,'oculto01'); return false" />[+]</a> </b></p>
                <div id="oculto01" class="actas" style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta 16, 17, 18 y 25 de enero de  2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Actas del 16, 17, 18 y 25 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta 18 de enero de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Complementaria 18 de enero de  2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de enero, complementaria</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/4. Acta 1 de febrero de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 1 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/5. Acta 15 de febrero de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 15 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/6. Acta  1 de marzo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 1 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/7. Acta 15 de marzo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 15 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/8. Acta 29 de marzo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 29 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/9.  Acta 19 de abril de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 19 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta  5 de abril de 2017 Pos  doctorado.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de abril, posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/12. Acta 3 de mayo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. Acta 11 de mayo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/14. Acta 31 de mayo de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 31 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/15. Acta 14 de junio de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 14 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/16. Acta  28 de junio de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 28 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17. Acta del 26 de julio de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 26 de julio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/18. Acta 2 de agosto de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/19. Acta del 16 de agosto de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 16 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/20. Acta del 30 de agosto de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 31 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/21. Acta 13 de septiembre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 13 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/22. Acta 3 de octubre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/23. Acta 3  de octubre de 2017  posdoctorales.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de octubre, posdoctorales</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 3 de octubre de 2017  Complementaria Pos-Doc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de octubre, complementaria</i2></a><br>    
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 11 de octubre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 25 de octubre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 8 de noviembre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 de noviembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 22 de noviembre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 22 de noviembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 5  de diciembre de 2017.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de diciembre</i2></a><br>
                </div>

                <p><b> 2018 <a href="#" onclick="mostrar(this,'oculto02'); return false" />[+]</a> </b></p>
                <div id="oculto02" class="actas" style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta 10 de enero de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de enero</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta 10 de enero de 2018(Informes SIAH 2017).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de enero, informes SIAH 2017</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta 10 de enero de 2018  (Reconocimiento Sor Juana).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de enero, Reconocimiento Sor Juana</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Acta de 10 de enero de 2018  (Renovaciones Pos Doc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de enero, renovaciones posdoctorados</i2></a> <br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/5.Acta del 24 de enero de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de enero</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/6. Acta del 24 de enero de 2018  complementaria.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de enero, complementaria</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/7.Acta del 31 de enero de 2018 (acta extraordinaria).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 31 de enero, acta extraordinaria</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/8. Acta de 7 de febrero de  2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 7 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 21 de febrero de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de febrero</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 9 de marzo de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de marzo</i2></a><br>  
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 9 de marzo de 2018 (Programa de becas).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de marzo, programa de becas</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 21 de marzo de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de marzo</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta del 2 de abril de 2018 Pos Doc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de abril, becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. Acta del 2 d abril de 2018 (Informes Anuales Pos-doc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de abril, informes anuales posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. Acta del 11 de abril de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/15. acta del 25 de abril de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/16. Acta del 9 de mayo de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17. Acta del 23 de mayo de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 23 de mayo</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/18. Acta del 6 de junio de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/19. Acta del 20 de junio de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 20 de junio</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/20. Acta de 25 de julio de 2018 (Renovaciones Pos-Doc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de julio, renovaciones posdoctorados</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/21. Acta de 25 de julio de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de julio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/22. Acta de 8 de agosto de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 de agosto</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/23. Acta de 22 de agosto de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 22 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/24. Acta de 5 de septiembre de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/25. Acta de 24 de septiembre de  2018 (Pos Doc Nuevos 2018-II).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de septiembre, becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/26. Acta de 24 de septiembre de 2018 (Informes anuales y  semestrales  posdoc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de septiembre, informes posdoctorales</i2></a><br>  
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/27. Acta de 26 de septiembre de  2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 26 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/28. Acta de 10 de octubre de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/29. Acta de 24 de octubre de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/30. Acta del 14 de noviembre de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 14 de noviembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/31. Acta del 28 de noviembre de 2018.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 28 de noviembre</i2></a><br>
                </div>

                <p><b> 2019 <a href="#" onclick="mostrar(this,'oculto03'); return false" />[+]</a> </b></p>
                <div id="oculto03" class ="actas"style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta de 9 de enero de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta de 9 de enero de 2019 (Informes 2018 Y Plan de actividades  2019).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, SIAH 2018 y Plan de actividades 2019 </i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Acta de 9 de enero de 2019 (Reconocimiento Sor Juana Ines).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, Reconocimiento Sor Juana </i2></a><br>    
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/4. Acta de 9 de enero de 2019 (Renovaciones Pos Doc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, renovaciones posdoctorados</i2></a><br>     
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/5. Acta de 23 de enero de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 23 de enero</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/6. Acta de 23 de enero de 2019 (Estimulos).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 23 de enero, estímulos</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 6 de febrero de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de febrero</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/9. Acta de 20 de febrero de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 20 de febrero</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 6 de marzo de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 27 de marzo de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 27 de marzo</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/12. Acta de 10 de abril de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de abril</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/12.3 Acta de 10 de abril de 2019 (Informes anuales posdoc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de abril, informes anuales posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/12.2 Acta de 10 de abril de 2019 (Posdoc nuevos).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de abril, becas posdoctorales</i2></a><br>  
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. Acta de 8 de mayo de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 de mayo</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 22 de mayo de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 22 de mayo</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/15. Acta de 5 de junio de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de junio</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/16. Acta de 19 de junio de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 19 de junio</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17. Acta de 24 de julio de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de julio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17.1 Acta de 24 de julio de 2019 (Convocatoria Nettie Lee B.).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de julio,
                  convocatoria Nettie Lee B.</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17.2 Acta de 24 de julio de 2019 (Renovaciones Posdoc ).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de julio,
                  renovaciones becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/18. Acta de 7 de agosto de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/19. Acta de 21 de agosto de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/20. Acta de 4 de septiembre de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta del 18 de septiembre de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de septiembre</i2></a><br>       
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/25. Acta de 30 de septiembre de 2019 (Posdoc Nuevos).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 30 de septiembre, becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 2 de octubre de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de octubre</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta de 16 de octubre de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 16 de octubre</i2></a><br>   
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/30. Acta de 27 de noviembre 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 27 de noviembre</i2></a><br>  
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/31. Acta de 4 de diciembre de 2019.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de diciembre</i2></a><br>    
                </div>

                <p><b> 2020 <a href="#" onclick="mostrar(this,'oculto04'); return false" />[+]</a> </h3></p>
                <div id="oculto04" class="actas" style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/1. Acta de 8 de enero de 2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 de enero</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/3. Acta de 8 de enero de 2020 (Informes SIAH 2019).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, informes SIAH 2019 y Plan de actividades 2020</i2></a><br>  
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/2. Acta de 8 de enero de 2020 (Sor Juana Ines de la Cruz).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, Reconocimiento Sor Juana Inés de la Cruz</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/4. Acta de 8 de enero de 2020 (Renovaciones Posdoc).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de enero, renovaciones posdoctorados</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/5. Acta de 22 de enero de 2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 22 de enero</i2></a><br> 
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta5febrero2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de febrero</i2></a><br>              
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta5febrero2020(Estimulos).pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de febrero, estímulos por asistencia</i2></a><br>             
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta19febrero2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 19 de febrero</i2></a><br>         
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta4demarzo2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta18demarzo2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta29deabril2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 29 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta20demayo2020_solicitudBecasPosdoc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 20 de mayo, solicitud de becas de posdoctorado</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta27demayo2020.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 27 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta27demayo2020_informesBPosdoc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 27 de mayo, informes becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3dejunio_eleccionesCEIICH.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de junio, elecciones CEIICH</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3dejunio_complementaria.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de junio, acta complementaria</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta17dejunio.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 17 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta17dejunio_renovacionesbecasposdoctorales.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 17 de junio, renovaciones de becas posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta17dejunio_renovacionesposdoctoralesPUEAA.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 17 de junio, renovaciones posdoctorales PUEAA</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta5deagosto.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta19deagosto.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 19 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta2deseptiembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta21deseptiembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta23deseptiembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 23 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actacomplementaria23deseptiembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 23 de septiembre (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta7deoctubre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 7 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actacomplementaria7deoctubre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 7 de octubre (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta21deoctubre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta4denoviembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de noviembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actacomplementaria4denoviembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de noviembre (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta18denoviembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 18 de noviembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta2dediciembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de diciembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta9dediciembre.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 9 de diciembre</i2></a>
                </div>

                <p><b> 2021 <a href="#" onclick="mostrar(this,'oculto05'); return false" />[+]</a> </b></p>
                <div id="oculto05" class="actas" style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actadic2020ene2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 y 9 de diciembre (2020) y 6 de enero (2021)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta6deenero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actacomplementaria6deenero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de enero (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta11deenero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta13enero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 13 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Actacomplementaria13enero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 13 de enero (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3defebrero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3defebrero_EstimulosCF.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de febrero (Estímulos CF)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta10defebrero_BecasPosdoctorales.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de febrero (Becas posdoctorales)</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta10defebrero_CambioCalendarioCI.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 10 de febrero (Cambio calendario C.I.)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta17defebrero.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 17 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3Marzo2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta3Marzo2021Complementaria.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 3 de marzo (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta17Marzo2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 17 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta24Marzo2021_InformesPosdoc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 24 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta7Abril2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 7 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta21Abril2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 21 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta5Mayo2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta5Mayo2021_EleccionesCI.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 5 de mayo (Elecciones C.I.)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta19mayo2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 19 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta2junio2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 2 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta16junio2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 16 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta16junio2021RenovacionBecaPosdoc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 16 de junio (Renovación de becas posdoctorales)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta30junio2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 30 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta30junio2021NuevasBecasPosdoc.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 30 de junio (Nuevas becas posdoctorales)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta28julio2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 28 de julio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta4agosto2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 4 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta11agosto2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta25agosto2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta25agosto2021_LicenciasComisiones.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 25 de agosto (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta8septiembre2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta22septiembre2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 22 de septiembre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta6Octubre2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta6octubre2021_LicenciasComisiones.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 6 de octubre (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta11Octubre2021_ResolutivoDictaminadora.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 11 de octubre (Resolutivo dictaminadora)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta20Octubre2021.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 20 de octubre</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta20Octubre2021_LicenciaComisiones.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 20 de octubre (complementaria)</i2></a>
                  <br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta12enero2022_Informes.pdf" target="_blank"><i2 class="fas fa-angle-right"> Acta del 8 y 15 de diciembre, Informes SIAH</i2></a>

                  <br>
                </div>

                <p><b> 2022 <a href="#" onclick="mostrar(this,'oculto06'); return false" />[+]</a> </b></p>
                <div id="oculto06" class="actas" style="display:none">
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta10enero2022SorJuana.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 10 de enero, Reconocimiento Sor Juana</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta10enero2022.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 10 de enero, elección de representantes</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta12enero2022.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 12 de enero, beca posdoctoral</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta12enero2022Ord.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 12 de enero, licencia académica</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/Acta12enero2022_Informes.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 12 de enero, Informes SIAH</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/6. Ordinaria. 26 Enero_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 26 de enero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/7. Extraordinaria. 2 Febrero. Solicitud de Becas Posdoctorales_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 2 de febrero, Solicitud de Becas</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/8. Ordinaria. 9 Febrero_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 9 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/9. Ordinaria. 23 Febrero_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de febrero</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/10. Complementaria. 23 Febrero_Presupuesto 2022_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de febrero, presupuesto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/11. Complementaria. 23 Febrero. Estímulos_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de febrero, estímulos</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/13. Ordinaria. 10 Marzo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 10 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/14. Complementaria. 10 Marzo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 10 de marzo (complementaria)</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/15. Complementaria. 10 Marzo_Informe SIAH_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 10 de marzo, informe de labores</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/16_Extraordinaria_16Marzo_InformesBP_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 16 de marzo, Informes Becas Posdoctorales</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/17_Ordinaria_23Marzo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de marzo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/18_Complementaria_23Marzo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de marzo, Comisión académica</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/19_Complementaria_23Marzo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 23 de marzo, Comisión Dictaminadora</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/20_Ordinaria_6Abril_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 6 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/21_Ordinaria_27Abril_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 27 de abril</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/22_Complementaria_27Abril_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 27 de abril, Comisión académica</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/23_Extraordinaria_2Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 2 de mayo, extraordinaria</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/24_Extraordinaria_2Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 2 de mayo, beca posdoctoral</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/25_Ordinaria_11Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 11 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/26_ComplementariaExtenso_11Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 11 de mayo, Complementaria Extenso</i2></a>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/27_Complementaria_11Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 11 de mayo, Comisión Dictaminadora</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/28_Ordinaria_26Mayo_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 26 de mayo</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/29_Ordinaria_8Junio_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 8 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/30_Complementaria_8Junio_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 8 de junio, licencias académicas</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/31_Ordinaria_22Junio_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 22 de junio</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/32_Extraordinaria_27Junio_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 27 de junio, extraordinaria</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/33_Ordinaria_3Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 3 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/34_Complementaria_3Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 3 de agosto, licencia y comisiones académicas</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/35_Complementaria_3Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 3 de agosto, solicitudes de apoyo</i2></a><br>

                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/36_BecasPosdoc_3Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 3 de agosto, beca posdoctoral</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/37_Ordinaria_17Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 17 de agosto</i2></a><br>
                  <a href="http://computo.ceiich.unam.mx/webceiich/docs/actas/38_Complementaria_17Agosto_CF.pdf" target="_blank"><i2 class="fas fa-angle-right">Acta del 17 de agosto, licencia académica</i2></a><br>
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
<script src="./js/jquery-latest.js"></script>
<script src="./js/menuResponsive.js"></script>

</body>
</html>
