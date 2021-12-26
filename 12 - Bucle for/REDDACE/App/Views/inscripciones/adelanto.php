<?php

session_start();
    include ('../perfil/perfil.php');  

 //  variables
 $opc='Inscripcion';         //  
 $donde ='Procesos';       //
 $info[0] =$LCI;       //
 $info[1] ='Adelanto';       //
################################################
include('../../../database/data1.php'); 
################################################
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################
// debo de consegir el ID_del Proceso
$Qpasa1= substr($respuesta, -1, 1); 
$Qpasa2= substr($respuesta, -2, 1); 
$Qpasa3= substr($respuesta, -10, 10);
$Qpasa4= substr($respuesta, 0, 1);
$Qpasa5= substr($respuesta, 0, 2);
// validacion2020-11-22
// if (1 != 0) {
//     echo "<script> swal ('Disculpe' , '$respuesta' , 'warning');</script>";
//     die();
// }
if ($respuesta== 7) {
  echo "<script> swal ('Disculpe' , 'El Proceso De Inscripcion No Esta Habilitado Aun!' , 'warning');</script>";
  die();
}
if ($Qpasa4 == 8) {
  echo "<script> swal ('Disculpe' , 'El Proceso De Inscripcion no ha Empezado Aun Comienza para $Qpasa3 ' , 'warning');</script>";
  die();
}
if ($Qpasa2== 3) {
  echo "<script> swal ('Disculpe' , 'Sus Datos ya fueron Enviados y ya no pueden ser editados, ni enviados de nuevo' , 'warning');</script>";
  die();
}
if ($Qpasa2== 6 ) {
  echo "<script> swal ('Disculpe' , 'Intente De Nuevo' , 'info');</script>";
  die();
}
if ($Qpasa5== 12) {
  echo "<script> swal ('Disculpe' , 'No hay procesos de inscripcion en estos momentos ' , 'info');</script>";
  die();
}
if ($Qpasa5== 14) {
  echo "<script> swal ('Disculpe' , 'Intente De Nuevo' , 'info');</script>";
  die();
}

else 
{
  if ($Qpasa2 == 1) 
  {
    echo "<script> swal ('Aviso' , 'Aun Puede Editar Sus Datos' , 'info');</script>";
  }
  if ($Qpasa2 == 4) 
  {
    echo "<script> swal ('Aviso' , 'Aun no ha realizado su proceso de inscripcion' , 'info');</script>";
  }
    ?>
<style>
.OPC1parte0 {grid-area: parte0;}
.OPC1parte1 {grid-area: parte1;}
.OPC1parte2 {grid-area: parte2;}
.OPC1parte3 {grid-area: parte3;}
.OPC1parte4 {grid-area: parte4;}
.OPC1parte5 {grid-area: parte5;}
.OPC1parte6 {grid-area: parte6;}
#Recork_Nota {
    justify-content: start;
    align-content: flex-start;
}
</style>

<div id="Recork_Nota" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
 
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Adelanto</div>
            <div class="" >
        
        <div class="enjertopros" >        
            <form id="recork" method="" >
              <br>
              <br> 
              <div class="OPC1parte0">
                  <center>  <b> *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                         <select class="robo"   disabled >
                             <option value=""></option>
                         </select>
                      </div>
                     </div>
                     <div class="OPC1parte1">
                  <center>  <b>Trayecto Actual *</b></center>
                  <div  class="mat-form-field-SRM"></div>
                      <div>
                         <select class="robo" name="TrayectoV" id="TrayectoV" required>
                             <option value="">Opciones</option>
                             <option value="Ts">Ts</option>
                             <option value="T1">T1</option>
                             <option value="T2">T2</option>
                             <option value="T3">T3</option>
                         </select>
                      </div>
                     </div>
                    
                      <div class="OPC1parte2">
                   <center>  <b>Fase Actual*</b> </center>
                     <div  class="mat-form-field-SRM"> </div>
                      <div>
                         <select class="robo" name="FaseV" id="FaseV" required>
                            <option value="">Opciones</option>
                             <option value="F1">F1</option>
                             <option value="F2">F2</option>
                         </select>
                      </div>
                     </div>
         
                     <div class="OPC1parte3">
                        <center>  <b>Nuevo Trayecto *</b></center>
                        <div  class=" mat-form-field-SRM"></div>
                            <div>
                                <select class="robo" name="TrayectoN" id="TrayectoN" required>
                                    <option value="">Opciones</option>
                                    <option value="T1">T1</option>
                                    <option value="T2">T2</option>
                                    <option value="T3">T3</option>
                                    <option value="T4">T4</option>  
                                </select>
                            </div>
                           </div>
                          
                     <div class="OPC1parte4">
                         <center>  <b>Nueva Fase*</b> </center>
                           <div  class=" mat-form-field-SRM"></div>
                            <div>
                                <select class="robo" name="FaseN" id="FaseN" required>
                                    <option value="">Opciones</option>
                                     <option value="F1">F1</option>
                                     <option value="F2">F2</option>
                                 </select>
                            </div>
                     </div>
                     <input type="hidden" name="algoSi"         value="<?php echo $Qpasa1 ?>" id="algoSi">
                     <input type="hidden" name="cedula_usuario" value="<?php echo $LCI ?>"    id="cedula_usuario">
                     <div class="OPC1parte5 canselarr">
                        <button class="boton mat-raised-button efecto-btn-1" type="button" id="canselarOPC1">
                           <span class="mat-button-wrapper">Cancelar</span>
                        </button>
                    </div>
                    <div class="OPC1parte6 aceptar" >
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC1">
                        <span>Procesar</span>
                     </button>
                 </div>

                 </form>
            </div>
         
        <div class="maguia-button__loader">
          <div></div>
          <div></div>
          <div></div>
        </div>
    
      </div></div></div></div>
      <div id="comunicasion">

      </div>
      <script>
  $("#canselarOPC1").click(function (){
    $('#Recork_Nota').addClass('atractivo');
    setTimeout(
              function(){
                $('#Recork_Nota').removeClass('atractivo');
                $('#Recork_Nota').addClass('listacono');
                },1400
              );
    return false;
  });
</script>
<script>
document.querySelector("#procesarOPC1").addEventListener('click',procesarOPC1);
        function procesarOPC1()
        {       
                var r0 = document.getElementById('cedula_usuario').value;
                var r1 = document.getElementById('TrayectoV').value;
                var r2 = document.getElementById('FaseV').value;
                var r3 = document.getElementById('TrayectoN').value;
                var r4 = document.getElementById('FaseN').value;
                var r5 = document.getElementById('algoSi').value;
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5;
                var url  = '../Aprobar/Adelanto.php';
                // Mostar
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();
        }
</script>  
<?php
    die();
  }  
?> 