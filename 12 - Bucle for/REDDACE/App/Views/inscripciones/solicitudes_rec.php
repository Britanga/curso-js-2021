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
    grid-template-rows: 40px 1fr 30px;
grid-template-areas: "dondes3""tables" "dondes2";
}
div.scrol {height: auto;}
.scrol2 {
grid-area: dondes2-start;
height: auto;
}
.scrol3 {
grid-area: dondes3-start;
height: auto;
}
form{
    display: grid;
    flex-flow: row nowrap;
    justify-content: space-evenly;
    margin: 0;
    padding: 0;
        padding-left: 0px;
    grid-template-columns: repeat(3,1fr);
    grid-template-areas: "tra  mat soli";
    grid-template-rows: 40px;
    gap: 20px;
    margin: 0px auto;
    padding: 0px 7px;
    padding-left: 10px;
}
form > #Trayecto1 {grid-area: tra-start;margin:0px} 
form > #materia1 {grid-area: mat-start;margin:0px}
form > #soli{grid-area: soli-start;margin:0px; color: #000;}
label {
    cursor: pointer;
}
td{border-bottom: 1px solid #000;
}
.parre2{
    
    overflow-y: scroll;
    
}
.TRCparte2 {
    background-color: #FFF;
    padding-bottom: 38px;
    overflow-y: scroll;
}
.TRCparte2 > div {
    border-bottom: solid 1px #000;
    padding: 5px 0px;
}
sup{
    color: #003673;
    font-family: ROBOTO;
}
.invi{
    display: none;
    z-index: -9999;
    opacity: 0;
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
           
</div>  
<!-- semi-tabla -->
<div class="TRCparte3">
<div class="scrol3 iguald">
     <form action="">
                    <select class="robo" name="Trayecto1" id="Trayecto1"  required>
                            <option value="">Trayecto </option>
                            <option value="Ts">Ts</option>
                            <option value="T1">T1</option>
                            <option value="T2">T2</option>
                            <option value="T3">T3</option>
                            <option value="T4">T4</option>  
                    </select>  


           <select name="materia1" class="robo" id="materia1" required>
                            <option value=""> Materia </option>
            </select>
         <h3 id="soli">Solisitudes:000</h3>
     </form>
</div>
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
      <label for="verT">Rechazar a todos: 
            <button id="verT" class='btn btn-outline-dark elbnt icon icon-close unamas' onClick=' 
            $.ajax({
                                    type:"POST",
                                    url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php",
                                    data:"tipo=+Reparacion"+"&cedula="+<?php echo $LCI ?>, 
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
                                                url:"../Rechazar/ReparacionT.php",
                                                data:"tipo=+Reparacion"+"&cedula="+<?php echo $LCI ?>, 
                                                success: function(data)
                                                {
                                                    console.log(data);
                                                    return true;      
                                                } 
                                            });   
                                    } 
                                });;'>  </button>
      </label>
      <label for="aceptarT">Aceptar a todos: 
            <button id="aceptarT" class='btn btn-outline-dark elbnt icon icon-check unamas' onClick=' 
                                $.ajax({
                                    type:"POST",
                                    url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php",
                                    data:"tipo=+Reparacion"+"&cedula="+<?php echo $LCI ?>, 
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
                                                url:"../Aprobar/ReparacionT.php",
                                                data:"tipo=+Reparacion"+"&cedula="+<?php echo $LCI ?>, 
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
 <script >
    $(document).ready(function(){
        $("#Trayecto1").change(function () {
            $("#Trayecto1 option:selected").each(function () {
                Trayecto1 = $(this).val();
                //   console.log(Trayecto1);
                $.post("../Combo-box/D-box-materias2.php", { Trayecto1: Trayecto1 , cedula: <?php echo $LCI ?> }, function(data){
                    $("#materia1").html(data);
                });   
                var Tipo1='Finalizado';
                var Tipo2='Reparacion';
                var Tipo3='En Espera';
                $.post("../Combo-box/D-box-materias4.php", { Trayecto1: Trayecto1 , cedula: <?php echo $LCI ?>,Espera: Tipo3 ,Reparacion: Tipo2 ,Finalizado: Tipo1 }, function(data){
                    $(".TRCparte2").html(data);
                });    
            });
        }) 
        
        $("#materia1").change(function () {
            $("#materia1 option:selected").each(function () {
                materia1 = $(this).val();
                //   console.log(materia1);
                  var tipo='Reparacion';
                $.post("../Combo-box/materia4.php", {materia1: materia1 , cedula: <?php echo $LCI ?> ,tipo: tipo}, function(data){
                    $(".Pintar2").html(data);
                    //    console.log(data); soli
                });      
            });
    });
    $("#materia1").change(function () {
            $("#materia1 option:selected").each(function () {
                materia1 = $(this).val();
                //   console.log(materia1);
                  var tipo='Reparacion';
                $.post("datos_C.php", {materia1: materia1 , cedula: <?php echo $LCI ?> ,tipo: tipo}, function(data){
                    $("#soli").html(data);
                });      
            });
    });
});
    </script>  
