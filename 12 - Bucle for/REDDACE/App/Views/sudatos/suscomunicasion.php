
<style>
        .invi{
            display: none;
        }
        .muere{
            display: none;
            opacity: 0;
            z-index: -1;
        }
    .grin{ 
    background-color: azure;
    display: grid;
    grid-template-columns: 280px;
    grid-template-rows: 240px 232px;
    grid-template-areas: "mostar" "edita";
    grid-gap: 10px; 
    padding: 9px;
    justify-content: center;
    align-items: center;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    }
    .mostar{
        grid-area: mostar;
        display: grid;
        grid-template-rows: 40px repeat(2 ,56px)50px 40px;
    }
    .edita{
        grid-area: edita;
        display: grid;
        grid-template-rows: 35px repeat(2 ,70px) 55px;
        grid-template-areas: "nada" "inp1" "inp2" "but";
    }
    .edita>.bon{
    grid-area: but;
    }
    .edita>.codigo{
    grid-area: inp1;
    display: flex;
    flex-flow: column wrap;
    }
    .edita>.codigo>select{
    width: 36%;
    }
    .edita>.numero{
    grid-area: inp2;
    display: flex;
    flex-flow: column wrap;
    }
    .edita>.numero>input{
    width: 50%;
    }

    .edita>.direccion{
    grid-area: inp1;
    display: flex;
    flex-flow: column wrap;
    }
    .edita>.dominio{
    grid-area: inp2;
    display: flex;
    flex-flow: column wrap;
    }
    .edita>.dominio>select{
    width: 70%;
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
 

################################################
################################################ 
// echo json_encode($ara);
$HTML='';

$HTML= 
'

<form id="dato1">
        <div class="grin">
                <div class="mostar">
                        <div class="lado1"> 
                            <h3>Mostar</h3>  
                        </div>  

                    <div class="lado2"> 
                        <p>* Correo:</p>
                        <input class="robo" value="'.$r[11].$r[12].' "   disabled>
                    </div>

                    <div class="lado2"> 
                        <p class="oculatp">* Telefono</p>
                        <input class="robo" value="0'.$r[13].'-'.$r[14].' "  disabled>
                    </div>
          
                    <div class="lado3"> 
                        <h3 class="">Editar</h3>  
                    </div>  

                    <div class="lado2 lado3" >
                            <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Correo">
                                <span>Correo</span>
                            </button>
                            <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Telefono">
                                    <span>Telefono</span>
                            </button>
                    </div>

                </div>
                <div class="edita">
                            <div class="lado2 codigo muere"> 
                                    <p>* Codigo:</p>
                                    <select name="codigo" id="codigo" class="robo estoes" >
                                            <option value=""> </option>
                                            <option value="0416">0416</option>
                                            <option value="0426">0426</option>
                                            <option value="0414">0414</option>
                                            <option value="0424">0424</option>
                                            <option value="0412">0412</option>
                                            <option value="0283">0283</option>
                                    </select>
                            </div>

                            <div class="lado2 numero muere"> 
                                            <p>* Numero</p>
                                            <input class="robo estoes" name="numero" id="numero" >
                            </div>

                            <div class="lado2 direccion muere"> 
                                        <p>* Correo:</p>
                                     <input class="robo estoes" name="direccion" id="direccion" >
                            </div>

                            <div class="lado2 dominio muere"> 
                                            <p>* Dominio</p>
                                            <select name="dominio" id="dominio" class="robo">
                                                <option value=""></option>
                                                <option value="@gmail.com">@gmail.com</option>
                                                <option value="@hotmail.com">@hotmail.com</option>
                                            </select>
                            </div>

                            <div class="lado2 lado3 bon" >
                            <input type="hidden" value="'.$r[1].'  "id="suCedula" >
                            <input type="hidden" value="'.$r[15].' "id="sutell" >
                            <input type="hidden" value="'.$r[16].' "id="suCorr" >
                                    <button  type="button" class="boton mat-raised-button efecto-btn-1 los2"   id="Guardar92">
                                        <span>Guardar</span>
                                    </button>
                                    <button  type="button" class="boton mat-raised-button efecto-btn-1 muere tll"   id="Guardar299">
                                            <span>Guardar</span>
                                    </button>
                                    <button  type="button" class="boton mat-raised-button efecto-btn-1 muere crr"   id="Guardar292">
                                            <span>Guardar</span>
                                    </button>
                            </div>
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
document.querySelector("#Correo").addEventListener('click',ediCorreo);
function ediCorreo()
{
    $('.direccion').removeClass('muere');
    $('.dominio').removeClass('muere');

    $('.codigo').removeClass('muere');
    $('.numero').removeClass('muere');
    $('.codigo').addClass('muere');
    $('.numero').addClass('muere');

$('.los2').removeClass('muere')
$('.los2').addClass('muere')
$('.tll').removeClass('muere');;
$('.tll').addClass('muere');
$('.crr').removeClass('muere');
}
document.querySelector("#Telefono").addEventListener('click',ediTelefono);
function ediTelefono()
{
    $('.codigo').removeClass('muere');
    $('.numero').removeClass('muere');
    
    $('.direccion').removeClass('muere');
    $('.dominio').removeClass('muere');
    $('.direccion').addClass('muere');
    $('.dominio').addClass('muere');


$('.los2').removeClass('muere')
$('.los2').addClass('muere')
$('.crr').removeClass('muere');;
$('.crr').addClass('muere');
$('.tll').removeClass('muere');
}

document.querySelector("#Guardar299").addEventListener('click',guardar_Tll);
function guardar_Tll()
{
        var r0 = document.getElementById('suCedula').value; 
        var r1 = document.getElementById('codigo').value; 
        var r2 = document.getElementById('numero').value;
        var r3 = document.getElementById('sutell').value;
                     $.ajax({   
                            type:"POST",
                            url:"editarTell.php", 
                            data:'r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3,
                            success:function(res1)
                            {
                                 
                                if(res1 == 222)
                                {
                                    swal ( "Disculpe" ,  "Los Campos no Pueden Estar Vacios " ,  "info" );
                                        return false;
                                };
                                if(res1 == 333)
                                {
                                    swal ( "Disculpe" ,  "Verifique la Longitud de los Numeros " ,  "info" );
                                        return false;
                                };
                                if(res1 == 1)
                                {
                                    swal ( "Exito" ,  "Datos Actualizados" ,  "success" );
                                $('.codigo').removeClass('muere');
                                $('.numero').removeClass('muere');
                                $('#Guardar299').addClass('muere');
                                $('.los2').removeClass('muere');
                                $('.grin').css( 'display', 'none');
                                        return false;
                                };
                                if(res1 == 2) 
                                {
                                    swal ( "Disculpe" ,  "Ocurio Un Error" ,  "error" );
                                        return false;
                                };
                               
                            } 
                    });
}
document.querySelector("#Guardar292").addEventListener('click',guardar_Crr);
function guardar_Crr()
{
        var r0 = document.getElementById('suCedula').value;
        var r1 = document.getElementById('direccion').value; 
        var r2 = document.getElementById('dominio').value;  
        var r3 = document.getElementById('suCorr').value;
        $.ajax({   
                            type:"POST",
                            url:"editarCorr.php", 
                            data:'r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3,
                            success:function(res1)
                            {
                                if(res1 == 222)
                                {
                                    swal ( "Disculpe" ,  "Los Campos No Pueden Estar Vacios " ,  "info" );
                                        return false;
                                };
                                if(res1 == 1)
                                {
                                    swal ( "Exito" ,  "Datos Actualizados" ,  "success" );
                                $('.direccion').addClass('muere');
                                $('.dominio').addClass('muere');
                                $('#Guardar292').addClass('muere');
                                $('.los2').removeClass('muere');
                                $('.grin').css( 'display', 'none');
                                        return false;
                                };
                                if(res1 == 2)
                                {
                                    swal ( "Disculpe" ,  "Ocurio un Error" ,  "error" );
                                        return false;
                                };
                               
                            }
                    });
}
</script>
