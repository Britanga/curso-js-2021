<?php

error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='NuevoIngreso';   
$donde='Recaudo';   
############  USUARIO  ########################
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
$info[0]='algoSi'; //auxiliar 1
$info[1]='algoNo'; //auxiliar 2
$info[2]=strtolower($_POST['Original']); //cedula_usuario 

$info[3]=strtolower($_POST['foto']); 
$info[4]=strtolower($_POST['cedula']);
$info[5]=strtolower($_POST['nota']); 
$info[6]=strtolower($_POST['titulo']); 
$info[7]=strtolower($_POST['salud']); 
$info[8]='estado'; //falta o no 
$info[9]=0; //puntos
$info[10]=0; //puntos
$info[11]=0; //puntos
$mass=0;
$meno=0;
// validacion

if ($info[3]== '' || $info[4]== '' || $info[5]== ''  ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[6]== '' || $info[7]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}


for ($i=3; $i <= 7 ; $i++) {
    if ($info[$i] =='no') {
            $info[10]=$info[10] + 1 + $i;     
           
    };
    if ($info[$i] =='si') {
            $info[11]=$info[11]  + 1 + $i;    
           
    };
}

$info[9] =$info[11] - $info[10];
$info[9] =$info[9] + 10;
if ($info[10] != 0)  {
    $info[8]='Faltan';  
}else {
    $info[8]='Completo'; 
}
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 
################################################
################################################ 
// echo "<script> swal ('Disculpe' , '$info[3]' , 'warning');</script>";

// respuesta
if($r ==1)
{
    echo "<script> 
                swal ('Bien' , 'Solicitud Enviada' , 'success');
                $('#nuebe12 ').addClass('atractivo');
                setTimeout(
                    function(){
                        $('#nuebe12 ').removeClass('atractivo');
                        $('#nuebe12 ').addClass('listacono');
                        },1000 
                    );
         </script>";  // bien 
} 
else
{
    echo "<script> swal ('Disculpe' , '$r' , 'warning');</script>";  // algun error    
};
?>