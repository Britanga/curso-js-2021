
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
$entrada      = 'Forzar';

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
$info[0]=strtolower($_POST["Pregunta1"]);
$info[1]=strtolower($_POST["Pregunta2"]);
$info[2]=strtolower($_POST["Pregunta3"]);
$info[3]=strtolower($_POST["Pregunta4"]);
$info[4]=strtolower($_POST["Respuesta1"]);
$info[5]=strtolower($_POST["Respuesta2"]);
$info[6]=strtolower($_POST["Respuesta3"]);
$info[7]=strtolower($_POST["Respuesta4"]);
$info[8]= $LId ;
$info[9]= 'UPDAT3';  //

if ($info[0]== '' || $info[2]== ''|| $info[3]== ''|| $info[4]== '' ) {
    echo 333;
    die();
};
if ($info[5]== '' || $info[6]== ''|| $info[7]== '') {
    echo 333;
    die();
};

################################################
include('../../../database/data1.php');
################################################
 // operacion ;
//  agregando la Seguridad
$opc='Agregar';         //  
$donde ='Seguridad';     //
  $controlando= new desiciones($donde,$info,$opc);
  $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################ 
// resultados
if ($respuesta == 1) { 
   // operacion ;
//  buscando la cedula
    $opc1='Dato';         // 
    $donde1 ='Usuario';     //_
    $info1 =$LId ;  

      $controlando1= new desiciones($donde1,$info1,$opc1);
      $respuesta1 = $convercion1 =$controlando1->realizar(); 
      $r=$respuesta1[5];
      $t=$respuesta1[4];
        //  variables
  $opc2='Tipo';         // 
  $donde2 ='Persona';       // 
  $i[0]=$r;  
  $i[1]=$t; 
  $controlador= new desiciones($donde2,$i,$opc2);
  $controlador->realizar(); 
  $inscrito    = 'nada';
 echo $url="'../../../../Server/Secure/seccion.php?tipo=$LTipo&usuario=$LUser&id=$LId&Cedula=$r&paso=3&entrada=$entrada&inscrito=$inscrito";
die();
  
}; 
if ($respuesta == 0) {
  echo 0;
  die();
};
################################################
################################################
?>

