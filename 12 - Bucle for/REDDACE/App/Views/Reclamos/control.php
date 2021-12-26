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
    
    <link rel="stylesheet" href="../../../static/Css/susdatos.css">  
    <link rel="stylesheet" href="../../../static/Css/contro_Reclamo.css">
</head>

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
                            <a class="colorr" href="#"> Control De Reclamos </a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1">
  <!-- es este espacio va la informacion -->

  <div class="CLAVparte1">
   <h3> Control de Reclamos </h3>
</div>
   <!-- buscador -->
<div class="CLAVparte2">
   <div class="parre">

     <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <p>Nota</p>
                </div>
                <div class="icon">
                    <i class="icon-news"></i>
                </div>
            </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto2" class="col-lg-3 parteT2-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto2-2">
           <div class="inner">
             <p>Cedula</p>
           </div>
           <div class="icon">
             <i class="icon-address-card"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto5" class="col-lg-3 parteT5-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-5">
           <div class="inner">
             <p>Nombre</p>
           </div>
           <div class="icon">
             <i class="icon-user-circle"></i>
           </div>
         </div>
       </div>
   </div> 

</div>  


<!-- semi-tabla -->
<div class="CLAVparte3">
    <div class="scrol">
            <table cellpadding="10">
                    <thead>
                        <tr>
                            <th>N°:</th>
                            <th>Error</th>
                            <th>Solución</th>
                            <th>Proceso</th>
                            <th>Solicitada</th> 
                            <th>PDF</th>      
                        </tr>
                  </thead>

                  <tbody class="Pintar2">
                     
                    </tbody>
            </table>
    </div>
</div>
   </main>
<!-- inicio del pies -->
            <?php
             include ('../archive/pies.php');
            ?>
<!-- fin del pies -->

</div>
</body>
<div id="comunicasion2">
    
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
<input type="hidden" name="Usuario" value="<?php echo$LUser?>" id="como1">
<input type="hidden" name="cedula_usuario" value="<?php echo $LCI ?>" id="cedula_usuario">
<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->


<script src="../../../static/Js/clases.js"></script>
<script src="../../../static/Js/envio.js"></script>

<script>
$(document).ready(function ()
{
    var Cedula  = document.getElementById('como').value;
    var url     = 'ver_historial.php';
    $("#Trayecto1").click(function (){
        $("#Trayecto1-1").addClass('activos1');
        $("#Trayecto2-2").removeClass('activos2');
        $("#Trayecto4-5").removeClass('activos5');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='nota',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();   
        return false; 
    });
    $("#Trayecto2").click(function (){
        $("#Trayecto2-2").addClass('activos2');
        $("#Trayecto1-1").removeClass('activos1');
        $("#Trayecto4-5").removeClass('activos5');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='cedula',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
        return false;
    });
    $("#Trayecto5").click(function (){
        $("#Trayecto4-5").addClass('activos5');
        $("#Trayecto1-1").removeClass('activos1');
        $("#Trayecto2-2").removeClass('activos2');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='nombre',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
        return false;
    });
 
}); 
</script>
 