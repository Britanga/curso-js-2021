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
    div.elcontenido {
    grid-template-columns: 150px 550px !important;
    }
    
    div.parre{
    grid-template-columns: 150px;
    grid-template-rows: repeat(3,100px);
    grid-template-areas: "parteT1" "parteT2" "parteT3";
    height: auto;
    border-top-left-radius: 20px;
    border-bottom-left-radius: 20px;
    box-shadow: 0px 0px 0px 10px #32445b;
    }
    .CLAVparte2 {
    display: flex;
    flex-flow: column nowrap;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
    box-shadow: none;
    justify-content: center;
}
    .small-box .icon 
    {
        padding-top: 23px;
    font-size: 50px;
    }
    .small-box:hover .icon {
    font-size: 53px;
}

tr th:nth-child(1){
    width: 44px;
    text-align: center;
    }

    table, th, td {
        text-align: center;
        border: 1px solid #32445b;
    }
    #ver-pdf2 >  .modal-dialog {
    max-width: 100% ;
    max-height: 100% ;
}
    #ver-pdf2 > .modal-dialog > .modal-content {
    height: 700px;
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
                            <a class="colorr" href="#"> Control De Procesos </a>
                        </li>
                    </ol>
                </nav>
            </div> 
    </div> 
    
     <div class="elcontenido Pintar1">
  <!-- es este espacio va la informacion -->

  <div class="CLAVparte1">
   <h3> Control de Procesos </h3>
</div>
   <!-- buscador -->
<div class="CLAVparte2">
   <div class="parre">

     <div id="Trayecto1" class="col-lg-3 parteT1-CLA" >
                  <!-- small box -->
             <div class="small-box btn-primary" id="Trayecto1-1">
                <div class="inner">
                    <p>Inscripciones</p>
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
             <p>Intensivos</p> 
           </div>
           <div class="icon">
             <i class="icon-signal"></i>
           </div>
         </div>
       </div>
     <!-- ./col -->
     <div id="Trayecto5" class="col-lg-3 parteT5-CLA">
         <!-- small box -->
         <div class="small-box btn-primary" id="Trayecto4-5">
           <div class="inner">
             <p>Reparaciones</p>
           </div>
           <div class="icon">
             <i class="icon-bar-chart"></i>
           </div>
         </div>
       </div>
   </div> 

</div>  


<!-- semi-tabla -->
<div class="CLAVparte3">
    <div class="scrol">
            <table cellpadding="0">
                    <thead>
                        <tr>
                            <th>N°:</th>
                            <th>Estado</th>
                            <th>Inicio</th>
                            <th>Edita</th>
                            <th>Culmina</th> 
                            <th>OBS</th>      
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


<!--  -->

<div class="modal fade" id="ver-pdf2"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="exampleModalLongTitle">Proceso</h5> 
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

<!--  -->


<div class="modal fade" id="ver-pdf"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                   <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="exampleModalLongTitle">Proceso</h5> 
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


<script src="../../../static/Js/clasesG.js"></script>
<script src="../../../static/Js/envioG.js"></script>

<script>
$(document).ready(function ()
{
    var Cedula  = document.getElementById('como').value;
    var url     = 'ver_control_T1.php';
    $("#Trayecto1").click(function (){
        // console.log(1);
        $("#Trayecto1-1").addClass('activos1');
        $("#Trayecto2-2").removeClass('activos2');
        $("#Trayecto4-5").removeClass('activos5');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='Inscripcion',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();    
        return false; 
    });
    $("#Trayecto2").click(function (){
        $("#Trayecto2-2").addClass('activos2');
        $("#Trayecto1-1").removeClass('activos1');
        $("#Trayecto4-5").removeClass('activos5');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='Intensivo',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
        return false;
    });
    $("#Trayecto5").click(function (){
        $("#Trayecto4-5").addClass('activos5');
        $("#Trayecto1-1").removeClass('activos1');
        $("#Trayecto2-2").removeClass('activos2');
        var Pintar = new Solicitud_Efecto(Cedula,tipo='Reparacion',url);
                Mostar =  Pintar.Solisita_tabla_Peticion();
        return false;
    });
 
}); 
</script>
 