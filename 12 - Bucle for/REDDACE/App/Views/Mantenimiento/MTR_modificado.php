<?php
error_reporting(0); 
// ////////////////////////////////////////////////////////////////
$opc='Modificar_Materia';  
$donde='Mantenimiento';   
############  USUARIO  ########################
$info[0]=strtolower($_POST['e2']); //Estado 
$info[1]=strtolower($_POST['n2']); //Nombre
$info[2]=strtolower($_POST['t2']); //Trayecto
$info[3]=strtolower($_POST['f2']); //Fase
$info[4]=strtolower($_POST['codigo123']); //Codigo de la materia
################################################
################################################
include('../../../database/data1.php');  
################################################ 
################################################
// validacion
if ($info[0]== '' || $info[1]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if ($info[2]== '' || $info[3]== '' || $info[4]== '') 
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
                swal ('Bien' , 'Materia Guardado' , 'success');
               
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
        echo "<script> swal ('Disculpe' , 'El nombre del Materia ya esta en uso' , 'info');</script>";  // algun error
    }else{
        echo "<script> swal ('Disculpe' , 'Ocurio Un Error' , 'warning');</script>";  // algun error  
    }
};
?>



