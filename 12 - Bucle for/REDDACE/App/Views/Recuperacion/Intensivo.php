<?php

session_start();
    include ('../perfil/perfil.php');  

 //  variables
 $opc='Intensivo';         // 
 $donde ='Procesos';       //
 $info =$LCI;       //
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
// validacion2020-11-22
// if (1 != 0) { 
//     echo "<script> swal ('Disculpe' , '$Qpasa4' , 'warning');</script>";
//     die();
// }
if ($respuesta== 7) {
  echo "<script> swal ('Disculpe' , 'El proceso de Intensivo no esta Habilitado Aun' , 'warning');</script>";
  die();
}
if ($Qpasa4 == 8) {
  echo "<script> swal ('Disculpe' , 'El proceso de Intensivo no ha empezado Aun.. Comienza para $Qpasa3 ' , 'warning');</script>";
  die();
}
if ($Qpasa2== 3) {
  echo "<script> swal ('Disculpe' , 'Sus Datos ya fueron Enviados y ya no pueden ser editados ni enviados de nuevo' , 'warning');</script>";
  die();
}
if ($Qpasa2== 6 ) {
  echo "<script> swal ('Disculpe' , 'Intente de nuevo!' , 'info');</script>";
  die();
}
if ($Qpasa4== 5) {
  echo "<script> swal ('Disculpe' , 'No Hay Procesos De Intensivo En Estos Momentos! ' , 'info');</script>";
  die();
}
if ($Qpasa4== 9) {
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
    echo "<script> swal ('Aviso' , 'Aun No Ha Realizado Su Proceso De Intensivo' , 'info');</script>";
  }
    ?>
 
<div id="nuebe18">

      

<link rel="stylesheet" href="../../../static/Css/tablaD_REC.css">
  <div class="TRMparte1">
   <h3>Solicitud De Intensivo</h3>
</div>
   <!-- buscador -->
<div class="TRMparte2">
<div class="parre1">
  
    <div>
        <select class="robo Pintar3" name="PNF" id="PNF" required >
          </select>  
      </div>
      <div>
          <select class="robo" name="Trayecto" id="Trayecto"  required>
              <option value="">Trayecto Actual</option>
              <option value="Ts">Ts</option>
              <option value="T1">T1</option>
              <option value="T2">T2</option>
              <option value="T3">T3</option>
              <option value="T4">T4</option>  
            </select>  
        </div>
        <div>
            <select class="robo" name="Fase" id="Fase"  required>
                <option value="">Fase Actual</option>
                <option value="F1">F1</option>
                <option value="F2">F2</option>
              </select>  
          </div>

      </div>
</div>

<!-- semi-tabla -->
<div class="TRMparte3">
        <div class="dondeQ">
                    <h3 class="TRMparte3-1" >Periodo 2020</h3>
        </div>
        <div class="medioQ">
            <div class="lado1 paradonde">

                <div>
                      <p>1</p>
                </div>
                
                <div>
                  <select class="robo" name="Trayecto1" id="Trayecto1" required>
                      <option value="T1">Trayecto</option>
                      <option value="Ts">Ts</option>
                      <option value="T1">T1</option>
                      <option value="T2">T2</option>
                      <option value="T3">T3</option>
                      <option value="T4">T4</option>  
                    </select>  
                </div>

                <div>
                     <select class="robo" name="Fase1" id="Fase1" required>
                        <option value="">Fase</option>
                         <option value="F1">F1</option>
                         <option value="F2">F2</option>
                     </select>
                </div>

                    <div>
                      <select name="materia1" class="robo" id="materia1" required>
                            <option value=""> Materia </option>
                      </select>
                    </div>

                </div>
                <div class="lado2 paradonde">
                    <div>
                        <p>2</p>
                  </div>
                  
                  <div>
                    <select class="robo" name="Trayecto2" id="Trayecto2" >
                        <option value="">Trayecto</option>
                        <option value="Ts">Ts</option>
                        <option value="T1">T1</option>
                        <option value="T2">T2</option>
                        <option value="T3">T3</option>
                        <option value="T4">T4</option>  
                      </select>  
                  </div>

                  <div>
                       <select class="robo" name="Fase2" id="Fase2" >
                          <option value="">Fase</option>
                           <option value="F1">F1</option>
                           <option value="F2">F2</option>
                       </select>
                  </div>

                      <div>
                        <select name="materia2" class="robo" id="materia2" >
                            <option value=""> Materia </option>
                        </select>
                      </div>
                </div>
        </div>
        <input type="hidden" name="algoSi"   value="<?php echo $Qpasa1 ?>" id="algoSi">
        <input type="hidden" name="Original" value="<?php echo $LCI ?>"    id="Original">
        <div class="chaoQ">
            <h3 class="TRMparte3-1" > <input type="button" value="Enviar" id="intenzo12">   </h3>

        </div>
