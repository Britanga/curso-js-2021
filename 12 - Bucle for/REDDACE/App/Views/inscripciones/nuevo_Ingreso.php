<?php

session_start();
    include ('../perfil/perfil.php');  

 //  variables
 $opc='Inscripcion';         //  
 $donde ='Procesos';       //
 $info[0] =$LCI;       //
 $info[1] ='Inscripcion';       //
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


 
<link rel="stylesheet" href="../../../static/Css/nuevo_ingreso.css">
<div id="nuebe">

  <div class="algo" id="veamos"> 
   <p>Solicitud de inscripción</p>
</div>

<div class="CSelect">
  <div class="paraCarrera">
    <select name="Carreras" class="CSelect Pintar3" id="Carreras">
        <option value=""> Seleccione una Carrera </option>
    </select>
   </div>
</div>

<div class="contenido-Cat">
<div class="card">
<div class="card-img"></div>
<div class="card-text">
  <span class="date" id="agregada"> </span>
  <h2>Titulos</h2>
  <p id="Qes1"> </p>
  <p id="Qes2"> </p>
</div>
<div class="card-stats">
  <div class="stat">
     <div class="value" id="QDuracion"> <sup></sup></div>
     <div class="type">Duracion</div>
        </div>
        <div class="stat border1">
           <div class="value" id="Qcupos"></div> 
           <div class="type">Cupos</div>
              </div>
              <div class="stat">
                 <div class="value" id="Qmaterias"> </div>
                 <div class="type">Materias</div>
                    </div>
</div>
</div>
</div>

<div class="radio-brose">
  <form id="nuevo_ingreso">
     <div class="radio-agru"> 
              <h2>Requisitos</h2>
        <div class="todos-requisitos">

        <div class="requisitos">
              <p>Foto Tipo Carnet:</p>
              
              <div class="radi">
              <input type="radio" name="foto" id="foto02"  value="no">
              <label for="foto02" id="fotono" >No</label>
              <input type="radio" name="foto" id="foto01" value="si">
              <label for="foto01" id="fotosi" >Si</label>
              </div>
              
        </div>

        <div class="requisitos">
           <p>Cedula De Identidad:</p>
           
           <div class="radi">
           <input type="radio" name="cedula" id="cedula02"  value="no">
           <label for="cedula02" id="cedulano">No</label>
           <input type="radio" name="cedula" id="cedula01"  value="si">
           <label for="cedula01" id="cedulasi">Si</label>
        </div>
        
        </div>
        <div class="requisitos">
                <p>Notas Certificadas:</p>
                
                <div class="radi">
                        <input type="radio" name="nota" id="notas02"  value="no">
                        <label for="notas02" id="notano">No</label>
                        <input type="radio" name="nota" id="notas01" value="si">
                        <label for="notas01" id="notasi">Si</label>
                    </div>
                
          </div>
  
          <div class="requisitos">
                <p>Titulo Fondo Negro</p>
             
             <div class="radi">
                    <input type="radio" name="titulo" id="titulo02"  value="no">
                    <label for="titulo02" id="titulono">No</label>
                    <input type="radio" name="titulo" id="titulo01" value="si">
                    <label for="titulo01" id="titulosi">Si</label>
                 </div>
          
          </div>
  
          <div class="requisitos">
                <p>Certificado De Salud</p>
                
                <div class="radi">
                        <input type="radio" name="salud" id="salud02"  value="no">
                        <label for="salud02" id="saludno">No</label>
                        <input type="radio" name="salud" id="salud01" value="si">
                        <label for="salud01" id="saludsi">Si</label>
                     </div>
             
             </div>
             </div>
             <input type="hidden" name="algoSi" value="<?php echo $Qpasa1 ?>" id="algoSi">
             <input type="hidden" name="algoNo" id="algoNo">
             <input type="hidden" name="Original" value="<?php echo $LCI ?>" id="Original">
             <input type="button" value="Solicitar" id="Solicitar">
  </form>
