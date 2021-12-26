<?php
include 'codificar.php';
$pass1=$_POST['ssap1'];
$pass2=$_POST["pass2"];
  
$compararPASS = new desencriptarPHP;


$listoPASS=(int) $compararPASS ->comenzar($pass2,$pass1);
    if ($listoPASS == 1) {
    //   echo "<script>location.href='../Server/Secure/seccion.php?cedula=$respuesta[4]&tipo=$respuesta[2]&usuario=$respuesta[0]';</script>";                            
    die();
    };
    if ($listoPASS == 0) {
    //   echo "<script>location.href='../Server/Secure/seccion.php?cedula=$respuesta[4]&tipo=error&usuario=$respuesta[0]';</script>";                            
    die();
    }; 
    
?>