</div>

<div id="comunicasion">
    
    </div>
</div>   

<script>
 $(document).ready(function(){
    $("#PNF").change(function () {
        $('#Trayecto1').find('option').remove().end().append('<option value="">Trayecto</option><option value="Ts">Ts</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#materia1').find('option').remove().end().append('<option value=""></option>').val('');
        $('#Trayecto2').find('option').remove().end().append('<option value="">Trayecto</option><option value="Ts">Ts</option><option value="T1">T1</option><option value="T2">T2</option><option value="T3">T3</option><option value="T4">T4</option>').val('');
        $('#materia2').find('option').remove().end().append('<option value=""></option>').val('');
        });
    });
</script>
<script >
    $(document).ready(function(){
        $("#Trayecto2").change(function () {
    
            
            $("#PNF option:selected").each(function () {
                                 Carreras = $(this).val();
                $("#Trayecto2 option:selected").each(function () {
                trayecto1 = $(this).val();
                         });
                $.post("../Combo-box/D-box-materias.php", { Carreras: Carreras, trayecto1: trayecto1 }, function(data){
                    $("#materia2").html(data);
                   
                });      
    
                   
            });
        })
    
            $("#Fase2").change(function () {
                
    
                $("#PNF option:selected").each(function () {
                   Carreras = $(this).val();
                        $("#Trayecto2 option:selected").each(function () {
                        trayecto1 = $(this).val();
                                });
                                    $("#Fase2 option:selected").each(function () {
                                        fase1 = $(this).val();
                                    });
                    $.post("../Combo-box/D-box-materias.php", { Carreras: Carreras, trayecto1: trayecto1, fase1: fase1 }, function(data){
                        // console.log(data);
                        $('#materia2').find('option').remove().end().append('<option value=""></option>').val('');
                        $("#materia2").html(data);
                    });      
        });
    })
            
    });
    
    </script>  




       <script >
$(document).ready(function(){
    $("#Trayecto1").change(function () {

        
        $("#PNF option:selected").each(function () {
                             Carreras = $(this).val();
            $("#Trayecto1 option:selected").each(function () {
            trayecto1 = $(this).val();
                     });
            $.post("../Combo-box/D-box-materias.php", { Carreras: Carreras, trayecto1: trayecto1 }, function(data){
                $("#materia1").html(data);
               
            });      

                
        });
    })
        $("#Fase1").change(function () {
            

            $("#PNF option:selected").each(function () {
               Carreras = $(this).val();
                    $("#Trayecto1 option:selected").each(function () {
                    trayecto1 = $(this).val();
                            });
                                $("#Fase1 option:selected").each(function () {
                                    fase1 = $(this).val();
                                });
                $.post("../Combo-box/D-box-materias.php", { Carreras: Carreras, trayecto1: trayecto1, fase1: fase1 }, function(data){
                    // console.log(data);
                    $('#materia1').find('option').remove().end().append('<option value=""></option>').val('');
                    $("#materia1").html(data);
                });      
    });
})
        
});

</script>  
<script>
$(document).ready(function () 
{  
  $("#intenzo12").click(function (){
                var r0  = document.getElementById('Original').value;
                var r1  = document.getElementById('PNF').value;
                var r2  = document.getElementById('Trayecto').value;
                var r3  = document.getElementById('Fase').value;

                var r4  = document.getElementById('Trayecto1').value;
                var r5  = document.getElementById('Fase1').value;
                var r6  = document.getElementById('materia1').value;

                var r7  = document.getElementById('Trayecto2').value;
                var r8  = document.getElementById('Fase2').value; 
                var r9  = document.getElementById('materia2').value;

                var r10 = document.getElementById('algoSi').value;
                var data='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5+'&r6='+r6+'&r7='+r7+'&r8='+r8+'&r9='+r9+'&r10='+r10;
                var url  = '../Recuperacion/Guardar_in.php'; 
                // Mostar  
                // console.log(data); 
                var Mostar = new Solicitud(data,url);  
                var respuesta = Mostar.Mostar();  
       return false;
    });
}); 

</script> 
 <script>
    $(document).ready(function(){
    
                var url  = '../Combo-box/D-box-PNF.php';
                    // Mostar
                    var data=1;
                    var Pintar3 = new Solicitud(data,url);   
                    var respuesta = Pintar3.Pintar3();

    });
</script>
<?php
    die();
  }  
?> 