<?php

error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Agregar';  
$donde='Peticion';   
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula_usuario
$info[1]=strtolower($_POST['r1']); //Carrera
$info[2]=strtolower($_POST['r2']); //Trayecto
$info[3]=strtolower($_POST['r3']); // Fase
$info[4]=strtolower($_POST['r4']); //Matricula
$info[5]=strtolower($_POST['r5']); //seccion
$info[6]=strtolower($_POST['r6']); //Historial Acadeico
$info[7]='Solicitudes'; // 
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// validacion
if ($info[0]== '' || $info[1]== '' || $info[2]== ''  || $info[3]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[4]== '' || $info[5]== '' || $info[6]== ''  || $info[7]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar();  
################################################
################################################ 
// echo "<script> swal ('Disculpe' , '$r' , 'warning');</script>";

// respuesta
if($r ==1)
{
    echo "<script> 
                swal ('Bien' , 'Solicitud Enviada' , 'success');
                $('#Recork_Nota').addClass('atractivo');
                setTimeout(
                    function(){
                        $('#Recork_Nota').removeClass('atractivo');
                        $('#Recork_Nota').addClass('listacono');
                        },1000
                    );
         </script>";  // bien 
} 
else
{
    echo "<script> swal ('Disculpe' , 'Ocurio Un Error' , 'warning');</script>";  // algun error    
};
?>