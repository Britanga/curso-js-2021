
<style>
    .invi{
        display: none;
    }
.grin{ 
 background-color: azure;
 display: grid;
 grid-template-columns: 285px;
 grid-template-rows: 27px repeat(8 , 40px) 35px;
 grid-gap: 13px;
 padding: 0px 30px;
 justify-content: center;
 align-items: center;
 border-top-right-radius: 20px;
 border-bottom-right-radius: 20px;
}

.lado2 {
text-align: center
}
.lado2 > input{
color: #000000;
height: 20px;
}
.lado2 > input[disabled]{
background-color: aliceblue;
color: grey;
}

.lado2 > p{
    margin-bottom: 0 !important;
    font-family: Arial, Helvetica, sans-serif;
    height: 20px;
    color: #32445b;

}
#nda{
    margin: 0 !important;
    height: 27px;

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
// ////////////////////////////////////////////////////////////////
$opc='Direccion';
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
                <p class="apaga23">*Estado:</p>
                <input class="robo oculati"  value="'.$r[7].' "  disabled >

                <select name="cbx_estado" id="cbx_estado" class="robo invi veri" required title="Debe de colocar el Estado donde vive">
                        <option value="">Estado</option> 
                        <option value="1 "> Amazonas </option>
                        <option value="2 "> Anzoategui </option>
                        <option value="3 "> Apure </option>
                        <option value="4 "> Aragua </option>
                        <option value="5 "> Barinas </option>
                        <option value="6 "> Bolivar </option>
                        <option value="7 "> Carabobo </option>
                        <option value="8 "> Cojedes </option>
                        <option value="9 "> Delta Amacuro </option>
                        <option value="10"> Distrito Capital </option>
                        <option value="11"> Falcon </option>
                        <option value="12"> Guarico </option>
                        <option value="13"> Lara </option>
                        <option value="14"> Merida </option>
                        <option value="15"> Miranda </option>
                        <option value="16"> Monagas </option>
                        <option value="17"> Nueva Esparta </option>
                        <option value="18"> Portuguesa </option>
                        <option value="19"> Sucre </option>
                        <option value="20"> Tachira </option>
                        <option value="21"> Trujillo </option>
                        <option value="22"> Vargas </option>
                        <option value="23"> Yaracuy </option>
                        <option value="24"> Zulia </option>
                       
                </select>
                
            </div>
 
            <div class="lado2"> 
                <p class="apaga23">*Municipio:</p>
                <input class="robo oculati"  value="'.$r[8].' "  disabled >
                
                            <select name="cbx_municipio" id="cbx_municipio" class="robo invi veri" required title="Debe de colocar el Municipio donde vive">
                                                <option value="">Municipio</option>
                                                <option value=""></option>
                            </select>
                
            </div>
 
            <div class="lado2"> 
                <p class="apaga23">*Parroquia:</p>
                <input class="robo oculati"  value="'.$r[9].' "    disabled  >
                    <select name="cbx_localidad" id="cbx_localidad" class="robo invi veri" required title="Debe de colocar la Parroquia donde vive">
                                <option value="">Parroquia</option>
                                <option value=""></option>
                    </select>
     
            </div>

            <div class="lado2"> 
                <p class="apaga23">*Sector:</p>
                <input class="robo oculati"  value="'.$r[1].' " disabled >
                <input type="hidden" class="robo estoes veri vemos12" name="Sector" value="'.$r[1].'" required id="Sector">

            </div>

            <div class="lado2"> 
                <p class="apaga23">*Carrera:</p>
                <input class="robo oculati"  value="'.$r[2].' " disabled >
                <input type="hidden" class="robo estoes veri vemos12" name="Carrera" value="'.$r[2].'" required id="Carrera">
            </div>
            <div class="lado2"> 
                <p class="apaga23">*Calle:</p>
                <input class="robo oculati"  value="'.$r[3].' " disabled >
                <input type="hidden" class="robo estoes veri vemos12" name="Calle" value="'.$r[3].'" required id="Calle">
            </div>
            <div class="lado2"> 
                <p class="apaga23">*Numero de Casa:</p>
                <input  class="robo oculati" value="'.$r[4].' " disabled >
                <input type="hidden" class="robo estoes veri vemos12" name="Casa" value="'.$r[4].'" required id="Casa">
            </div>
            <div class="lado2"> 
                <p class="apaga23">*Punto de Referencia:</p>
                <input class="robo oculati"   value="'.$r[5].' " disabled >
                <input type="hidden" class="robo estoes veri vemos12" name="Punto" value="'.$r[5].'" required id="Punto">
            </div>
    
            <div class="lado2 lado3" >
            <input type="hidden" name="cedula"  value="'.$r[6].'" id="cedula12">
                    <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Editar">
                        <span>Editar</span>
                    </button>
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 invi veri"   id="Guardar">
                            <span>Guardar</span>
                    </button>
            </div>
        </div>
