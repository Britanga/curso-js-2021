
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
$info[0]=strtolower($_POST['Usuario']);
$info[1]=strtolower($_POST['Cedula']);  
$info[2]='editarcontra';
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
                    <h3 id="nada">Seguridad</h3>  
                </div>
                <div class="lado2">  
                <p class="oculatp">*Pregunta 1:</p>
                <select class="robo oculati selecy" name="p1"  id="p11" disabled>
                    <option value="'.$r[2].'">'.$r[2].'</option>
                    <option value="Veiculo Favorito">¿Vehiculo Favorito?</option>
                    <option value="Telefono Favorito">¿Telefono Favorito?</option>
                    <option value="Sistema Favorito">¿Sistema Favorito?</option>
                    <option value="Placa de su Veiculo">¿Placa de su Vehiculo?</option>
                    <option value="Color Favorito">¿Color Favorito?</option>
                    <option value="Fruta Favorita">¿Fruta Favorita?</option>
                    <option value="Mucica Favorita">¿Musica Favorita?</option>
                    <option value="Deporte Favorito">¿Deporte Favorito?</option>
                    <option value="Juego Favorito">¿Juego Favorito?</option>
                    <option value="Pasatiempo">¿Pasatiempo?</option>
                    <option value="lugar de nacimiento">¿Lugar de Nacimiento? </option>
                    <option value="Deceo de Viajar">¿Deseo de Viajar a?</option>
                    <option value="Su madre nacio en">¿Su madre nacio en?</option>
                    <option value="Gatos o Perros">¿Gatos o Perros?</option>
                    <option value="Comida Favorita">¿Comida Favorita?</option>
               </select>
            </div>

            <div class="lado2"> 
                    <p class="oculatp">*Respuesta 1:</p>
                    <input class="robo oculati rese" name="r1" id="r1"  required>
            </div>
    
 
            <div class="lado2"> 
                <p class="oculatp">*Pregunta 2:</p>
                <select class="robo oculati selecy" name="p2"  id="p22" disabled>
                <option value="'.$r[3].'">'.$r[3].'</option>
                <option value="Veiculo Favorito">¿Vehiculo Favorito?</option>
                <option value="Telefono Favorito">¿Telefono Favorito?</option>
                <option value="Sistema Favorito">¿Sistema Favorito?</option>
                <option value="Placa de su Veiculo">¿Placa de su Vehiculo?</option>
                <option value="Color Favorito">¿Color Favorito?</option>
                <option value="Fruta Favorita">¿Fruta Favorita?</option>
                <option value="Mucica Favorita">¿Musica Favorita?</option>
                <option value="Deporte Favorito">¿Deporte Favorito?</option>
                <option value="Juego Favorito">¿Juego Favorito?</option>
                <option value="Pasatiempo">¿Pasatiempo?</option>
                <option value="lugar de nacimiento">¿Lugar de Nacimiento? </option>
                <option value="Deceo de Viajar">¿Deseo de Viajar a?</option>
                <option value="Su madre nacio en">¿Su madre nacio en?</option>
                <option value="Gatos o Perros">¿Gatos o Perros?</option>
                <option value="Comida Favorita">¿Comida Favorita?</option>
           </select>
           </div>
         <div class="lado2"> 
                <p class="oculatp">*Respuesta 2:</p> 
                <input  class="robo oculati rese" name="r2" id="r2"  required>
            </div>

        <div class="lado2">  
            <p class="oculatp">*Pregunta 3:</p>
            <select class="robo oculati selecy" name="p3"  id="p33" disabled>
            <option value="'.$r[4].'">'.$r[4].'</option>
            <option value="Veiculo Favorito">¿Vehiculo Favorito?</option>
            <option value="Telefono Favorito">¿Telefono Favorito?</option>
            <option value="Sistema Favorito">¿Sistema Favorito?</option>
            <option value="Placa de su Veiculo">¿Placa de su Vehiculo?</option>
            <option value="Color Favorito">¿Color Favorito?</option>
            <option value="Fruta Favorita">¿Fruta Favorita?</option>
            <option value="Mucica Favorita">¿Musica Favorita?</option>
            <option value="Deporte Favorito">¿Deporte Favorito?</option>
            <option value="Juego Favorito">¿Juego Favorito?</option>
            <option value="Pasatiempo">¿Pasatiempo?</option>
            <option value="lugar de nacimiento">¿Lugar de Nacimiento? </option>
            <option value="Deceo de Viajar">¿Deseo de Viajar a?</option>
            <option value="Su madre nacio en">¿Su madre nacio en?</option>
            <option value="Gatos o Perros">¿Gatos o Perros?</option>
            <option value="Comida Favorita">¿Comida Favorita?</option>
       </select>
        </div>

        <div class="lado2"> 
                <p class="oculatp">*Respuesta 3:</p>
                <input class="robo oculati rese" name="r3" id="r3"  required>
        </div>

            <div class="lado2 lado3" >
            <input type="hidden" class="robo estoes veri vemos12" name="idu" value="'.$r[6].'"  id="idu">
            <input type="hidden" class="robo estoes veri vemos12" name="user23" value="'.$r[0].'"  id="user23">
                    <button  type="button" class="boton mat-raised-button efecto-btn-1"   id="Cambiar17">
                        <span>Cambiar</span>
                    </button> 
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 invi prues"   id="Guardar17">
                    <span>Guardar</span>
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

