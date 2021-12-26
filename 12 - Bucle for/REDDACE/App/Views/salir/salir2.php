<?php
session_start();
  $id_sess      = $_SESSION['ID'];
  $usuario_sess = $_SESSION['usuario'];
  $tipo_sess    = $_SESSION['tipo'];
  $CI_sess      = $_SESSION['Cedula'];
  $Paso_sess    = $_SESSION['paso'];
session_destroy();

header("location:../../../");
?> 