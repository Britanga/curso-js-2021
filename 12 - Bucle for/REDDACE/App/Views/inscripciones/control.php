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
    <link rel="stylesheet" href="../../../static/Css/contro_solicitud.css"> 
    <link rel="stylesheet" href="../../../static/Css/tablaD_REC.css">
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
div.elcontenido {
    display: grid;
    grid-template-columns: 260px 550px;
    grid-template-rows: 45px 500px;
    grid-template-areas: "donde donde"
                        "opcion tables" ;
    justify-content: center;
}
.invi{
    display: none
}


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
                            <a class="colorr" href="#"> Control De Inscripción </a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1">
  <!-- es este espacio va la informacion -->

<div class="CLAVparte2">
   <div class="parre">

     <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <p>Ts</p>
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
             <p>T1 a T4</p>
           </div>
           <div class="icon">
             <i class="icon-folder-open-o"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto3" class="col-lg-3 parteT3-CLA">
           <!-- small box -->
           <div class="small-box btn-primary" id="Trayecto3-3">
             <div class="inner">
               <p>Repitencia</p>
             </div>
             <div class="icon">
               <i class="icon-id-card-o"></i>
             </div>
            </div>
         </div>
 
     <!-- ./col -->
     <div id="Trayecto4" class="col-lg-3 parteT4-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-4">
           <div class="inner">
             <p>Equivalencia</p>
           </div>
           <div class="icon">
             <i class="icon-folder-o"></i>
           </div>
         </div>
       </div>
       <!-- ./col -->
     <!-- ./col -->
     <div id="Trayecto5" class="col-lg-3 parteT5-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-5">
           <div class="inner">
             <p>Intensivos</p>
           </div>
           <div class="icon">
             <i class="icon-news"></i>
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
                    <tr class="invi" id="Ests">
                        <th>N°:</th>
                        <th>Estado</th>
                        <th>Creada</th> 
                        <th>PNF</th> 
                        <th>PDF</th>      
                    </tr>
                    <tr class="invi" id="Estt">
                        <th>Tv:Fv Tn:Fn</th>
                        <th>Estado</th>
                        <th>Creada</th>
                        <th>PNF</th>   
                        <th>PDF</th>      

                    </tr>
                    <tr class="invi" id="Esin">
                        <th>Periodo</th>
                        <th>Materias</th>
                        <th>PNF</th>   
                        <th>PDF</th> 
                    </tr>
                    <tr class="invi" id="Eseq">
                        <th>Carrera Que Desea</th>
                        <th>Carrera Actual</th>   
                        <th>Solicitada</th>   
                        <th>Estado</th>
                        <th>PDF</th>  
                    </tr>
                    <tr class="invi" id="Esrp">
                        <th>Periodo</th>
                        <th>Materias</th>
                        <th>PNF</th>   
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
                                    <h5 class="modal-title" id="exampleModalLongTitle">Solicitud</h5> 
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
    <input type="hidden" name="cedula" value="<?php echo $LCI ?>" id="cedula">
    <input type="hidden" name="como" value="<?php echo $LCI ?>" id="como">
<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->
 

<script src="../../../static/Js/clases.js"></script>
<script src="../../../static/Js/envio.js"></script> 

<script>
  
  $(document).ready(function(){
    var Cedula  = document.getElementById('cedula').value;
    var tipo    = 'Inscripcion';
   $("#Trayecto1").click(function(){  
                  $("#Trayecto1-1").addClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');

$("#Ests").removeClass('invi');
$("#Estt").addClass('invi');
$("#Esin").addClass('invi');
$("#Eseq").addClass('invi');
$("#Esrp").addClass('invi');
var url     = 'ver_ts.php';   
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
   });
   $("#Trayecto2").click(function(){  
             $("#Trayecto2-2").addClass('activos2');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');
$("#Estt").removeClass('invi');
$("#Ests").addClass('invi');
$("#Esin").addClass('invi');
$("#Eseq").addClass('invi');
$("#Esrp").addClass('invi');
var url     = 'ver_tt.php';  
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
   });
   $("#Trayecto3").click(function(){  
              $("#Trayecto3-3").addClass('activos3');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');
$("#Esrp").removeClass('invi');
$("#Ests").addClass('invi');
$("#Esin").addClass('invi');
$("#Eseq").addClass('invi');
$("#Estt").addClass('invi');
var url     = 'ver_rp.php'; 
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();

   });
   $("#Trayecto4").click(function(){  
                  $("#Trayecto4-4").addClass('activos4');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-5").removeClass('activos5');
$("#Eseq").removeClass('invi');
$("#Ests").addClass('invi');
$("#Esin").addClass('invi');
$("#Estt").addClass('invi');
$("#Esrp").addClass('invi');
var url     = 'ver_eq.php';
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();

   });  
   $("#Trayecto5").click(function(){  
                  $("#Trayecto4-5").addClass('activos5');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
$("#Esin").removeClass('invi');
$("#Ests").addClass('invi');
$("#Estt").addClass('invi');
$("#Eseq").addClass('invi');
$("#Esrp").addClass('invi');
var url     = 'ver_in.php';
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();

}); 
});
</script>
