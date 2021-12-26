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
                <?php
if ( $tipo == $analista) { ?>
                <link rel="stylesheet" href="../../../static/Css/123A.css">
                <?php
            }
?>
                <?php
if ( $tipo == $gerente) { ?>
                <link rel="stylesheet" href="../../../static/Css/123G.css">
                <?php
            }
?>
</head>

<body>

<?php

   include ('../archive/precarga1.html'); 
   if ( $tipo == $analista) 
   { 
    include ('../perfil/permisos_A.php');
   };
   if ( $tipo == $estudiante) 
   { 
    include ('../perfil/permisos_E.php');
   };
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
<input type="hidden" value="<?php echo $LCI   ;?>"  name="cedula_usuario"  id="cedula_usuario">
<input type="hidden" value="<?php echo $LCI   ?>"   name="Cedula"          id="como">
<!-- contenido form(o otras cosas) -->
   <main class="contenido">
      <div id="texturas">
      <div class="mapa" >
         <nav aria-label="breadcrumb"  >
             <ol class="breadcrumb radius-1rem2r " style="margin-bottom:2px; padding-bottom: 9px">
                   <li class="breadcrumb-item active text-center" aria-current="page"> 
                      <i class="icon icon-home"></i> 
                      <a class="otrass" href="menu.php">Inicio</a>
                      <!-- <a class="otrass" href="../menu/menu.php">Inicio</a> -->
                  </li>
                  <!-- <li class="breadcrumb-item active text-center" aria-current="page"> 
                      <i class="icon icon-home"></i> 
                      <a class="colorr" href="inscripciones.php">Solisutud</a>
                  </li> -->
             </ol>
         </nav>
     </div>  
     </div>  
     <div class="elcontenido Pintar1"> 

  <!-- es este espacio va la informacion -->
<!-- Menu Analista -->
  <?php
if ( $tipo == $analista) { 
    ################################################
       $canti= new desiciones($donde='Panel',$info=$LCI,$opc='Analista');
       $r= $canti->realizar(); 
    ?>
 <div class="parre2">
      <div class="img_pri_1">
      <a href="../inscripciones/solicitudes_insN.php" class="col-lg-2">
               <!-- small box -->
         <div class="small-box btn-primary" id="nsa">
            <div class="inner">
               <h3><?php echo $r[4]; ?></h3>
               <p>Inscripciones</p>
            </div>
            <div class="icon">
               <i class="icon-news"></i>
            </div>
            <div>
            </div>
         </div>
      </a> 
      <a href="../trabajo/reclamos.php" class="col-lg-2">
               <!-- small box -->
         <div class="small-box btn-primary" id="nsa">
            <div class="inner">
               <h3><?php echo $r[2]; ?></h3>
               <p>Reclamos</p>
            </div>
            <div class="icon">
               <i class="icon-news"></i>
            </div>
            <div>

            </div>
         

         </div>
      </a>
      <a href="../trabajo/solicitudes.php" class="col-lg-2">
         <!-- small box -->
         <div class="small-box btn-primary"  id="nsa">
            <div class="inner">
               <h3><?php echo $r[3]; ?></h3>
               <p>Solicitudes</p>
            </div>
         <div class="icon">
            <i class="icon-news"></i>
         </div>
         <div>


         </div>


         </div>
      </a>
      <a href="../inscripciones/solicitudes_int.php" class="col-lg-2">
         <!-- small box -->
         <div class="small-box btn-primary"  id="nsa">
            <div class="inner">
               <h3><?php echo $r[0]; ?></h3>
               <p>Intensivos</p>
            </div>
         <div class="icon">
            <i class="icon-news"></i>
         </div>
         <div>

         
         </div>


         </div>
      </a>
      <a href="../inscripciones/solicitudes_rec.php" class="col-lg-2">
         <!-- small box -->
         <div class="small-box btn-primary"  id="nsa">
            <div class="inner">
               <h3><?php echo $r[1]; ?></h3>
               <p>Recuperación</p>
            </div>
         <div class="icon">
            <i class="icon-news"></i>
         </div>
         <div>

      
         </div>


         </div>
      </a>
 

      </div>  
      </div>
<?php
 }
?>
<!-- Menu Estudiante -->


<!-- Menu Gerente -->
<?php
if ( $tipo == $gerente) { 
        ################################################
        include('../../../database/data1.php'); 
        ################################################
    $canti2= new desiciones($donde='Panel',$info2=$LCI,$opc='Gerente');
    $r2= $canti2->realizar(); 
    
    ?>
 
 <div class="parre2">

 

<div class="img_pri_1">

      <a  class="col-lg-2" id="mmlcn">
               <!-- small box -->
         <div class="small-box btn-primary" id="nsa">
            <div class="inner">
            <h3><?php echo $r2[0]; ?></h3>
               <p>PNF</p>
            </div>
            <div class="icon">
               <i class="icon-news"></i>
            </div>
            <div>
            
            </div>
         

         </div>
      </a> 
      <a href="#" class="col-lg-2">
               <!-- small box -->
         <div class="small-box btn-primary" id="nsa">
            <div class="inner">
            <h3><?php echo $r2[1]; ?></h3>
               <p>Trabajadores</p>
            </div>
            <div class="icon">
               <i class="icon-news"></i>
            </div>
            <div>

            </div>
         

         </div>
      </a>
      <a href="#" class="col-lg-2">
         <!-- small box -->
         <div class="small-box btn-primary"  id="nsa">
            <div class="inner">
            <h3><?php echo $r2[2]; ?></h3>
               <p>Planificación</p>
            </div>
         <div class="icon">
            <i class="icon-news"></i>
         </div>
         <div>


         </div>


         </div>
      </a>

      <a href="#" class="col-lg-2">
         <!-- small box -->
         <div class="small-box btn-primary"  id="nsa">
            <div class="inner">
                 <h3><?php echo $r2[3]; ?></h3>
               <p>Procesos Activos</p>
            </div>
         <div class="icon">
            <i class="icon-news"></i>
         </div>
         <div>

      
         </div>


         </div>
      </a>


      </div>  
</div>
<?php
 }
?>
   
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

   <?php
if ( $tipo == $estudiante) {
?>
<script src="../../../static/Js/clases.js"></script>
<script src="../../../static/Js/envio.js"></script> 

   <?php
    }
if ( $tipo == $gerente) {
?>
<script src="../../../static/Js/clasesG.js"></script>
<script src="../../../static/Js/envioG.js"></script>

<?php }
if ( $tipo == $analista) {
    ?>
    <script src="../../../static/Js/clasesA.js"></script>
    <script src="../../../static/Js/envioA.js"></script>
    
    <?php }