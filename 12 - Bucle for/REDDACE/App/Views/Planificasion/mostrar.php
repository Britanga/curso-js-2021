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
  <link rel="stylesheet" href="../../../static/Css/MostrarPlani.css">


</head>

<body>
<?php

   include ('../archive/precarga1.html');

?>
    <!-- inicio  MSJ emerjentes para el analista-->
    <?php
if ( $tipo == $analista) {
    # code...
             include ('../archive/buscarEST.php');
            
            }
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
                      <a class="colorr" href="mostrar.php">Control De Planificaciones</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido" style="width: 98%;">
  <!-- es este espacio va la informacion -->


  <div class="parre2">

<div class="que">
   <h3>Control De Planificaciones</h3>
   <div class="buscardores">
  

      <input type="text" placeholder="Matricula">
      <select name="Tipo" id="Tipo">
         <option value="">Tipo</option>
         <option value="Intencivo">Intensivo</option>
         <option value="Repitencia">Repitencia</option>
         <option value="Inscripcion">Inscripción</option>
      </select>
   </div>
</div>

<div class="img_pri_1">

<a href="Tabla.php" class="col-lg-2">
         <!-- small box -->
   <div class="small-box btn-primary" id="nsa">
      <div class="inner">
         <h3>0</h3>
         <p>Estudiantes</p>
      </div>
      <div class="icon">
         <i class="icon-news"></i>
      </div>
      <div>
            <center>
                  <p> 
                     T?-F?
                  </p>
            </center>
            <p class="pClase"> 
                     Matricula: 2030
                  </p>
                  <p class="pClase"> 
                     Tipo:Inscripción
                  </p>
      </div>
   

   </div>
</a> 

<a href="Tabla.php" class="col-lg-2">
         <!-- small box -->
   <div class="small-box btn-primary" id="nsa">
      <div class="inner">
         <h3>0</h3>
         <p>Estudiantes</p>
      </div>
      <div class="icon">
         <i class="icon-news"></i>
      </div>
      <div>
            <center>
                  <p> 
                     T?-F?
                  </p>
            </center>
            <p class="pClase"> 
                     Matricula: 2030
                  </p>
                  <p class="pClase"> 
                     Tipo:Inscripción
                  </p>
      </div>
   

   </div>
</a> 

<a href="Tabla.php" class="col-lg-2">
         <!-- small box -->
   <div class="small-box btn-primary" id="nsa">
      <div class="inner">
         <h3>0</h3>
         <p>Estudiantes</p>
      </div>
      <div class="icon">
         <i class="icon-news"></i>
      </div>
      <div>
            <center>
                  <p> 
                     T?-F?
                  </p>
            </center>
            <p class="pClase"> 
                     Matricula: 2030
                  </p>
                  <p class="pClase"> 
                     Tipo:Inscripción
                  </p>
      </div>
   

   </div>
</a> 
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
<script src=""></script>
   <?php
if ( $tipo == $analista) {
    # code...
    include ('../archive/jq_SL_A.php');
            }
?>