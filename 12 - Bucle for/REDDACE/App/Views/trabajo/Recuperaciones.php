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

                <link rel="stylesheet" href="../../../static/Css/Respodersolisitudes.css">

</head> 

<body>
    <!-- inicio  MSJ emerjentes para el estudiante-->
    <?php

include ('../archive/precarga1.html');

?>
<!-- fin MSJ emerjentes para el estudiante -->
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
                      <a class="colorr" href="#">Recuperación</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido">
  <!-- es este espacio va la informacion -->

  <div class="TRCparte1">
   <h3>Control De Recuperación</h3>
   <input type="text" value="Aceptar cupos disponible" disabled>
   <button type="button" class="icon icon-check" id="quemmd">
   </button>
</div>
   <!-- buscador -->


<!-- semi-tabla -->
<div class="TRCparte3">
 
   <div class="scrol" >
      <table cellpadding="10" > 
         <tr>
            <th>N°: </th>
            <th>Cedula</th>
            <th>Trayecto</th>
            <th>Materia</th>
            <th>Responder</th>
            <th>Opciones</th>
         </tr>

         <tr>
            <td>1</td>
            <td>25568822</td>
            <td>T2</td>
            <td> Matematica 2</td>
            <td> 
                <textarea name="" id="" cols="30" rows="10">
                    Solicitud Aprobada
                </textarea></td>
            <td>
            <a href="" class="btn btn-outline-dark"><i class="icon icon-check"></i></a>
            <a href="" class="btn btn-outline-dark"><i class="icon icon-close"></i></a>
            </td>
         </tr>

        
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
