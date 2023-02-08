<?php 
session_start();		
		if ($_SESSION['sesionValida'] != 'uno123') {
		   session_destroy();
		   header("Location: /index.php");
		   exit;
		}
    
    require './php/header.php';
    require './php/menu.php';
?>
<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
      
</head>
<script>
function mostrar(enla , etik) {
  obj = document.getElementById(etik);
obj.style.display = (obj.style.display == 'block') ? 'none' : 'block';
  enla.innerHTML = (enla.innerHTML == '[-]') ? '[+]' : '[-]';
}
</script>
<script>
$(document).ready(function () {
    $('#example').DataTable({
    });
});
</script>
<body>
  <main>
    <section class="inv">
      <div>
        <a href="javascript:subir();"><i class="fas fa-angle-up up" alt="Ir arriba"></i></a>
      </div>
        <div align="center">
          <img src="./src/images/Banner-espacio-informativo-CEIICH.jpg" width="250" height="115">
        </div>
        <div class="total">
          <p align="right">Por su seguridad, no olvide salir de esta página
            <a href="espacioCerrar.php"><i class="fa fa-window-close" aria-hidden="true"></i></a>
          </p>
        </div>
        <div class="total">
          <div class="container text-center">
            <h2>PROCEDIMIENTOS INTERNOS</h2>
            <ul class="nav nav-tabs" id="procedimientosTab" role="tablist">
              <li class="nav-item" role="presentacion">
                <button class="nav-link active" id="colipe-tab" data-bs-toggle="tab" data-bs-target="#colipe-tab-pane" type="button" role="tab" aria-controls="colipe-tab-pane" aria-selected="true">Comisiones, licencias y permisos</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="sabatico-tab" data-bs-toggle="tab" data-bs-target="#sabatico-tab-pane" type="button" role="tab" aria-controls="sabatico-tab-pane" aria-selected="false">Sabático</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="promocion-tab" data-bs-toggle="tab" data-bs-target="#promocion-tab-pane" type="button" role="tab" aria-controls="promocion-tab-pane" aria-selected="false">Promoción, definitividad <br>y cambio de adscripción</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="movilidad-tab" data-bs-toggle="tab" data-bs-target="#movilidad-tab-pane" type="button" role="tab" aria-controls="movilidad-tab-pane" aria-selected="false">Movilidad entrante</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="becas-tab" data-bs-toggle="tab" data-bs-target="#becas-tab-pane" type="button" role="tab" aria-controls="becas-tab-pane" aria-selected="false">Programa de becas</button>
              </li>
            </ul> 
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="colipe-tab-pane" role="tabpanel" aria-labelledby="colipe-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example"aria-label="Name: activate to sort column ascending">Tipo</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Mayor a tres días</td>
                      <td class="sorting_1">Comisión</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/4. Comision. Mayores a tres dias.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Permiso de ausencia corta</td>
                      <td class="sorting_1">Comisión</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/COMISIONES ACADEMICAS-Permisos de ausencias cortas.pdf" target="_blank">Descargar</a></td>
                    </tr>
                    <tr>
                      <td>Con goce de sueldo</td>
                      <td class="sorting_1">Licencia</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/LICENCIAS ACADEMICAS-Con goce de sueldo.pdf" target="_blank">Descargar</a></td>
                    </tr> 
                    <tr>
                      <td>Sin goce de sueldo</td>
                      <td>Licencia</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/LICENCIAS ACADEMICAS-Sin goce de sueldo.pdf" target="_blank">Descargar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="sabatico-tab-pane" role="tabpanel" aria-labelledby="sabatico-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Disfrute de sabático</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5. Disfrute de Sabatico.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Regularización de diferimiento de sabático</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5.1 Diferimiento de Sabatico (Ya paso fecha de inicio).docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr>
                      <td>Diferimiento de Sabático</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/5.2 Diferimiento de Sabatico (No ha iniciado).docx" target="_blank">Descargar</a></td>
                    </tr> 
                    <tr>
                      <td>Informe de Sabático</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/Informe sabatico.docx" target="_blank">Descargar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="promocion-tab-pane" role="tabpanel" aria-labelledby="promocion-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Carta de promoción y definitividad</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/6. Carta de promocion y definitividad.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Cambio de adscripción temporal</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/7. Cambio de Adscripcion Temporal.docx" target="_blank">Descargar</a></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="movilidad-tab-pane" role="tabpanel" aria-labelledby="movilidad-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Estancias de Investigación</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/9. Estancias de Investigacion.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Gastos de intercambio</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/10. Gastos de intercambio.docx" target="_blank">Descargar</a></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="becas-tab-pane" role="tabpanel" aria-labelledby="becas-tab" tabindex="0">
                <table data-order='[[ 3, "asc" ]]' id="example" class="display dataTable">
                  <thead>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example" aria-label="Name: activate to sort column ascending">Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Carta compromiso</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/8. Becas CEIICH. Carta compromiso.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Formato de solicitud de becas</td>
                      <td><a href="https://www.ceiich.unam.mx/0/docs/formatos/8.1 Becas CEIICH. Formato de Solicitud Becas.docx" target="_blank">Descargar</a></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
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
