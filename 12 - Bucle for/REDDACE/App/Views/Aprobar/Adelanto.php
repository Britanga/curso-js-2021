<?php
 ################################################
 include('../../../database/data1.php'); 
 ################################################ 
//  variable
$info[0]=strtolower($_POST['r5']);   // iD proceso
$info[1]='PNF???';
$info[2]=strtolower($_POST['r0']);   // Cedula Est
################################################ 
$info[3]=strtolower($_POST['r1']);   // TrayectoV
$info[4]=strtolower($_POST['r2']);   // FaseV
$info[5]=strtolower($_POST['r3']);   // TrayectoN
$info[6]=strtolower($_POST['r4']);   // FaseN
 // operacion ;
 if ( $info[3]== '' || $info[4]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if (  $info[5]== '' && $info[6]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'No Ha Seleccionado Ninguna Materia' , 'info');</script>";
    die(); 
}
    $controlando= new desiciones($donde='Inscripcion',$info,$opc='Adelanto');
    $convercion =$controlando->realizar(); 
    ################################################ 
    if ($convercion == 1) 
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
    die();  
   }else
   {
    echo "<script> 
    swal ('Error' , 'Ocurrio un Error' , 'error');
        </script>";  // mal 
        die();
   }
?>