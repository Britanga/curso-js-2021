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

                <link rel="stylesheet" href="../../../static/Css/pintar.css">

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
                <a class="colorr" href="NuevasG.php">Control De Planificaciones</a>
            </li>
            <li class="breadcrumb-item active text-center" aria-current="page"> 
                <i class="icon icon-home"></i> 
                <a class="colorr" href="#">Datos</a>
            </li>
          </ol>
      </nav>
  </div> 
  </div> 
  <div class="elcontenido" style="width: 100%;">
<!-- es este espacio va la informacion -->
<div class="parre2">
        <div class="que1"> 
            <h3>Datos</h3>  
            <p>Matricula: 2014</p>
        </div>

        <div class="buto" id="regresa" >
            <i class="icon icon-arrow-left"></i> 
       </div>
   


<div class="scrol">

    <div class="dato1">
            <div>
                <p>Datos Del Analista</p>
            </div>
        
            <div>
                <label for=""> Cedula:
                        <input type="text" value="respuesta" disabled>
                </label>
                <label for=""> Nombre:
                        <input type="text" value="respuesta" disabled>
                </label>
                <label for=""> Correo:
                        <input type="text" value="respuesta" disabled>
                </label>
            </div>
    </div>

    <div class="dato2">
            <div>
            <p>Datos Del Academico</p>
            </div>
            
            <div>
                <label for=""> Tipo:
                    <input type="text" value="respuesta" disabled>
                </label>
                <label for=""> Cupos:
                    <input type="text" value="respuesta" disabled>
                </label>
                <label for=""> Materias:
                    <input type="text" value="respuesta" disabled>
                </label>
            </div>
    </div>

    <div class="dato4">
        <div>
            <p> Datos De Fecha:</p>
        </div>

                        <div>
                            <label for=""> Creada:
                                <input type="text" value="respuesta" disabled>
                            </label>
                            <label for=""> Culmina:
                                <input type="text" value="respuesta" disabled>
                            </label>
                            <label for=""> Inicia:
                                <input type="text" value="respuesta" disabled>
                            </label>
                        </div>
    </div>

    <div class="dato3">
        <div>
        <p></p>
        </div>

                                <div>
                                    <label for=""> Trayecto:
                                        <input type="text" value="respuesta" disabled>
                                    </label>
                                    <label for=""> Fase:
                                        <input type="text" value="respuesta" disabled>
                                    </label>
                                    <label for=""> Sección:
                                        <input type="text" value="respuesta" disabled>
                                    </label>
                            
                                </div>
    </div>


<div class="botones2">
           <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar">
                 <span>Rechazar</span>
            </button>
            <button  type="button" class="boton mat-raised-button efecto-btn-1"  id="procesar">
                 <span>Aprobar</span>
            </button>
</div>  


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
 
    </html>

<!-- inicio del javascritp -->
            <?php
             include ('../archive/jq.php');
            ?>
<!-- fin del javascritp -->
<!-- javascritp  propios-->


<script>
 $(document).ready(function () {
    $("#regresa").click(function () {
        location.href='NuevasG.php';   
    }) 
 });


</script>