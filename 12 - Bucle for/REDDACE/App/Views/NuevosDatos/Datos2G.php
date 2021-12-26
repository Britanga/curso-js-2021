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
$info[1]=strtolower($_POST["Sector"]);
$info[2]=strtolower($_POST["Calle"]);
$info[3]=strtolower($_POST["Carrera"]);
$info[4]=strtolower($_POST["n_casa"]);
$info[5]=strtolower($_POST["p_referencia"]);
$info[6]=strtolower($_POST["cbx_estado"]);
$info[7]=strtolower($_POST["cbx_municipio"]);
$info[8]=strtolower($_POST["cbx_localidad"]);

if ($info[1]== '' || $info[2]== ''|| $info[3]== ''|| $info[4]== '' ) {
    echo 333;
    die();
};
if ($info[5]== '' || $info[6]== ''|| $info[7]== ''|| $info[8]== '' ) {
    echo 333;
    die();
};

################################################
include('../../../database/data1.php');
################################################
 // operacion ;
//  buscando la cedula
$opc1='Dato';         // 
$donde1 ='Usuario';     //_ 
$info1 =$LId ; 
  $controlando1= new desiciones($donde1,$info1,$opc1);
  $respuesta1 = $convercion1 =$controlando1->realizar();  
// agregando la direcion

$opc='Agregar';         // 
$donde ='Direccione';       //
$info[0]= $respuesta1[5];  //
$info[9]= 'UPDAT3';  //
$info[10]= $respuesta1[0];  //
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