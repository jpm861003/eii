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
  <div class="container-1">
    <div class="contenedor">
      <div class="row align-items-center">
        <div class="col-1">
         <p>|</p>
        </div>
        <div class="col-sm-4">
          <h1>Procedimientos internos</h1>
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
          <p align="right">Por su seguridad, no olvide salir de esta p??gina
            <a href="espacioCerrar.php"><i class="fa fa-window-close" aria-hidden="true"></i></a>
          </p>
        </div>
        <div class="total">
          <div class="container text-center">
            <ul class="nav nav-tabs" id="procedimientosTab" role="tablist">
              <li class="nav-item" role="presentacion">
                <button class="nav-link active" id="colipe-tab" data-bs-toggle="tab" data-bs-target="#colipe-tab-pane" type="button" role="tab" aria-controls="colipe-tab-pane" aria-selected="true">Comisiones, licencias y permisos</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="sabatico-tab" data-bs-toggle="tab" data-bs-target="#sabatico-tab-pane" type="button" role="tab" aria-controls="sabatico-tab-pane" aria-selected="false">Sab??tico</button>
              </li>
              <li class="nav-item" role="presentacion">
                <button class="nav-link" id="promocion-tab" data-bs-toggle="tab" data-bs-target="#promocion-tab-pane" type="button" role="tab" aria-controls="promocion-tab-pane" aria-selected="false">Promoci??n, definitividad <br>y cambio de adscripci??n</button>
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
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Mayor a tres d??as</td>
                      <td>Comisi??n</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/4. Comision. Mayores a tres dias.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr>
                      <td>Permiso de ausencia corta</td>
                      <td>Comisi??n</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/COMISIONES ACADEMICAS-Permisos de ausencias cortas.pdf" target="_blank">Ver</a></td>
                    </tr>
                    <tr class="odd">
                      <td>Con goce de sueldo</td>
                      <td>Licencia</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/LICENCIAS ACADEMICAS-Con goce de sueldo.pdf" target="_blank">Ver</a></td>
                    </tr> 
                    <tr>
                      <td>Sin goce de sueldo</td>
                      <td>Licencia</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/LICENCIAS ACADEMICAS-Sin goce de sueldo.pdf" target="_blank">Ver</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="sabatico-tab-pane" role="tabpanel" aria-labelledby="sabatico-tab" tabindex="0">
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Disfrute de sab??tico</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/5. Disfrute de Sabatico.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Regularizaci??n de diferimiento de sab??tico</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/5.1 Diferimiento de Sabatico (Ya paso fecha de inicio).docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="odd">
                      <td>Diferimiento de Sab??tico</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/5.2 Diferimiento de Sabatico (No ha iniciado).docx" target="_blank">Descargar</a></td>
                    </tr> 
                    <tr>
                      <td>Informe de Sab??tico</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/Informe sabatico.docx" target="_blank">Descargar</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="promocion-tab-pane" role="tabpanel" aria-labelledby="promocion-tab" tabindex="0">
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Carta de promoci??n y definitividad</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/6. Carta de promocion y definitividad.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Cambio de adscripci??n temporal</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/7. Cambio de Adscripcion Temporal.docx" target="_blank">Descargar</a></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="movilidad-tab-pane" role="tabpanel" aria-labelledby="movilidad-tab" tabindex="0">
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Estancias de Investigaci??n</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/9. Estancias de Investigacion.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Gastos de intercambio</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/10. Gastos de intercambio.docx" target="_blank">Descargar</a></td>
                    </tr>                  
                  </tbody>
                </table>
              </div>
              <div class="tab-pane fade" id="becas-tab-pane" role="tabpanel" aria-labelledby="becas-tab" tabindex="0">
                <table id="" class="display dataTable">
                  <thead>
                    <tr>
                      <th>Nombre</th>
                      <th>Formato</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd">
                      <td>Carta compromiso</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/8. Becas CEIICH. Carta compromiso.docx" target="_blank">Descargar</a></td>
                    </tr>
                    <tr class="even">
                      <td>Formato de solicitud de becas</td>
                      <td><a href="http://132.248.159.141/eii/docsInfo/formatos/8.1 Becas CEIICH. Formato de Solicitud Becas.docx" target="_blank">Descargar</a></td>
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
