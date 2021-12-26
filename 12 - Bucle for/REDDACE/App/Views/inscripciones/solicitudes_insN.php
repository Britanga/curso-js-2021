<?php
session_start();
    include ('../perfil/perfil.php');
    // datos
    
    ################################################
    include('../../../database/data1.php'); 
    ################################################ 
    // operacion ;
    $info[0]=$LCI;
    $info[1]='Inscripcion';
      $controlando= new desiciones($donde='Cantidad',$info,$opc='Cupos');
       $convercion =$controlando->realizar(); 
       ################################################
       // operacion ; 
         $controlando1= new desiciones($donde='Cantidad',$info,$opc='Avance');
          $convercion1 =$controlando1->realizar(); 
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
 
                <link rel="stylesheet" href="../../../static/Css/tablaD_solicitudes2.css">

</head>
<style>

    #ver-pdf2 >  .modal-dialog {
    max-width: 100% ;
    max-height: 100% ;
}
    #ver-pdf2 > .modal-dialog > .modal-content {
    height: 700px;
}
.invi{
    display: none;
    z-index: -9999;
    opacity: 0;

}
#ver-pdf3> .modal-dialog > .modal-content { height: 700px;}
</style>
<body>
    <!-- inicio  MSJ emerjentes para el estudiante-->

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

<?php

include ('../archive/precarga1.html'); 

?>
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
                      <a class="colorr" href="#">Inscripciones / Nuevo Ingreso</a>
                  </li>
             </ol>
         </nav>
     </div> 
     </div> 
     <div class="elcontenido">
  <!-- es este espacio va la informacion -->
 
  <div class="TRCparte1">
   <h3>Solisitudes: <?php echo  $convercion1[0] ?> </h3>
   <input type="text" value="<?php echo 'Cupos: '.' '.$convercion  ?>" disabled>
</div>
   <!-- buscador -->

<!-- semi-tabla -->
<div class="TRCparte3">
 
   <div class="scrol" >
        <table cellpadding="2" > 
            <thead>
                <tr>
                    <th>N°: </th>
                    <th>Cedula</th>
                    <th>Nompre </th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr> 
            </thead>
                <tbody class="Pintar2">
                        
                </tbody>
        </table>
    
   </div>
</div>
<div class="TRCparte2"> 
    <label for="verT">Verlos a todos: 
        <button id="verT" class='btn btn-outline-dark elbnt icon icon-plus unamas' onClick=' 
                            $.ajax({
                                type:"POST",
                                url:"../../../Generator/PDF_empresa/tramite_empresa_individual.php",
                                data:sera=+ <?php echo  $convercion1[0] ?>, 
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
                                data:sera=+ <?php echo  $convercion1[0] ?>, 
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

 <input type="hidden" name="cedula" value="<?php echo $LCI ?>" id="cedula">
 <input type="hidden" name="como" value="<?php echo $LCI ?>" id="como">
</body>
<div class="modal fade" id="ver-pdf2"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="exampleModalLongTitle">Datos para Comunicarse con los estudiantes</h5> 
                                </center>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                    </div>

                    <div class="modal-body" id="view_pdf2">
                        ...
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ver-pdf"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="exampleModalLongTitle">Recaudos y datos de comunicasion</h5> 
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

<div class="modal fade" id="ver-pdf3"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h2 class="modal-title" id="exampleModalLongTitle">Listado de Estudiantes Aceptados </h2> 
                                    <p>Sele recomienda que guarde esta copia bien </p>
                                </center>
                                <button  type="button" class="close closer" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                    </div>

                    <div class="modal-body" id="view_pdf3">
                        ...
                    </div>
                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-outline-secondary closer" data-dismiss="modal">Cancelar</button>
                    </div>
        </div>
    </div>
</div
    </html>

<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<script src="../../../static/Js/clasesA.js"></script>
<script src="../../../static/Js/envioA.js"></script> 

<script>
  $(document).ready(function(){
    $(".closer").click(function (){ 
                location.href='../../Views/menu/menu.php';
            });
});
</script>
<script>
  $(document).ready(function(){
        var url     = 'ver_insN.php';   
        var Cedula  = document.getElementById('como').value;
        var tipo    = 'Inscripcion';
        var Pintar  = new Solicitud_Efecto(Cedula,tipo,url);
                Mostar =  Pintar.Solisita_tabla_Peticion(); 
});
</script>
