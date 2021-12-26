<?php

error_reporting(0); 
// ////////////////////////////////////////////////////////////////
$opc='Agregar_PNF';  
$donde='Mantenimiento';   
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula_usuario
$info[1]=strtolower($_POST['r1']); //Carrera
$info[2]=strtolower($_POST['r2']); //Duracion
$info[3]=$_POST['r3']; // Titulo
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
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 
################################################
################################################ 
// echo "<script> swal ('Disculpe' , '$r' , 'warning');</script>";

// respuesta
if($r ==1)
{
    echo "<script> 
                swal ('Bien' , 'PNF Guardado' , 'success');
               
                        $('#Carrera12').val('');
                        $('#Duracion12').val('');
                        $('#Titulo12').val('');
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
        echo "<script> swal ('Disculpe' , 'El nombre del PNF ya esta en uso' , 'info');</script>";  // algun error
    }else{
        echo "<script> swal ('Disculpe' , 'Ocurio Un Error' , 'warning');</script>";  // algun error  
    }
};
?>