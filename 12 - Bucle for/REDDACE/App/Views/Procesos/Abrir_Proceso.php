<?php

// ////////////////////////////////////////////////////////////////
$opc='Abrir';   
$donde='Procesos'; 
############  USUARIO  ########################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
$info[0]=strtolower($_POST['r0']); //inicia11
$info[1]=strtolower($_POST['r1']); //Edita11
$info[2]=strtolower($_POST['r2']); //Culmuna11
$info[3]=strtolower($_POST['r3']); //Cedula
$info[4]=strtolower($_POST['r4']); //tipo
$aux=$_POST['r5']; //auxiliar
// validacion
if ($info[0]== '' || $info[1]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[2]== '' || $info[3]== '' || $info[4]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
################################################
 // operacion ;
 $controlando= new desiciones($donde,$info,$opc);
 $respuesta = $convercion =$controlando->realizar(); 
################################################
################################################  
// resultados
if ($respuesta == 0 && $aux == '' ) {
  echo 0; //mal
  die();
};
if ($respuesta == 1 && $aux == '') {
  echo 1; // bien
  die();
};
if ($respuesta == 1 && $aux != '') {
          echo "<script> 
          swal ('Bien' , 'Proceso en Marcha' , 'success');
          $('#Proceso_IN').addClass('atractivo');
          setTimeout(
              function(){
                  $('#Proceso_IN').removeClass('atractivo');
                  $('#Proceso_IN').addClass('listacono');
                  },1000
              );
        </script>";  // bien 
  die();
}; 
if ($respuesta == 0 && $aux != '') {
  echo "<script> 
  swal ('Error' , 'Ocurrio un Error' , 'error');
      </script>";  // mal 
      die();
};


 ?>