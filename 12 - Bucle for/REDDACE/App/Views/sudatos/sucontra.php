
<style>
    .invi{
        display: none;
    }
.grin{ 
 background-color: azure;
 display: grid;
 grid-template-columns: 280px; 
 grid-template-rows: 36px repeat(6 , 56px) 40px;
 grid-gap: 11px;
 padding: 0px 15px;
 justify-content: center;
 align-items: center;
 border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
}
#nada{
    margin: 0 !important;
    height: 27px;

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
$opc='Comparar';         // 
$donde ='Seguridad';       // 
$info[0]=strtolower($_POST['Usuario']);//fatan #envialos desde el archivo que los llama
$info[1]=strtolower($_POST['Cedula']);  //fatan #envialos desde el archivo que los llama
$info[2]='editarcontra';  //fatan #envialos desde el archivo que los llama
################################################
include('../../../database/data1.php');
################################################
 // operacion ;
$controlando= new desiciones($donde,$info,$opc);
$r = $convercion =$controlando->realizar(); 

$HTML='';

$HTML= 
'

<form id="dato1">
        <div class="grin">
                <div class="lado1"> 
                    <h3 id="nada">Cambiar</h3>  
                </div>

            <div class="lado2"> 
                <p class="oculatp">*Contraseña Vieja:</p>
                <input type="password" class="robo oculati" name="passV" id="passV" required>
            </div>

            <div class="lado2"> 
                <p class="oculatp">*Contraseña Nueva:</p>
                <input type="password" class="robo oculati" name="passN" id="passN" required>
            </div>

            <div class="lado2">  
                <p class="oculatp">*Pregunta 1:</p>
                <input class="robo oculati" value="'.$r[2].'" disabled>
            </div>

            <div class="lado2"> 
                    <p class="oculatp">*Respuesta 1:</p>
                    <input class="robo oculati" name="r1" id="r1"  required>
            </div>
            <div class="lado2"> 
                <p class="oculatp">*Pregunta 2:</p>
                <input  class="robo oculati" value="'.$r[3].'" disabled>
           </div> 
         <div class="lado2"> 
                <p class="oculatp">*Respuesta 2:</p> 
                <input  class="robo oculati" name="r2"  id="r2" required>
            </div>
    
            <div class="lado2 lado3" >
            <input type="hidden" class="robo estoes veri vemos12" name="userri" value="'.$info[0].'"  id="userri">
                    <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Cambiar">
                        <span>Cambiar</span>
                    </button>
            </div>
        </div>
</form>
';




echo $HTML;
################################################
################################################
// fin
?>


<script>


document.querySelector("#Cambiar").addEventListener('click',editar);
function editar()
{
        var r0 = document.getElementById('passV').value; 
        var r1 = document.getElementById('passN').value;  
        var r2 = document.getElementById('r1').value; 
        var r3 = document.getElementById('r2').value; 
        var r4 = document.getElementById('userri').value; 
        var r5 ='';
        var codigo = new encriptado();
              var oscar = codigo.comoEncriptar(r1);
              r5 = oscar;
                     $.ajax({    
                            type:"POST",
                            url:"editapass.php", 
                            data:'r0='+r0+'&r1='+r5+'&r2='+r2+'&r3='+r3+'&r4='+r4 ,
                            success:function(res1){
                                
                                if (res1 == 333) 
                                {
                                    swal ( "Disculpe" ,  "los campos no pueden estar vacios " ,  "info" );
                                };
                                if(res1 == 2 || res1 == 0 || res1 == null )
                                {
                                    swal ( "Disculpe" ,  "Datos invalidos" ,  "error" );
                                };
                                if(res1 == 1){
                                    swal ( "Exito" ,  "Datos Actualizados" ,  "success" );
                                    $('.oculati').css('display', 'none');
                                    $('.oculatp').css('display', 'none');
                                    $('#Cambiar').css('display', 'none');
                                    $('#nada').css('display', 'none'); 
                                };
                            }
                    });
        }
</script>
