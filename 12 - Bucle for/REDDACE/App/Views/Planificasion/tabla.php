<?php
session_start();
    include ('../perfil/perfil.php');
?>
<!DOCTYPE html>
<html lang="es">
<head> 
       
            <?php
             include ('../archive/css.php');
            ?>
<!-- inicio para kien -->
<?php
             include ('../archive/Para_El_Perfil.php');
            ?> 
<!-- fin para kien -->
                <!-- CSS PROPIOS-->

                <link rel="stylesheet" href="../../../static/Css/VTb_CLA.css">

</head>

<body>
<?php

   include ('../archive/precarga1.html');

?>
   <div class="cont1">

  <!-- inicio el heder -->
            <?php
             include ('../archive/caveza.php');
            ?>
<!-- finel heder -->

<!-- inicio opc del menu -->
            <?php
             include ('../archive/menu.php');
            ?>
<!-- fin opc del menu -->


<!-- contenido form(o otras cosas) -->
<main class="contenido">
   <div id="texturas">
   <div class="mapa" >
      <nav aria-label="breadcrumb"  >
          <ol class="breadcrumb radius-1rem2r " style="margin-bottom:2px; padding-bottom: 9px">
                <li class="breadcrumb-item active text-center" aria-current="page"> 
                   <i class="icon icon-home"></i> 
                   <a class="otrass" href="../menu/menu.php">Inicio</a>
               </li>
               <li class="breadcrumb-item active text-center" aria-current="page"> 
                <i class="icon icon-home"></i> 
                <a class="colorr" href="mostrar.php">Control De Planificaciones</a>
            </li>
            <li class="breadcrumb-item active text-center" aria-current="page"> 
                <i class="icon icon-home"></i> 
                <a class="colorr" href="#">Estudiantes Vinculados</a>
            </li>
          </ol>
      </nav>
  </div> 
  </div> 
  <div class="elcontenido" style="width: 100%;">
<!-- es este espacio va la informacion -->
<div class="parre2">
        <div class="que1"> 
            <h3>Estudiantes Vinculados</h3>  
            <p>Matricula</p>
        </div>
        <div class="buto" id="regresa" ><i class="icon icon-arrow-left"></i> </div>
    <div class="scrol">
        <table cellpadding="10"> 
           <thead>
              <tr>
                <th>N°: </th>
                <th>Cedula</th>
                <th>Nombre y Apellido</th>
                <th>Agregado</th>
                <th>Condición</th>
              </tr>
           </thead>

           <tbody id="comunicasion4">
                <tr onclick="QuiEnEres()">

                    <td>1</td>
                    <td>25568821</td>
                    <td>oscar delgado</td>
                    <td>12/12/2020</td>
                    <td>Repitiente</td>
                    </tr>
                <tr onclick="QuiEnEres()">

                    <td>2</td>
                    <td>25568821</td>
                    <td>oscar delgado</td>
                    <td>12/12/2020</td>
                    <td>normal</td>
                    </tr>
           </tbody>
        </table>
     
     </div>
    </div>
<!-- fin de la informacion -->
</div>
</main>

<!-- inicio del pies -->
            <?php
             include ('../archive/pies.php');
            ?>
<!-- fin del pies -->

</div>
</body>
 
    </html>

<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->


<script>
 $(document).ready(function () {
    $("#regresa").click(function () {
        location.href='mostrar.php';   
    }) 
 });


</script>