</form>
';
 

echo $HTML;
 ?>
 <script>

document.querySelector('#Editar').addEventListener('click',ocultar);
    function ocultar(){
        $('.oculati').css('display', 'none');
        $('.veri').removeClass('invi');
        $('#Editar').css('display', 'none'); 
        $('#nda').css('display', 'none'); 
        $('.vemos12').removeAttr('type', false);
    }
document.querySelector("#Guardar").addEventListener('click',editar);
function editar()
{
        var r1 = document.getElementById('cbx_estado').value; 
        var r2 = document.getElementById('cbx_municipio').value; 
        var r3 = document.getElementById('cbx_localidad').value; 
        var r4 = document.getElementById('Sector').value; 
        var r5 = document.getElementById('Carrera').value; 
        var r6 = document.getElementById('Calle').value; 
        var r7 = document.getElementById('Casa').value; 
        var r8 = document.getElementById('Punto').value; 
        var r9 = document.getElementById('cedula12').value; 
                     $.ajax({    
                            type:"POST",
                            url:"editarDireccion.php", 
                           data:'r0='+r1+'&r1='+r2+'&r2='+r3+'&r3='+r4+'&r4='+r5+'&r5='+r6+'&r6='+r7+'&r7='+r8+'&r8='+r9,
                            success:function(res1){
                                if (res1 == 333)
                                {
                                    swal ( "Disculpe" ,  "los campos no pueden estar vacios " ,  "info" );
                                    return false;
                                };
                                if(res1 == 2)
                                { 
                                    swal ( "Disculpe" ,  "Ocurio un Error" ,  "error" );
                                    return false;
                                };
                                if(res1 == 1){
                                    swal ( "Exito" ,  "Datos Actualizados" ,  "success" );
                                    $('.oculati').removeAttr('css', false);
                                    $('.apaga23').css('display', 'none');
                                    
                                    $('.veri').css('display', 'none');
                                    $('.prues').css('display', 'none');
                                    return false;
                                };
                            }
                    });
        }
 </script>
<script>
$(document).ready(function(){
    $("#cbx_estado").change(function () {
                            $('#cbx_municipio').find('option').remove().end().append('<option value=""></option>').val('');
                            $('#cbx_localidad').find('option').remove().end().append('<option value=""></option>').val('');
        $("#cbx_estado option:selected").each(function () {
                                    Codigo_Estado = $(this).val();
            $.post("../Combo-box/D-box-municipio.php", { Codigo_Estado: Codigo_Estado }, function(data){
                $("#cbx_municipio").html(data);
            });      
        });
    })  
});
$(document).ready(function(){
    $("#cbx_municipio").change(function () {
        $("#cbx_municipio option:selected").each(function () {
            Codigo_Municipio = $(this).val();
            $.post("../Combo-box/D-box-parroquia.php", { Codigo_Municipio: Codigo_Municipio }, function(data){
                $("#cbx_localidad").html(data);
            });            
        });
    })
});

</script>