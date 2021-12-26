<?php
session_start();
    include ('../perfil/perfil.php');  
################################################

?> 

 
<link rel="stylesheet" href="../../../static/Css/nuevo_ingreso.css">
<div id="nuebe12">



<div class="radio-brose">
  <form id="nuevo_ingreso">
     <div class="radio-agru"> 
              <h2>Requisito</h2>
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
             <input type="hidden" name="Original" value="<?php echo $LCI ?>" id="Original">
             <input type="button" value="Actualizar" class="seras" id="Solicitar">
  </form>
</div>
    <div id="comunicasion">


    </div>

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
$(document).ready(function () 
{  
  $("#Solicitar").click(function (){
            var data=$('#nuevo_ingreso').serializeArray(); 
            var url  ='../inscripciones/pedir2.php';  
            // console.log(data);
                var Mostar = new Solicitud(data,url);   
                var respuesta = Mostar.Mostar(); 
       return false;
    });
}); 
</script> 
</div>
