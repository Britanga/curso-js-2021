<?php
    include ('../perfil/perfil.php');
?>
<nav class="menu"> 
   <div>
      <a href="../sudatos/datos.php" id="efectog">
      <i class="icon icon-settings"></i>
      </a>
   </div>
<ul>
<?php 
if ($tipo ==$profe) {
   ?>
<li>
   <i class="icon icon-wpforms" id="modulo2"></i>
   <p>Notas</p>
</li>
<li>
   <i class="icon  icon-edit2 " id="modulo1"></i>
   <p>Clase</p>
   <ul class="etectos-locos">
          <li> 
            <span class="icon icon-check-circle-o">
               <a id="opcCL3"href="../Clase/crear.php" >Crear</a>
            </span>
         </li>
         <li>
            <span class="icon icon-check-circle-o">
               <a  id="opcCL4" href="../Clase/control.php">Cargar</a>
            </span>
         </li>
      </ul>
</li>
<?php     
}

if ( $tipo == $estudiante) {
   ?>
   <li>
   <i class="icon icon-file-text-o" id="modulo5"></i>
   <p>Recuperación</p>
   <ul class="etectos-locos">
   <li id="opcC1" class="abiert" > 
         <span class="icon icon-check-circle-o">
            <a >Intensivo</a>
         </span>
      </li>

            <li id="opcC2" class="abiert" > 
         <span class="icon icon-check-circle-o">
            <a >Repitencia</a>
         </span>
      </li>
   
   </ul>
</li>
<?php 
}
if ( $tipo == $estudiante) {
   ?>
<li>
   <i class="icon icon-flag-o" id="modulo6"></i>
   <p>Inscripción</p>
   <ul class="etectos-locos" id="sete">

<?php  if ( $LInscrito== 'No') { ?>
      <li id="opcI1" class="abiert" > 
            <a style="font-size: 14px; "  >Nuevo Ingreso</a>
      </li>   
      <?php 
}
 if ( $LInscrito== 'Si') { ?>
      <li id="opcIAux" class="abiert" > 
            <a>Adelanto</a>
      </li>   
<?php } ?> 
      <li id="opcI2" class="abiert">
            <a >Actualizar</a> 
      </li>
      <li id="opcI3"  class="abiert">
            <a>Control</a>
      </li>
   </ul>
</li>
 
  <?php   }  

if ( $tipo ==$analista) {
   ?>
   <li>
   <i class="icon icon-file-powerpoint-o" id="modulo7"></i>
   <p>Planificacion</p>
   <ul class="etectos-locos">
         <li> 
            <span class="icon icon-check-circle-o">
               <a href="../Planificasion/nueva.php" id="opcPL1" >Crear</a>
            </span>
         </li>
         <li> 
            <span class="icon icon-check-circle-o">
               <a href="../Planificasion/mostrar.php" id="opcPL2">Mostrar</a>
            </span>
         </li>
      </ul>
      <!--  -->
</li> 

<?php 
} 
?>

 <?php 
if ( $tipo ==$gerente) {
   ?>
   <li id="GerentPlani">
   <i class="icon icon-product-hunt" id="modulo7"></i>
   <p>Planificacion</p>
   <ul class="etectos-locos" id="sete">
         <li id="opcPLG1"   class="abiert" > 
               <a href="../Planificasion/NuevasG.php" > Nuevas</a>
         </li>
         <li id="opcPLG3" class="abiert" > 
               <a href="../Planificasion/AprobadasG.php" > Aprobadas</a>
         </li >
         <li id="opcPLG4" class="abiert" > 
               <a href="../Planificasion/RechasadasG.php" > Rechazadas</a>
         </li>
      </ul>
</li> 
<li>
   <i class="icon icon-child" id="modulo10"></i>
   <p>Trabajadores</p>
   <ul class="etectos-locos" id="sete">
         <li id="opcTG1" class="abiert"> 
               <a> Nuevo</a>
         </li>
         <li id="opcTG2" class="abiert"> 
               <a> Reguistrados</a>
         </li>
      </ul>
</li>

<?php  
}
if ( $tipo == $estudiante) {
   ?>

   <li>
      <i class="icon icon-frown-o" id="modulo4"></i>
      <p>Reclamos</p>
      <ul class="etectos-locos">
         <li id="opcR1"> 
            <span class="icon icon-check-circle-o">
               <a>Crear</a>
            </span>
         </li>
         <li>
            <span class="icon icon-check-circle-o">
               <a id="opcR2"  href="../Reclamos/control.php" >Control</a>
            </span>
         </li>
      </ul>
   </li>
   <li>
      <i class="icon  icon-folder-o" id="modulo3"></i>
      <p>Solicitudes</p>
      <ul class="etectos-locos" id="sete">
         <li id="opcS1" class="abiert">
               <a>Record De Notas</a>
         </li>
         <li id="opcS2" class="abiert">
               <a>Carta De Comportamiento</a>
         </li>
         <li id="opcS3" class="abiert">
               <a>Historial Academico</a>
         </li>
         <li id="opcS4" class="abiert">
               <a>Control</a>
         </li>
      </ul>
   </li>
<?php  
}
if ( $tipo ==$analista) { 
?>
<li>
   <i class="icon  icon-edit2 " id="modulo1"></i>
   <p>Trabajo</p>
   <ul class="etectos-locos " id="sete">
         <li id="opcT1" class="abiert">   
               <a href="../trabajo/solicitudes.php">Solicitudes</a>   
         </li>
         <li id="opcT2" class="abiert">
               <a href="../trabajo/reclamos.php" >Reclamos</a>
         </li>  
   </ul>
</li>
<li>
   <i class="icon icon-flag-o" id="modulo6"></i>
   <p>Inscripción</p>
   <ul class="etectos-locos" id="sete">
      <li id="opcI4" class="abiert" > 
            <a>Nuevo Ingreso</a>
      </li>
      <li  id="opcI5" class="abiert" > 
            <a>Adelanto</a>
      </li>
      <li id="opcI6" class="abiert" > 
            <a>Reparacion</a>
      </li>
      <li id="opcI7" class="abiert" >
            <a>Intensivo</a>
      
      </li>

   </ul>
</li>
<?php 
}
if ($tipo ==$gerente ) {
?>
<li>
   <i class="icon  icon-edit2 " id="modulo1"></i>
   <p>Procesos</p>
   <ul class="etectos-locos " id="sete">
         <li  id="opcA1" class="abiert" >   
               <a> Abrir Intensivos</a>   
         </li>
         <li id="opcA2" class="abiert" >
               <a> Abrir Inscripciones</a>
         </li>
         <li id="opcA3" class="abiert" >
               <a> Abrir Reparaciones</a>
         </li>
         <li id="opcA4" class="abiert" >
               <a> Control</a>
         </li>
         
   </ul>
</li>
<li>
   <i class="icon icon-shield" id="modulo12"></i>
   <p>Mantenimiento</p>
   <ul class="etectos-locos " id="sete">
     
         <li  id="opcM3" class="abiert">
               <a> Control de PNF</a>
         </li>
         <li id="opcM4" class="abiert">
               <a > Control de Materia</a>
         </li>
         <li id="opcM1" class="abiert">   
               <a > Respaldo De La BDD</a>   
         </li>
         <li id="opcM2" class="abiert">
               <a > Restaurar la BDD </a>
         </li>
   </ul>
</li> 
<?php 
}
?>
</ul>
</nav>