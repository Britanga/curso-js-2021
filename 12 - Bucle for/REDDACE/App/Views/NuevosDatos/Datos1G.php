<?php
error_reporting(0);
session_start();
$id_sess      = $_SESSION['ID'];
$usuario_sess = $_SESSION['usuario'];
$tipo_sess    = $_SESSION['tipo'];
$CI_sess      = $_SESSION['Cedula'];
$Paso_sess    = $_SESSION['paso'];
$LId          = $id_sess; 
$LUser        = $usuario_sess;
$LTipo        = $tipo_sess;
$LCI          = $CI_sess;
$Paso         = $Paso_sess;

     if ($LTipo == null) {
       echo "<script language='javascript'> alert ('Debe De Iniciar Sesión Para Continuar'); 
               location.href='../../Views/login.php';
            </script>"; 
         die();
     };
     if ($Paso == 3) {
      echo "<script language='javascript'> alert ('No Tiene Permiso Para Entrar A Esta URL '); 
              location.href='../../Views/login.php';
           </script>"; 
        die();
    };
  //  variables
  $opc='Agregar';         // 
  $donde ='Persona';       //
  $info[0]=strtolower( $_POST["cedulaNueva"]);
  $info[1]=strtolower( $_POST["Nombre1Nueva"]);
  $info[2]=strtolower( $_POST["Nombre2Nueva"]);
  $info[3]=strtolower( $_POST["Apellido1Nueva"]);
  $info[4]=strtolower( $_POST["Apellido2Nueva"]);
  $info[6]=strtolower( $_POST["Genero"]);
  $info[7]=strtolower( $_POST["FechaNueva"]);
  $info[8]=strtolower( $_POST["Nacionalidad"]);
  $info[9]= $LId; 
  $uxi=$info[7];
$AI=date('Y/m/d'); 
$resta =   $AI - $uxi ; 
$edad = $resta; 
$info[5]= $edad;
################################################
include('../../../database/data1.php');
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################ 
// resultados
if ($respuesta == 1) {

  echo 1;
  die();
};
if ($respuesta == 0) {
  echo 0;
  die();
};
################################################
################################################
?>