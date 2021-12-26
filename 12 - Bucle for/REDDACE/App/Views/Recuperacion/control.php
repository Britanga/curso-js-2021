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
    <link rel="stylesheet" href="../../../static/Css/tablaD_REC.css">

  
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
                      <a class="colorr" href="control.php">Solicitudes</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido">
  <!-- es este espacio va la informacion -->

  <div class="TRMparte1">
   <h3>Solicitudes Realizadas</h3>
</div>
   <!-- buscador -->
<div class="TRMparte2">
<div class="parre">
      <form>
         <select name="" id="serab" required>
            <option value="iten1">2020</option>
            <option value="iten2">2019</option>
            <option value="iten3">2018</option>
         </select>
         <button type="button" value="buscar" id="buscar"> 
            <i class="icon icon-search"> </i>   
         </button> 
      </form>

      <div class="infomasme"> 
         
          <div class="cantida0">
      <p>Estadisticas de Solicitudes Realizadas </p>   
          </div>
          <div class="cantida1">
         <p>Por año: <r> 15 </r></p>
          </div>
          <div class="cantida2">
           <p>Por materia: <r> 15 </r></p>
          </div>
          
      </div>
      </div>
</div>

<!-- semi-tabla -->
<div class="TRMparte3">
   <div class="scrol" >
      <div>
            <h3 class="TRMparte3-1" >2020</h3>
            <div class="TRMparte3-2">
               <p>Aprobado</p>
               <p>T1</p>
               <p>Algorimica de programacion</p>
               <p>18 <sub>pst</sub></p>
               <a href="#" class="btn btn-outline-dark">PDF</a>
            </div>
            <div class="TRMparte3-2">
               <p>Rechazado</p>
               <p>T4</p>
               <p>Matematica</p>
               <p>0 <sub>pst</sub></p>
               <a href="# " class="btn btn-outline-dark">PDF</a>
            </div>
      </div>
      <div>
         <h3 class="TRMparte3-1" >2019</h3>
         <div class="TRMparte3-2">
            <p>Aprobado</p>
            <p>T1</p>
            <p>Programacion</p>
            <p>12 <sub>pst</sub></p>
            <a href="#" class="btn btn-outline-dark">PDF</a>
         </div>
         <div class="TRMparte3-2">
            <p>Aprobado</p>
            <p>T4</p>
            <p>Redes</p>
            <p>15 <sub>pst</sub></p>
            <a href="# " class="btn btn-outline-dark">PDF</a>
         </div>
     </div>
     <div>
      <h3 class="TRMparte3-1" >2017</h3>
      <div class="TRMparte3-2">
         <p>Aprobado</p>
         <p>Ts</p>
         <p>Ingeneria del Software</p>
         <p>12 <sub>pst</sub></p>
         <a href="#" class="btn btn-outline-dark">PDF</a>
      </div>
      <div class="TRMparte3-2">
         <p>Rechazada</p>
         <p>T1</p>
         <p>Arquitectura del computador</p>
         <p>0 <sub>pst</sub></p>
         <a href="# " class="btn btn-outline-dark">PDF</a>
      </div>
  </div>
  <div>
   <h3 class="TRMparte3-1" >2016</h3>
   <div class="TRMparte3-2">
      <p>Aprobado</p>
      <p>T3</p>
      <p>Administracion de BD</p>
      <p>12 <sub>pst</sub></p>
      <a href="#" class="btn btn-outline-dark">PDF</a>
   </div>
</div>
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
