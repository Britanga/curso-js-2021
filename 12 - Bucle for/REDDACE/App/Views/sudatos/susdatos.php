
<style>
    .invi{
        display: none;
    }
.grin{ 
 background-color: azure;
 display: grid;
 grid-template-columns: 280px;
 grid-template-rows: 40px repeat(6 , 65px) 40px;
 grid-gap: 2px;
 padding: 6px;
 justify-content: center;
 align-items: center;
 border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
.lado2 > input{
color: #000000;
}
.lado2 > input[disabled]{
background-color: aliceblue;
color: grey;
}

.lado2 > p{
    margin-bottom: 0 !important;
    font-family: Arial, Helvetica, sans-serif;
}
.robo {
 margin-top: 0 !important;
}
.lado1 {
    font-family: ROBOTO;
    font-weight: bold;
    text-align: center;
    font-size: 30px;
}
.lado3{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-flow: row wrap;
}

</style>
<?php

// error_reporting(0);
// ///////////////////////////////////////////
$opc='DatosPersonal';
$donde='Vistas';
############  USUARIO  ########################
$info=strtolower($_POST['Cedula']);;
################################################
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion  
    $controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 

if ($r[9] == 'V' || $r[9] == 'v') {
    $r[9] ='Venezulano';    
}else{
    $r[9] ='Extranjero'; 
}
$opc='Estado';
$donde='Estudiante';
  $controlando= new desiciones($donde,$r[1],$opc);
$rr= $controlando->realizar(); 
################################################
################################################ 
// echo json_encode($ara);
$HTML='';

$HTML= 
'

<form id="dato1">
        <div class="grin">
                <div class="lado1"> 
                    <h3 id="nda">Mostar</h3>  
                    <h3 class="invi prues">Editar</h3>  
                </div>

            <div class="lado2"> 
                <p class="oculatp">*Nacionalidad:</p>
                <input type="text" class="robo oculati" name="nacionalidad" value="'.$r[9].' "  disabled >
                <input type="hidden" class="robo estoes veri" name="Nombre1" value="'.$r[2].'"  required id="Nombre1" placeholder="Primer Nombre">
            </div>

            <div class="lado2"> 
                <p class="oculatp">*Cedula:</p>
                <input type="hidden" value="'.$r[1].' "id="suCedula" >
                <input  class="robo oculati" value="'.$r[1].' " disabled >
                <input type="hidden" class="robo estoes veri" name="Nombre2" value="'.$r[3].'"required id="Nombre2" placeholder="Segundo Nombre">

            </div>

            <div class="lado2"> 
                <p class="oculatp">*Nombre Completo:</p>
                <input  class="robo oculati"  value="'.$r[2].' '.$r[3].' '.$r[4].' '.$r[5].' "    disabled  >
                <input type="hidden" class="robo estoes veri" name="Apellido1" value="'.$r[4].'" required id="Apellido1" placeholder="Primer Apellido">

            </div>
        <div class="lado2">  
            <p class="oculatp">*Fecha de Nacimiendo:</p>
            <input class="robo oculati"  value="'.$r[8].' " disabled >
            <input type="hidden" class="robo estoes veri" name="Apellido2" value="'.$r[5].'" required id="Apellido2" placeholder="Primer Apellido">
        </div>

            <div class="lado2"> 
                <p class="oculatp">* Matricula:</p> 
                <input class="robo oculati" value="'.$rr[0].' " disabled >
                <input type="hidden" class="robo estoes veri" name="Matricula"  id="Matricula" placeholder="matricula">
            </div>
        <div class="lado2"> 
            <p class="oculatp">* Estado:</p> 
            <input  class="robo oculati" value="'.$rr[1].' " disabled >
            <input type="password" class="robo estoes invi prues" name="pass" required id="pass" placeholder="Contraseña">
            <input type="hidden"  name="passbuena" value="'.$r[10].'" id="passbuena" >
        </div>
      
     
            <div class="lado2 lado3" >
                    <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Editar">
                        <span>Editar</span>
                    </button>
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 invi prues"   id="Guardar">
                            <span>Guardar</span>
                    </button>
            </div>
        </div>
</form>
';




echo $HTML;
// lo dibujo primero en HTML y
// despues lo manda como HTML con un 
// echo desde esta archivo
 
################################################
################################################
// fin
?>
<script>

document.querySelector('#Editar').addEventListener('click',ocultar);
    function ocultar(){
        $('.oculati').css('display', 'none');
        $('.oculatp').css('display', 'none');
        $('.veri').removeAttr('type', false);
        $('#Editar').css('display', 'none'); 
        $('#nda').css('display', 'none'); 
        $('.invi').removeClass('invi'); 
    }
document.querySelector("#Guardar").addEventListener('click',editar);
function editar()
{
        var r1  = document.getElementById('suCedula').value; 
        var r2  = document.getElementById('Nombre1').value; 
        var r3  = document.getElementById('Nombre2').value; 
        var r4  = document.getElementById('Apellido1').value; 
        var r5  = document.getElementById('Apellido2').value; 
        var r6  = document.getElementById('pass').value; 
        var r7  = document.getElementById('passbuena').value; 
        var r8  = document.getElementById('Matricula').value; 
    
        
                     $.ajax({   
                            type:"POST",
                            url:"editarPersona.php", 
                            data:'r0='+r1+'&r1='+r2+'&r2='+r3+'&r3='+r4+'&r4='+r5+'&r5='+r6+'&r6='+r7+'&r7='+r8,
                            success:function(res1){
                                // console.log(res1);
                                if (res1 == 333)
                                {
                                    swal ( "Disculpe" ,  "los campos no pueden estar vacios " ,  "info" );

                                };
                                if(res1 == 2)
                                {
                                    swal ( "Disculpe" ,  "Contraseña Invalida!" ,  "error" );
                                };
                                if(res1 == 1){
                                    swal ( "Exito" ,  "Datos Actualizados" ,  "success" );
                                    $('.oculati').removeAttr('css', false);
                                    $('.oculatp').removeAttr('css', false);
                                    
                                    $('.veri').css('display', 'none');
                                    $('.prues').css('display', 'none'); 
                                   
                                };
                            }
                    });
        }
</script>