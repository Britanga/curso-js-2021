<?php
session_start();
// error_reporting(0);     
include("../Combo-box/D-box-estado.php"); 
$id_sess      = $_SESSION['ID'];
$usuario_sess = $_SESSION['usuario'];
$tipo_sess    = $_SESSION['tipo'];
$CI_sess      = $_SESSION['Cedula'];
$Paso_sess    = $_SESSION['paso'];
$LId          = $id_sess; 
$LUser        = $usuario_sess;
$LTipo        = $tipo_sess;
$LCI          = $CI_sess;
$Paso         = $Paso_sess;

     if ($LTipo == null) {
       echo "<script language='javascript'> alert ('Debe de iniciar sesión Para continuar'); 
               location.href='../../Views/login.php';
            </script>"; 
         die();
     };
     if ($Paso == 3) {
      echo "<script language='javascript'> alert ('No tiene Permiso para entrar a esta URL '); 
              location.href='../../Views/login.php';
           </script>"; 
        die();
    };

?>
<!DOCTYPE html>
<html lang="es">
<head> 
       
            <?php
             include ('../archive/css.php');
            ?>
<!-- inicio para kien -->
<link rel="stylesheet" href="../../../static/Css/nueva.css">
<!-- fin para kien -->

</head>
<style>
.boton {
    flex-direction: row;
    box-sizing: border-box;
    display: flex;
    max-height: 100%;
    place-content: stretch center;
    align-items: stretch;
    padding: 2px 25px;
    margin: 0;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    outline: 0;
    color: #fff;
    background-color: #32445b;
    border: none;
    border-radius: 15px;
    max-width: 133px;
    min-width: 133px;
    font-weight: 700;
    line-height: 30px;
    transition: all 0.4s ease;
}.efecto-btn-1:hover {background-color: #496185;} 
  .efecto-btn-2:hover{background-color: #496185; transform: scale(1.1); border-radius: 5rem;}
</style>
<body style="background-image: none">
 <input type="hidden" value=" <?php $Paso ?>"    name="QuePaso"  id="QuePaso">
<div id="sinCI0" style="display: none; opacity: 0;" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Datos </div>
        <div class="" >
        
         <div class="veamos" >        
            <form id="NuevoDatos" class="Nuevaparte">
                    <div class="Nuevaparte1">
                        <center>  <b>Nacionalidad *</b> </center>
                            <div>
                                <select class="robo3" name="Nacionalidad"  required="">
                                    <option value="">Opcion</option>
                                    <option value="V">V</option>
                                    <option value="E">E</option>
                                </select>
                            </div>
                       </div>
                    <div class="Nuevaparte2">
                               <center>  <b>Cedula *</b></center>
                  
                            <div>
                                <input type="text" class="robo3" name="cedulaNueva" required id="cedulaNueva" maxlength="8" minlength="7" onkeypress="return soloNumeros(event)" >
                                <input type="hidden" id="cedulaNueva_conf" />
                            </div>
                       </div>
                    <div class="Nuevaparte3">
                        <center>  <b>Primer Apellido *</b></center>
                            <div>
                            <input type="text" class="robo3" name="Apellido1Nueva" required>
                            </div>
                           </div>
                    <div class="Nuevaparte4">
                         <center>  <b>Segundo Apellido *</b> </center>
                            <div>
                            <input type="text" class="robo3" name="Apellido2Nueva" required>
                            </div>
                        </div>
                    <div class="Nuevaparte5">
                         <center>  <b>Primer Nombre *</b> </center>
                            <div>
                            <input type="text" class="robo3" name="Nombre1Nueva" required>
                            </div>
                       </div>
                   
                    <div class="Nuevaparte6">
                         <center>  <b>Segundo Nombre *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Nombre2Nueva" required>
                            
                            </div> 
                       </div> 
                    <div class="Nuevaparte7">
                        <center>  <b>Genero *</b> </center>
                     
                            <div>
                            <select class="robo3" name="Genero" required="">
                                    <option value="">Opcion</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                       </div>
                    <div class="Nuevaparte8">
                        <center>  <b>Fecha de Nacimiento *</b> </center>
                     
                            <div>
                                <input type="date" class="robo3" name="FechaNueva" required>
                            </div>
                       </div>
                    <div class="Nuevaparte9 aceptar" >
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 Salirya">
                            <span>Salir</span>
                        </button>
                        <button  type="button" class="boton mat-raised-button efecto-btn-1" disabled  id="procesar0N">
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
    
      </div></div></div>
    </div>
      <div id="R0">

      </div>

<div id="sinCI1" style="display: none; opacity: 0;" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Datos </div>
        <div class="" >
        
         <div class="veamos" >        
            <form id="Nuevaparte1" class="Nuevaparte">
                     <div class="Nuevaparte1">
                               <center>  <b>Estado *</b></center>
                  
                            <div>
                                <select name="cbx_estado" id="cbx_estado" class=" robo3" required title="Debe de colocar el Estado donde vive">
                                    <option value="">Estado</option> 
                                    <?php while($row = mysqli_fetch_assoc($resultado)) { ?> 
                                    <option value="<?php echo $row['C_P_E']; ?>"><?php echo $row['Estado']; ?>
                                    </option> <?php } ?> 
                                </select>
                            </div>
                     </div>
                      <div class="Nuevaparte2">
                        <center>  <b>Municipio *</b> </center>
                            <div>
                                <select name="cbx_municipio" id="cbx_municipio" class=" robo3" required title="Debe de colocar el Municipio donde vive">
                                    <option value="">Municipio</option>
                                    <option value=""></option>
                                </select>
                            </div>
                     </div>
                     <div class="Nuevaparte3">
                        <center>  <b>Parroquia *</b></center>
                        
                            <div>
                                <select name="cbx_localidad" id="cbx_localidad" class=" robo3" required title="Debe de colocar la Parroquia donde vive">
                                        <option value="">Parroquia</option>
                                        <option value=""></option>
                                </select>
                            </div>
                           </div>
                          
                     <div class="Nuevaparte4">
                         <center>  <b>Sector *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Sector" required maxlength="25" minlength="03" title="Debe de colocar el Sector" onkeypress="return bloqueo(event)">
                            </div>
                     </div>
                     <div class="Nuevaparte5">
                         <center>  <b>Calle *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Calle" required maxlength="25" minlength="03" title="Debe de colocar la Calle " onkeypress="return bloqueo(event)">
                            </div>
                     </div>
                     <div class="Nuevaparte6">
                         <center>  <b>Carrera *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Carrera" required maxlength="25" minlength="03" title="Debe de colocar la Carrera" onkeypress="return bloqueo(event)">
                            </div>
                     </div>
                     <div class="Nuevaparte7">
                         <center>  <b>Numero de casa *</b> </center>
                           
                            <div>
                            <input type="text" name="n_casa" id="n_casa" class="robo3" required maxlength="09" minlength="03" title="Debe de colocar el numero de la casa donde vive" onkeypress="return sologion(event)">
                            </div>
                     </div>
                     <div class="Nuevaparte8">
                         <center>  <b>Punto de Referencia *</b> </center>
                           
                            <div>
                            <input type="text" name="p_referencia" id="p_referencia" class="robo3" required maxlength="35" minlength="05" title="Debe de colocar un punto de Referencia "onkeypress="return bloqueo(event)">
                            </div>
                     </div>
                    <div class="Nuevaparte9 aceptar" >
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 Salirya"   >
                            <span>Salir</span>
                        </button>
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesar1N">
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
    
      </div></div></div>
    </div>
      <div id="R1">

      </div>




<div id="sinCI2" style="display: none; opacity: 0;" class="maguia-overlay maguia-overlay--show-modal" tabindex="-1">
      <div class="maguia-modal" role="dialog" aria-modal="true">
          <div class="">
    
            </div>
            <div class="maguia-title" >Seguridad </div>
        <div class="" >
        
         <div class="veamos" >        
            <form id="Nuevaparte2" class="Nuevaparte">
                     <div class="Nuevaparte1">
                               <center>  <b>Pregunta 1 *</b></center>
                  
                            <div>
                            <select class="robo3" name="Pregunta1"  required="">
                            <option value="">Opcion</option>
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
                     </div>
                      <div class="Nuevaparte2">
                        <center>  <b>Respuesta 1 *</b> </center>
                     
                            <div> 
                                <input type="text" class="robo3" name="Respuesta1" required>
                            </div>
                     </div>
                     <div class="Nuevaparte3">
                        <center>  <b>Pregunta 2 *</b></center>
                        
                            <div>
                                <select class="robo3" name="Pregunta2"  required="">
                                <option value="">Opcion</option>
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
                           </div>
                          
                     <div class="Nuevaparte4">
                         <center>  <b>Respuesta 2 *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Respuesta2" required>
                            </div>
                     </div>
                     <div class="Nuevaparte5">
                        <center>  <b>Pregunta 3 *</b></center>
                        
                            <div>
                            <select class="robo3" name="Pregunta3"  required="">
                                    <option value="">Opcion</option>
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
                           </div>
                          
                     <div class="Nuevaparte6">
                         <center>  <b>Respuesta 3 *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Respuesta3" required>
                            </div>
                     </div>
                     <div class="Nuevaparte7">
                        <center>  <b>Pregunta 4 *</b></center>
                        
                            <div>
                            <select class="robo3" name="Pregunta4"  required="">
                            <option value="">Opcion</option>
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
                           </div>
                          
                     <div class="Nuevaparte8">
                         <center>  <b>Respuesta 4 *</b> </center>
                           
                            <div>
                            <input type="text" class="robo3" name="Respuesta4" required>
                            </div>
                     </div>
                    <div class="Nuevaparte9 aceptar" >
                    <button  type="button" class="boton mat-raised-button efecto-btn-1 Salirya"   >
                            <span>Salir</span>
                        </button>
                     <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar2N">
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
    
      </div></div></div>
    </div>
      <div id="R2">

      </div>

</body>
    </html>

<!-- inicio del javascritp -->
            <?php 
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<script src="../../../static/Js/direccion.js"></script>  
<script>
$(document).ready(function(){ 
    var dato = document.getElementById('QuePaso').value;
        $.ajax({   
                type:"POST",
                url:"../NuevosDatos/comprobarPaso.php", 
                data:'dato='+dato,
                success:function(res1)
                {
                    // console.log(res1);
                    if (res1==0) 
                    { 
                        $('#sinCI0').attr('style',false);
                        return false;
                    }
                    if (res1==1)  
                    {
                        $('#sinCI1').attr('style',false);
                        return false;
                    }
                    if (res1==2) 
                    {
                        $('#sinCI2').attr('style',false);
                        return false;
                    }
                }
    });
});


</script>
<script>
$(document).ready(function(){
            $("#cedulaNueva").focusout(function(){ 
                var cedulaNueva1 = document.getElementById('cedulaNueva').value;
                if (cedulaNueva1.length <= 7) {
                    $('#cedulaNueva').css('border-bottom','solid 2px #fc0000');
                }
                if (cedulaNueva1.length >= 8) {
                    $('#cedulaNueva').css('border-bottom','solid 2px #496185');
                    // console.log(res1);
                          $.ajax({   
                                    type:"POST",
                                    url:"../NuevosDatos/buscandoCedula.php", 
                                    data:'Cedula='+cedulaNueva1, 
                                    success:function(res1){
                                        // console.log(res1);
                                        if (res1==0) 
                                        { 
                                            $('#cedulaNueva_conf').val(res1);
                                            $("#procesar0N").attr('disabled',false);
                                        }
                                        if (res1==1) 
                                        {
                                            swal ( "Disculpe" ,  "La Cedula que introdujo ya existe en el sistema" ,  "warning" );
                                        }
                            
                        }
                    });
                }
            });

            $("#procesar0N").click(function (){
                var cedulaNueva_conf = document.getElementById('cedulaNueva_conf').value;
                if(cedulaNueva_conf == 1 ){
                swal ( "Disculpe" ,  "La Cedula que introdujo ya existe en el sistema" ,  "warning" );
                return false;
                }else{
                 var datos=$('#NuevoDatos').serializeArray();
                 $.ajax({   
                            type:"POST",
                            url:"../NuevosDatos/Datos1G.php", 
                            data:datos, 
                            success:function(res1)
                            {
                                if(res1==1)
                                {
                                    $('#sinCI1').attr('style',false);
                                    $('#sinCI0').css('display', 'none', 'opacity', '0');
                                }
                            }
                        }); 
                
                    }
            });
            $("#procesar1N").click(function (){
                 var datos=$('#Nuevaparte1').serializeArray();
                //  console.log(datos); 
                 $.ajax({   
                            type:"POST",
                            url:"../NuevosDatos/Datos2G.php", 
                            data:datos, 
                            success:function(res1)
                            {
                                //  console.log(res1); 
                                if(res1==1)
                                {
                                    $('#sinCI2').attr('style',false);
                                    $('#sinCI1').css('display', 'none', 'opacity', '0');
                                }
                                if(res1==333)
                                {
                                    swal ( "Disculpe" ,  "Los campos no pueden estar vacios" ,  "warning" );
                                }
                            }
                        }); 
            });
            $("#procesar2N").click(function (){
                 var datos=$('#Nuevaparte2').serializeArray();
                 $.ajax({   
                            type:"POST",
                            url:"../NuevosDatos/Datos3G.php", 
                            data:datos,  
                            success:function(res1)
                            {
                                if(res1!=333)
                                { 
                                    location.href=res1;
                                }
                                if(res1==333)
                                { 
                                    swal ( "Disculpe" ,  "Los campos no pueden estar vacios" ,  "warning" );
                                }
                            }
                        }); 
            }); 
            $(".Salirya").click(function (){ 
                location.href='../../Views/salir/salir2.php';
            });
         
});

</script>
