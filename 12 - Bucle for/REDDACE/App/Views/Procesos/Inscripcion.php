<?php
session_start();
    include ('../perfil/perfil.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
       
            <?php
             include ('../archive/css.php');
            ?>
<!-- inicio para kien -->
<?php
             include ('../archive/Para_El_Perfil.php');
            ?>
<!-- fin para kien -->
                <!-- CSS PROPIOS-->
    
    <link rel="stylesheet" href="../../../static/Css/inscripcion.css">  
</head>
 <style>

.validarF{
display: flex ;
flex-flow: column;
justify-content: center;
align-content: center;
align-content: center;
align-items: center;
}
.invi{
    display:  none;
}
.invi2{
    display:  none;
    z-index: -20;
}
 </style>
<body>
<?php

   include ('../archive/precarga1.html');

?>
   <div class="cont1">

  <!-- inicio el heder -->
            <?php
             include ('../archive/caveza.php');
            ?>
<!-- finel heder -->

<!-- inicio opc del menu -->
            <?php
             include ('../archive/menu.php');
            ?>
<!-- fin opc del menu -->
<style>

</style>
<!-- contenido form(o otras cosas) -->
   <main class="contenido">
    <div id="texturas">
            <div class="mapa" >
                <nav aria-label="breadcrumb"  >
                    <ol class="breadcrumb radius-1rem2r " style="margin-bottom:2px; padding-bottom: 9px">
                        <li class="breadcrumb-item active text-center" aria-current="page"> 
                            <i class="icon icon-home"></i> 
                            <a class="otrass" href="../menu/menu.php">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active text-center" aria-current="page"> 
                            <i class="icon icon-home"></i> 
                            <a class="colorr" href="#"> Inscripciones </a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1">
  <!-- es este espacio va la informacion -->

  <div class="CLAVparte1">
   <h3> Inscripcion </h3>
</div>
   <!-- buscador -->
<div class="CLAVparte2">
   <div class="parre">
    <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <p>Nuevo Ingreso</p>
                </div>
                <div class="icon">
                    <i class="icon-news"></i>
                </div>
            </div>
       </div>
       
    <div id="Trayecto2" class="col-lg-3 parteT2-CLA invi" >
          <form id="fechas1"> 

              <div class="in_d">
                <label for="inicia11"> Inicia  </label>
                <input id="inicia11" type="date" class="robo" name="inicia11" required>
                <input id="inicia111" type="hidden" name="inicia111" >
              </div>

              <div class="ed_d">
                <label for="Edita11"> Se Edita  </label>
                <input id="Edita11" type="date" class="robo" name="Edita11" required>
                <input id="Edita111" type="hidden"  name="Edita111" >
              </div>

              <div class="cu_d">
                <label for="Culmuna11"> Culmuna  </label>
                <input id="Culmuna11" type="date" class="robo" name="Culmuna11" required>
                <input id="Culmuna111" type="hidden" name="Culmuna111" >
              </div>

          </form>
       </div>
     <!-- ./col -->
    <div id="Trayecto3" class="col-lg-3 parteT3-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto3-3">
           <div class="inner">
             <p>Normal</p>
           </div>
           <div class="icon">
             <i class="icon-address-card"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
    <div id="Trayecto4" class="col-lg-3 parteT4-CLA invi" >
          <form id="fechas2">

          <div class="in_d">
                <label for="inicia22"> Inicia  </label>
                <input id="inicia22" type="date" class="robo" name="inicia22" required>
                <input id="inicia222" type="hidden" name="inicia222" >
              </div>

              <div class="ed_d">
                <label for="Edita22"> Se Edita  </label>
                <input id="Edita22" type="date" class="robo" name="Edita22" required>
                <input id="Edita222" type="hidden"  name="Edita222" >
              </div>

              <div class="cu_d">
                <label for="Culmuna22"> Culmuna  </label>
                <input id="Culmuna22" type="date" class="robo" name="Culmuna22" required>
                <input id="Culmuna222" type="hidden" name="Culmuna222" >
              </div>
          </form>
       </div>
   </div> 
</div>  

<!-- semi-tabla -->
<form class="CLAVparte3 " >

        <div class="validarF"> 
        <button  type="button" class="boton mat-raised-button efecto-btn-1" id="validarF">
                        <span>Procesar</span>
        </button>
        </div>
    <div class="scrol invi" >
            <table cellpadding="10">
                    <thead>
                        <tr>
                            <th>N°:</th>
                            <th>PNF</th> 
                            <th>Cupos</th>     
                        </tr>
                  </thead>
                  
                            <tbody class="Pintar2">

                            </tbody>
                   
            </table>
    </div>

    <div class="enviar invi" id="enviar">
        <div class="enviarQ">
            <label for="todos"> Para todos sera igual:  
            <input type="number" placeholder="00" class="robo" id="todos" max="500" min="1" onkeypress="return soloNumeros(event)">
            </label>
        </div>
        <div class="enviarB">
                      
                     <button  type="button" class="boton mat-raised-button efecto-btn-1" id="procesarOPC121">
                        <span>Procesar</span>
                     </button>
                     <input type="hidden" value="" id="donde_estas1">
        </div>
    </div>

    </form>

   </main>
<!-- inicio del pies -->
            <?php
             include ('../archive/pies.php');
            ?>
<!-- fin del pies -->

</div>
</body>
<div id="comunicasion">
    
    </div>

<div class="modal fade" id="ver-pdf"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="exampleModalLongTitle">Reclamo</h5> 
                                </center>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                    </div>

                    <div class="modal-body" id="view_pdf">
                        ...
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
        </div>
    </div>
</div>
    </html> 
<input type="hidden" name="Cedula" value="<?php echo $LCI ?>" id="como">
<input type="hidden" name="Usuario" value="<?php echo $LUser?>" id="como1">
<input type="hidden" name="cedula_usuario" value="<?php echo $LCI ?>" id="cedula_usuario">
<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->


<script src="../../../static/Js/clasesG.js"></script>
<script src="../../../static/Js/envioG.js"></script>




<script>
$(document).ready(function ()
{
    $("#Trayecto1").click(function (){
        $("#Trayecto1-1").addClass('activos1');
        $("#Trayecto3-3").removeClass('activos5');

        $("#Trayecto4").addClass('invi');
        $("#Trayecto2").removeClass('invi');
        $(".scrol").addClass('invi');
        $("#enviar").addClass('invi');
        $("#donde_estas1").val(1);
        
        $(".validarF").removeClass('invi');


        
        $('#inicia22').attr('disabled',false) ; 
        $('#Edita22').attr('disabled',false) ;
        $('#Culmuna22').attr('disabled',false) ;
        $('#inicia22').css('color','rgb(92, 92, 92)') ; 
        $('#Edita22').css('color','rgb(92, 92, 92)') ;
        $('#Culmuna22').css('color','rgb(92, 92, 92)') ;

    }); 




    $("#Trayecto3").click(function (){
        $("#Trayecto3-3").addClass('activos5');
        $("#Trayecto1-1").removeClass('activos1');

        $("#Trayecto4").removeClass('invi');
        $("#Trayecto2").addClass('invi');
        $(".scrol").addClass('invi');
        $("#enviar").addClass('invi');
        $("#donde_estas1").val(2);
        $(".validarF").removeClass('invi');

        $('#inicia11').attr('disabled',false) ; 
        $('#Edita11').attr('disabled',false) ;
        $('#Culmuna11').attr('disabled',false) ;
        $('#inicia11').css('color','rgb(92, 92, 92)') ; 
        $('#Edita11').css('color','rgb(92, 92, 92)') ;
        $('#Culmuna11').css('color','rgb(92, 92, 92)') ;
    });
 
}); 
</script>

<script>
$(document).ready(function(){
   
            var url  = '../Combo-box/PNF_insg.php';
                // Mostar
                var data=1;
                var Pintar2 = new Solicitud(data,url);   
                var respuesta = Pintar2.Pintar2();

});



</script> 
<!-- validar fecha -->

<script>
$(document).ready(function(){
    $("#validarF").click(function ()
    {
        var donde  = document.getElementById('donde_estas1').value;
        
        if (donde == 1 ) 
        {
            // 
            var r0  = document.getElementById('inicia11').value; 
            var r1  = document.getElementById('Edita11').value;
            var r2  = document.getElementById('Culmuna11').value;
            var r3  = document.getElementById('como').value; 
            var r4  = 'Inscripcion'; 
      
            
            if (r0 == '' || r1 == '' || r2 == ''  ) {

                swal ('Disculpe' , 'las fechas no deben de estar vasias' , 'info');

                return false;
            }
            else
            {

                // var data   ='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4;
                $(".validarF").addClass('invi');
                $(".scrol").removeClass('invi');
                $("#enviar").removeClass('invi');

                $('#inicia111').val(r0) ; 
                $('#Edita111').val(r1) ;
                $('#Culmuna111').val(r2) ;
                $(".enviarQ").removeClass('invi');

                $('#inicia11').attr('disabled',true) ; 
                $('#Edita11').attr('disabled',true) ;
                $('#Culmuna11').attr('disabled',true) ;

                $('#inicia11').css('color','#007bff') ; 
                $('#Edita11').css('color','#007bff') ;
                $('#Culmuna11').css('color','#007bff') ;

                return false;

            }
        }
        if (donde == 2 ) 
        {
            var r0  = document.getElementById('inicia22').value; 
            var r1  = document.getElementById('Edita22').value;
            var r2  = document.getElementById('Culmuna22').value;
            var r3  = document.getElementById('como').value; 
            var r4  = 'Inscripcion'; 
            if (r0 == '' || r1 == '' || r2 == ''  ) 
            {
                swal ('Disculpe' , 'las fechas no deben de estar vasias' , 'info');
                return false;
            }
            else
            {

                // var data   ='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4;
                $(".validarF").addClass('invi');
                $(".scrol").addClass('invi');
                $(".enviarQ").addClass('invi');
                $("#enviar").removeClass('invi');
                
                $('#inicia222').val(r0) ; 
                $('#Edita222').val(r1) ;
                $('#Culmuna222').val(r2) ;


                $('#inicia22').attr('disabled',true) ; 
                $('#Edita22').attr('disabled',true) ;
                $('#Culmuna22').attr('disabled',true) ;

                $('#inicia22').css('color','#007bff') ; 
                $('#Edita22').css('color','#007bff') ;
                $('#Culmuna22').css('color','#007bff') ;

                return false;

            }

            return false;
        }
        if ( donde == '') 
        {
            swal ('Disculpe' , 'sin dato' , 'info');
            return false; 
        }
    }); 
});

 </script>
<!-- enviar los datos -->
 <script>
$(document).ready(function(){
    $("#procesarOPC121").click(function ()
    {
        var donde  = document.getElementById('donde_estas1').value;
        var todos  = document.getElementById('todos').value;
        
        if (donde == 1 ) 
        {
            var url = 'Abrir_Proceso.php';
            // 
            var r0  = document.getElementById('inicia111').value; 
            var r1  = document.getElementById('Edita111').value;
            var r2  = document.getElementById('Culmuna111').value;
            var r3  = document.getElementById('como').value; 
            var r4  = 'Inscripcion'; 
            // 
            var data   ='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4;
            if (todos != '' || todos != false) 
            {
                var data12   ='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4+'&r5='+todos; 
                var url = 'G_D_faciles.php';
                $.ajax({  type:"POST", url:url, data:data12,
                          success:function(res1)
                          {
                            swal ('Exito' , 'El Proceso se a Puesto en Marcha' , 'success');
                            $(".validarF").removeClass('invi');
                                    $(".scrol").addClass('invi');
                                    $("#enviar").addClass('invi');

                                    $('#inicia111').val() ; 
                                    $('#Edita111').val() ;
                                    $('#Culmuna111').val() ;

                                    $('#inicia11').val() ; 
                                    $('#Edita11').val() ;
                                    $('#Culmuna11').val() ;

                                    $('#inicia11').attr('disabled',false) ; 
                                    $('#Edita11').attr('disabled',false) ;
                                    $('#Culmuna11').attr('disabled',false) ;

                                    $('#inicia11').css('color','rgb(92, 92, 92)') ; 
                                    $('#Edita11').css('color','rgb(92, 92, 92)') ;
                                    $('#Culmuna11').css('color','rgb(92, 92, 92)') ;

                                $("#Trayecto1-1").removeClass('activos1');
                                $("#Trayecto2").addClass('invi');
                            return false ; 
                          }
                        })
            }
            else
            {
                $.ajax({   
                type:"POST",
                url:url, 
                data:data,
                success:function(res1)
                {
                        if (res1 == 1) 
                        {
                            var url = 'G_new_ingreso.php';
                            var data2=$('.CLAVparte3').serializeArray(); 
                            // console.log(data2)
                            $.ajax({   
                                      type:"POST",
                                      url:url, 
                                      data:data2,
                                      success:function(res1)
                                      {

                                        swal ('Exito' , 'El Proceso se a Puesto en Marcha' , 'success');
                                        $(".validarF").removeClass('invi');
                                                $(".scrol").addClass('invi');
                                                $("#enviar").addClass('invi');

                                                $('#inicia111').val() ; 
                                                $('#Edita111').val() ;
                                                $('#Culmuna111').val() ;

                                                $('#inicia11').val() ; 
                                                $('#Edita11').val() ;
                                                $('#Culmuna11').val() ;

                                                $('#inicia11').attr('disabled',false) ; 
                                                $('#Edita11').attr('disabled',false) ;
                                                $('#Culmuna11').attr('disabled',false) ;

                                                $('#inicia11').css('color','rgb(92, 92, 92)') ; 
                                                $('#Edita11').css('color','rgb(92, 92, 92)') ;
                                                $('#Culmuna11').css('color','rgb(92, 92, 92)') ;

                                            $("#Trayecto1-1").removeClass('activos1');
                                            $("#Trayecto2").addClass('invi');
                                        return false ; 
                                      }
                                    })
                            return false ;
                        }
                        else
                        {
                            swal ('Error' , 'Fatal Error' , 'error');
                            return false ;
                        }
                }
                })
            }
        }
        else
        {
            var r0  = document.getElementById('inicia222').value; 
            var r1  = document.getElementById('Edita222').value;
            var r2  = document.getElementById('Culmuna222').value;
            var r3  = document.getElementById('como').value; 
            var r4  = 'Inscripcion'; 
            var data12   ='r0='+r0+'&r1='+r1+'&r2='+r2+'&r3='+r3+'&r4='+r4; 
                var url = 'G_D_Normal.php';
                $.ajax({  type:"POST", url:url, data:data12,
                          success:function(res1)
                          {
                            swal ('Exito' , 'El Proceso se a Puesto en Marcha' , 'success');
                            $(".validarF").removeClass('invi');
                                    $(".scrol").addClass('invi');
                                    $("#enviar").addClass('invi');

                                    $('#inicia222').val() ; 
                                    $('#Edita222').val() ;
                                    $('#Culmuna222').val() ;

                                    $('#inicia22').val() ; 
                                    $('#Edita22').val() ;
                                    $('#Culmuna22').val() ;

                                    $('#inicia22').attr('disabled',false) ; 
                                    $('#Edita22').attr('disabled',false) ;
                                    $('#Culmuna22').attr('disabled',false) ;

                                    $('#inicia22').css('color','rgb(92, 92, 92)') ; 
                                    $('#Edita22').css('color','rgb(92, 92, 92)') ;
                                    $('#Culmuna22').css('color','rgb(92, 92, 92)') ;

                                $("#Trayecto3-3").removeClass('activos5');
                                $("#Trayecto4").addClass('invi');
                            return false ; 
                          }
                        })
        }
    }); 
});

 </script>
