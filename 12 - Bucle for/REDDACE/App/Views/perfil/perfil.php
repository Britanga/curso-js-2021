<?php
    error_reporting(0);     
        
  $id_sess      = $_SESSION['ID'];
  $usuario_sess = $_SESSION['usuario'];
  $tipo_sess    = $_SESSION['tipo'];
  $CI_sess      = $_SESSION['Cedula'];
  $Paso_sess    = $_SESSION['paso'];
  $inscrito     = $_SESSION['inscrito']; 
  $LId          = $id_sess; 
  $LUser        = $usuario_sess;
  $LTipo        = $tipo_sess;
  $LCI          = $CI_sess;
  $Paso         = $Paso_sess;
  $LInscrito    = $inscrito;
 
       if ($LTipo == null) {
         echo "<script language='javascript'> alert ('Debe De Iniciar Sesión Para Continuar'); 
                 location.href='../../Views/login.php';
              </script>"; 
           die();
       };
       if ($Paso != 3) {
        echo "<script language='javascript'> alert ('No Tiene Permiso Para Entrar A Esta URL '); 
                location.href='../../Views/login.php';
             </script>"; 
          die();
      };
$estudiante = 'Estudiante';
$analista = 'Analista';
$profe = 'Profesor';
$gerente = 'Gerente';
$tipo = $LTipo; 

?> 