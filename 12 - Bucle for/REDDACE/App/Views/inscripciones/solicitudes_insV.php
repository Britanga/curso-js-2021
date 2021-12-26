<?php
session_start();
    include ('../perfil/perfil.php');
    // datos
    
    ################################################
    include('../../../database/data1.php'); 
    ################################################
    #VARIABLES  
    $opc='PorTrayecto';
    $donde='Cantidad';
    $info=0;
    ################################################
    // operacion ;
      $controlando= new desiciones($donde,$info,$opc);
       $convercion =$controlando->realizar(); 
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
 
                <link rel="stylesheet" href="../../../static/Css/tablaD_solicitudes.css">

</head>
<style>
div.elcontenido {
    display: grid;
    grid-template-columns: 150px 600px;
    grid-template-rows: 30px 450px;
    grid-template-areas: "done donde"
                        "opcion tables" ;
    justify-content: center;
}
.TRCparte3 {
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: 1fr 30px;
    grid-template-areas: "tables" "dondes2";
}
div.scrol {
  
  height: auto;
}


label {
    cursor: pointer;
}
td{border-bottom: 1px solid #000;
}

</style>
<body>
    <!-- inicio  MSJ emerjentes para el estudiante-->

<?php

include ('../archive/precarga1.html'); 

?>

<!-- fin MSJ emerjentes para el estudiante -->
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
                      <a class="colorr" href="#">Inscripciones</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido">
  <!-- es este espacio va la informacion -->


   <!-- buscador -->
<div class="TRCparte2"  style="z-index: 9;">
   <div class="parre">
       <!-- ./col -->
 
     <!-- ./col -->
     <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <h3><?php echo  $convercion[1] ?></h3>
                    <p>T1</p>
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
             <h3><?php echo  $convercion[2]; ?></h3>
             <p>T2</p>
           </div>
           <div class="icon">
             <i class="icon-news"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto3" class="col-lg-3 parteT3-CLA">
           <!-- small box -->
           <div class="small-box btn-primary" id="Trayecto3-3">
             <div class="inner">
               <h3><?php echo  $convercion[3]; ?></h3>
               <p>T3</p>
             </div>
             <div class="icon">
             <i class="icon-news"></i>
           </div>
            </div>
         </div>

     <!-- ./col -->
     <div id="Trayecto4" class="col-lg-3 parteT4-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-4">
           <div class="inner">
             <h3><?php echo  $convercion[4]; ?></h3>
             <p>T4</p>
           </div>
           <div class="icon">
             <i class="icon-mortar-board"></i>
           </div>
         </div>
       </div>
       <!-- ./col -->

   </div> 

</div>  
<!-- semi-tabla -->
<div class="TRCparte3">
   <div class="scrol">
        <table cellpadding="6" > 
            <thead >
                <tr >
                    <th>N°: </th>
                    <th>Cedula</th>
                    <th>Nompre </th>
                    <th>Opciones</th>
                </tr> 
            </thead>
                <tbody class="Pintar2">
                        
                </tbody>
        </table>
    
   </div>
  
   <div class="scrol2 iguald">
      <label for="verT">Verlos a todos: 
            <button id="verT" class='btn btn-outline-dark elbnt icon icon-plus unamas' onClick=' 
                                $.ajax({
                                    type:"POST",
                                    url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php",
                                    data:sera=+ 1123, 
                                    success: function(data){
                                            setTimeout(function(){
                                                $("#ver-pdf2").modal({
                                                show:true,
                                                backdrop:"static"
                                                }); 
                                            },20);
                                            PDFObject.embed("../../../Temp/reporte.pdf", "#view_pdf2");
                                } 
                              });;'>  </button> 
      </label>
      <label for="aceptarT">Aceptar a todos: 
            <button id="aceptarT" class='btn btn-outline-dark elbnt icon icon-check unamas' onClick=' 
                                $.ajax({
                                    type:"POST",
                                    url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php",
                                    data:sera=+ 1123, 
                                    success: function(data)
                                    {
                                            setTimeout(function(){
                                                $("#ver-pdf3").modal({
                                                show:true,
                                                backdrop:"static"
                                                }); 
                                            },20);
                                            PDFObject.embed("../../../Temp/reporte.pdf", "#view_pdf3");

                                            $.ajax({
                                                type:"POST",
                                                url:"../Aprobar/Nuevo_ingresoT.php",
                                                data:"tipo=+Inscripcion"+"&cedula="+<?php echo $LCI ?>, 
                                                success: function(data)
                                                {
                                                    console.log(data);
                                                    return true;      
                                                } 
                                            });   
                                    } 
                                });;'>  </button> 
      </label>
</div>
</div>

<!-- 90px -->

   
  <!-- fin de la informacion -->
</div>
   </main>
<!-- inicio del pies -->
            <?php
             include ('../archive/pies.php');
            ?>
<!-- fin del pies -->

</div>
</body>
<input type="hidden" name="cedula" value="<?php echo $LCI ?>" id="cedula">
<input type="hidden" name="como"   value="<?php echo $LCI ?>" id="como">
<input type="hidden" name="como1"  value="<?php echo $LCI ?>" id="como1">
    </html>

<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->
<script src="../../../static/Js/clasesA.js"></script>
<script src="../../../static/Js/envioA.js"></script> 
<script>
  
  $(document).ready(function(){
    var Cedula  = document.getElementById('cedula').value;
    
   $("#Trayecto1").click(function(){  
                  $("#Trayecto1-1").addClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');
var tipo    = 't1';
var url     = 'ver_ST.php';   
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
   });
   $("#Trayecto2").click(function(){  
             $("#Trayecto2-2").addClass('activos2');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');
var tipo    = 't2';
var url     = 'ver_ST.php';  
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
   });
   $("#Trayecto3").click(function(){  
              $("#Trayecto3-3").addClass('activos3');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto4-4").removeClass('activos4');
$("#Trayecto4-5").removeClass('activos5');
var tipo    = 't3';
var url     = 'ver_ST.php'; 
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();

   });
   $("#Trayecto4").click(function(){  
                  $("#Trayecto4-4").addClass('activos4');
$("#Trayecto1-1").removeClass('activos1');
$("#Trayecto2-2").removeClass('activos2');
$("#Trayecto3-3").removeClass('activos3');
$("#Trayecto4-5").removeClass('activos5');
var tipo    = 't4';
var url     = 'ver_ST.php';
var Pintar = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion();

   });  


});
</script>