</div>
<div id="comunicasion">
</div>
   
    <script >
    $(document).ready(function(){
    $("#Carreras").change(function () {
                            $('#Qmaterias').html('');
                            $('#QDuracion').html('');
        
        $("#Carreras option:selected").each(function () {
                                    Carreras = $(this).val();
                    $.ajax({   
                        type:"POST", 
                        url:'../Combo-box/box-materias.php', 
                        dataType: 'json',
                        data:'Carreras='+Carreras, 
                        success:function(res1)  
                        {
                            if (res1== null) {
                                $("#Qmaterias").html(''); 
                                    $("#QDuracion").html('');
                                    $("#agregada").html('');
                                    $("#Qes1").html('');
                                    $("#Qcupos").html('');
                                    $("#Qes2").html('');
        swal ('Disculpe' , 'la carrera seleccionadana no tiene cupos' , 'warning');
                            }else{
                               
                                    $("#Qes2").html('En '+Carreras);
                                    $("#Qmaterias").html(res1[0]); 
                                    $("#QDuracion").html(res1[1]);
                                    $("#agregada").html(res1[2]);
                                    $("#Qes1").html(res1[3]);
                                    $("#Qcupos").html(res1[4]);
                            }
                      
                        }
                    });   
            });    
    })
});
</script>  

<!-- jq profios -->
<script>
  $(document).ready(function(){
    $("#foto01").click(function () {
        $('#fotosi').addClass('si');
        $('#fotono').removeClass('no');
        $('#lafoto').removeClass('invi');
        $('#lafoto').addClass('noinvi');
    })
      $("#foto02").click(function () {
        $('#fotono').addClass('no');
        $('#fotosi').removeClass('si');
        $('#lafoto').removeClass('noinvi');
        $('#lafoto').addClass('invi');
    })
    //  2
    $("#cedula01").click(function () {
        $('#cedulasi').addClass('si');
        $('#cedulano').removeClass('no');
        $('#lacedula').removeClass('invi');
        $('#lacedula').addClass('noinvi');
    })
    $("#cedula02").click(function () {
        $('#cedulano').addClass('no');
        $('#cedulasi').removeClass('si');
        $('#lacedula').removeClass('noinvi');
        $('#lacedula').addClass('invi');
    })
    //  3
    $("#notas01").click(function () {
        $('#notasi').addClass('si');
        $('#notano').removeClass('no');
        $('#lanota').removeClass('invi');
        $('#lanota').addClass('noinvi');
    })
    $("#notas02").click(function () {
        $('#notano').addClass('no');
        $('#notasi').removeClass('si');
        $('#lanota').removeClass('noinvi');
        $('#lanota').addClass('invi');
    })
    //  4
    $("#titulo01").click(function () {
        $('#titulosi').addClass('si');
        $('#titulono').removeClass('no');
        $('#eltitulo').removeClass('invi');
        $('#eltitulo').addClass('noinvi');
    })
    $("#titulo02").click(function () {
        $('#titulono').addClass('no');
        $('#titulosi').removeClass('si');
        $('#eltitulo').removeClass('noinvi');
        $('#eltitulo').addClass('invi');
    })
    //  5
    $("#salud01").click(function () {
        $('#saludsi').addClass('si');
        $('#saludno').removeClass('no');
        $('#lasalud').removeClass('invi');
        $('#lasalud').addClass('noinvi');
    })
    $("#salud02").click(function () {
        $('#saludno').addClass('no');
        $('#saludsi').removeClass('si');
        $('#lasalud').removeClass('noinvi');
        $('#lasalud').addClass('invi'); 
    })
  });
</script>
 <script>
  $(document).ready(function(){
          $('#Carreras').change(function(){
            var Especialida=document.getElementById('Carreras').value;
                $('#algoNo').val(Especialida);
                
        return false;
          });
  });
  
   </script>
<script>  
$(document).ready(function () 
{  
  $("#Solicitar").click(function (){
            var data=$('#nuevo_ingreso').serializeArray(); 
            var url  ='../inscripciones/pedir.php';  
            // console.log(data);
                var Mostar = new Solicitud(data,url);   
                var respuesta = Mostar.Mostar();
       return false;
    });
}); 
</script> 
<!-- buscar PNF -->
<script>
    $(document).ready(function(){
    
                var url  = '../Combo-box/D-box-PNF.php';
                    // Mostar
                    var data=1;
                    var Pintar3 = new Solicitud(data,url);   
                    var respuesta = Pintar3.Pintar3();

    });
</script>

</div>
<?php
    die();
  }  
?> 