document.querySelector("#Guardar17").addEventListener('click',editar12);
function editar12()
{
        var r0 = document.getElementById('user23').value;  
        var r1 = document.getElementById('p11').value; 
        var r2 = document.getElementById('p22').value;  
        var r3 = document.getElementById('p33').value; 
        var r4 = document.getElementById('r1').value;  
        var r5 = document.getElementById('r2').value; 
        var r6 = document.getElementById('r3').value; 
        var r7 = document.getElementById('idu').value;  
                     $.ajax({    
                            type:"POST",
                            url:"editapregun.php", 
                            data:'r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+r5+'&r6='+r6+'&r7='+r7,
                            success:function(res1){
                                if (res1 == 333) 
                                {
                                    swal ( "Disculpe" ,  "los campos no pueden estar vacios " ,  "info" );
                                };
                                if(res1 == 2 || res1 == 0 || res1 == null )
                                {
                                    swal ( "Disculpe" ,  "Datos Invalidos " ,  "error" );
                                };
                                if(res1 == 1){
                                    swal ( "Disponible" ,  "Ya Puede Actualizar Sus Datos" ,  "success" );
                                    $('.selecy').css('display', 'none');
                                    $('.prues').css('display', 'none');
                                    $('.rese').css('display', 'none');
                                    $('.oculatp').css('display', 'none');
                                    
                                };
                            } 
                    });
        }
</script>


<script>

document.querySelector("#Cambiar17").addEventListener('click',comparar12);
function comparar12()
{
        var r0 = document.getElementById('user23').value; 
        var r1 = document.getElementById('r1').value;  
        var r2 = document.getElementById('r2').value; 
        var r3 = document.getElementById('r3').value; 
                     $.ajax({    
                            type:"POST",
                            url:"compararPregun.php", 
                            data:'r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3,
                            success:function(res1){
                              
                                if (res1 == 333) 
                                {
                                    swal ( "Disculpe" ,  "los campos no pueden estar vacios " ,  "info" );
                                };
                                if(res1 == 2 || res1 == 0 || res1 == null )
                                {
                                    swal ( "Disculpe" ,  "Datos Invalidos " ,  "error" );
                                };
                                if(res1 == 1){
                                    swal ( "Disponible" ,  "Ya Puede Actualizar Sus Datos" ,  "success" );
                                    $('.selecy').removeAttr('disabled', false);
                                    $('#Cambiar17').addClass('invi');
                                    $('.prues').removeClass('invi');
                                    $('.selecy').css('color', '#2196f3');
                                    $('.rese').val('');
                                    
                                };
                            } 
                    });
        }
</script>
