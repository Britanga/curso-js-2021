<?php

error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Agregar';  
$donde='Analista';  
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //Trabajadores
$info[1]=strtolower($_POST['r1']); //Ocupacion
$info[2]=strtolower($_POST['r2']); //Contratado
$info[3]=strtolower($_POST['r3']); // Area
$info[4]=strtolower($_POST['r4']); //Codigo
$info[5]=strtolower($_POST['r5']); //Salidad
$info[6]=strtolower($_POST['r6']); //Cedula getenre

################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// validacion
if ($info[0]== '' || $info[1]== '' || $info[2]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[3]== '' || $info[4]== '' || $info[5]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar();
################################################
################################################ 
// respuesta
if($r ==1) 
{
    echo "<script> 
                swal ('Bien' , 'Contratacion Enviada' , 'success');
                $('#Reclamo1').addClass('atractivo');
                setTimeout(
                    function(){
                        $('#Reclamo1').removeClass('atractivo');
                        $('#Reclamo1').addClass('listacono');
                        },1000
                    );
         </script>";  // bien 
} 
else
{
    echo "<script> swal ('Disculpe' , 'Ocurio Un Error' , 'warning');</script>";  // algun error    
};
?>