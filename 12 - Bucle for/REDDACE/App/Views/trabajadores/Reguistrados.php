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
    <link rel="stylesheet" href="../../../static/Css/tablaD_ANL.css">

</head>
<style>
.TRCparte3 {
    display: grid;
    grid-template-columns: 700px;
    grid-template-rows: 500px;
    grid-template-areas: "tables";
    justify-self: center;
}

table, th, td {
    text-align: center;
    border: 1px solid #32445b;
    text-transform: capitalize;
}

tr th:nth-child(1) {
    width: 40px;
    text-align: center;
    background-color: #496185;
}
tr th:nth-child(2) {
    width: 100px;
}
tr th:nth-child(5) {
    width: 40px;
}
tr th:nth-child(6) {
    width: 87px;
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
                            <a class="colorr" href="#">Analistas</a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1"> 
  <!-- es este espacio va la informacion -->

  <div class="TRCparte1">
   <h3>Control</h3>
</div>

<!-- semi-tabla -->
<div class="TRCparte3">
 
   <div class="scrol" >
       <table cellpadding="0" > 
            <thead>
                <tr>
                    <th>N°: </th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>PNF</th>
                    <th>Estado</th>
                    <th>Opcion</th>
                </tr>
            </thead>
            <tbody class="Pintar4">
                    
            </tbody>
       </table>
    </div>
</div>





   
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
 

<script src="../../../static/Js/clasesG.js"></script>
<script src="../../../static/Js/envioG.js"></script> 

<script>
    $(document).ready(function(){
                var url  = '../Combo-box/trabajadores2.php';
                    var data=1;
                    var Pintar4 = new Solicitud(data,url);   
                    var respuesta = Pintar4.Pintar4();
    });
</script>


