<?php
 $d1='Carreras';
 $i1='todo';
 $o1='buscar';

// FIN de las Validaciones
################################################
################################################
include('../../../database/data1.php');
################################################
################################################
// operacion 
$combo_box_Carrera= new desiciones($d,$i,$o);
$rCarrera =$combo_box_Carrera->realizar();

?>