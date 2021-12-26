<?php
session_start();
    include ('../perfil/perfil.php');
    $info[0]=$LCI;
    $info[1]='En Espera';
    $info[2]='Solicitudes';
    ################################################
     include('../../../database/data1.php'); 
    ################################################

    $tabla= new desiciones($donde='Historial',$info,$opc='Solicitudes');
    $r= $tabla->realizar();
    $array_s =  mysqli_fetch_assoc($r);
?>
 <style>
 .vetasr{
    font-family:  Arial, Helvetica, sans-serif;
font-size: 15px;
border: 1px solid #000;
 }
 </style>
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

                <link rel="stylesheet" href="../../../static/Css/Respodersolicitudes.css">

</head>
<style>
.invi{
display: none;
z-index: -9999;
opacity: 0;

}
</style>
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
                      <a class="colorr" href="#">Solicitudes</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido">
  <!-- es este espacio va la informacion -->

  <div class="TRCparte1">
   <h3>Control De Solicitudes</h3>
</div>
   <!-- buscador -->


<!-- semi-tabla -->
<div class="TRCparte3">
   <div class="scrol" >
   <table cellpadding="5">
        <thead>
            <tr>
                <th>N°: </th>
                <th>Cedula</th>
                <th>Requiere</th>
                <th>Realizada</th>
                <th>Responder</th>
                <th>Enviar</th>     
            </tr>
        </thead>

        <tbody class="Pintar2">
                <?php $html= "<tr> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        $prioridad=0;
do 
{ 
    if ($array_s != null || $array_s != "") 
    {
        $Peticiones= $array_s['ID_Peticiones'];
        $Cedula= $prioridad++;;
        $Cedula= $array_s['Cedula'].$Cedula;
        $html= "<tr id="."a".$Cedula."> 
                    <td>".$prioridad." </td>
                    <td>".$array_s['Nacionalidad']."-".$array_s['Cedula']." </td>
                    <td>".$array_s['Tipo_doc']." </td> 
                    <td>".$array_s['Solisitada']." </td>
                    <td><textarea class='vetasr' name=".'a'.$array_s['ID_Peticiones']."  id=".'a'.$array_s['ID_Peticiones']."  cols='17' rows='10'></textarea></td>
                    <td id='opc-iz'>         
                     <button class='btn btn-outline-dark elbnt icon icon-check unamas' onClick=' 
                     var msg= document.getElementById(".'"a'.$Peticiones.'"'.").value;
                    
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../Aprobar/Solicitudes.php"'.",
                        data:".'"Procesos="'."+".$array_s['ID_Peticiones']."+".'"&Cedula="'."+".$info[0]." +".'"&msg="+msg'." ,
                        success: function(data){
                         swal (".'"Listo"'." , ".'"La Solicitud fue Aprobada"'." , ".'"success"'.");  
                          $(".'"#a'.$Cedula.'"'.").addClass(".'"invi"'.");  
                        } 
                   });;'>  </button>
           
                <button class='btn btn-outline-dark elbnt icon icon icon-close unamas' onClick=' 
                var msg= document.getElementById(".'"a'.$Peticiones.'"'.").value;
               $.ajax({
                   type:".'"POST"'.",
                   url:".'"../Rechazar/Solicitudes.php"'.",
                   data:".'"Procesos="'."+".$array_s['ID_Peticiones']."+".'"&Cedula="'."+".$info[0]." +".'"&msg="+msg'." ,
                   success: function(data){
                    swal (".'"Listo"'." , ".'"La Solicitud fue Rechasada"'." , ".'"success"'.");  
                     $(".'"#a'.$Cedula.'"'.").addClass(".'"invi"'.");  
                   } 
              });;'>  </button>  </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 
                ?>                
        </tbody>
    </table>
   </div>
</div>

<input type="hidden" name="Cedula" value="<?php echo $LCI ?>" id="como">
<input type="hidden" name="Usuario" value="<?php echo$LUser?>" id="como1">
<input type="hidden" name="cedula_usuario" value="<?php echo $LCI ?>" id="cedula_usuario">

   
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

<script src="../../../static/Js/clasesA.js"></script>
<script src="../../../static/Js/envioA.js"></script>
