<?php

error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Agregar_Materia';  
$donde='Mantenimiento';   
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula_usuario
$info[1]=strtolower($_POST['r1']); //Carrera
$info[2]=$_POST['r2']; //Trayecto
$info[3]=$_POST['r3']; //fase
$info[4]=strtolower($_POST['r4']); //Codigo 
$info[5]=strtolower($_POST['r5']); //Nombre
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// validacion
if ($info[1]== '' || $info[2]== ''  || $info[3]== '') 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[4]== '' || $info[5]== '') 
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
                swal ('Bien' , 'Materia Guardada' , 'success');
               
                        $('.robo').val('');
                        $('.robo').css('box-shadow', '0px 0px 6px 3px #496185');
                        setTimeout(
                            function(){
                                $('.robo').css('box-shadow', 'none');
                                },1000
                            );
                        
         </script>";  // bien 
}  
else 
{
    if($r == 3)
    {
        echo "<script> swal ('Disculpe' , 'El codigo de la materia esta En uso ya ' , 'info');</script>";  // algun error
    }else{
        echo "<script> swal ('Disculpe' , 'Ocurio Un Error' , 'warning');</script>";  // algun error  
    }
};

?>