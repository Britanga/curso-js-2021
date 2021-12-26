<?php

error_reporting(0);
// ////////////////////////////////////////////////////////////////

############  USUARIO  ########################
// primera materia
$info[0]=strtolower($_POST['r0']); //cedula_usuario
$info[1]=strtolower($_POST['r1']); //PNF
$info[2]=strtolower($_POST['r2']); //Trayecto
$info[3]=strtolower($_POST['r3']); // Fase
// primera materia
$info[4]=strtolower($_POST['r4']); //Trayecto1
$info[5]=strtolower($_POST['r5']); //Fase1
$info[6]=strtolower($_POST['r6']); //materia1
// segunda materia
$info[7]=strtolower($_POST['r7']); //Trayecto2
$info[8]=strtolower($_POST['r8']); //Fase2
$info[9]=strtolower($_POST['r9']); //materia2
//ID_proceso
$info[10]=strtolower($_POST['r10']); //ID_proceso
$info[11]='Reparacion'; //tipo
################################################
################################################
include('../../../database/data1.php'); 
################################################ 
################################################
// validacion
if ($info[0]== '' || $info[1]== '' || $info[2]== '' || $info[3]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'Algunos Campos Estan Vacios' , 'info');</script>"; 
    die(); 
}
if (  $info[6]== '' && $info[9]== '' ) 
{
    echo "<script> swal ('Disculpe' , 'No Ha Seleccionado Ninguna Materia' , 'info');</script>";
    die(); 
}



        $controlando= new desiciones($donde='Inscripcion' ,$info, $opc='RpGuardar');
        $r= $controlando->realizar();
            if ($r == 1) 
            {
                    echo "<script> 
                    swal ('Bien' , 'Solicitud Enviada' , 'success');
                    $('#nuebe18').addClass('atractivo');
                    setTimeout(
                        function(){
                            $('#nuebe18').removeClass('atractivo');
                            $('#nuebe18').addClass('listacono');
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

################################################
################################################ 

?>