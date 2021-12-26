<?php
include('server.php');
error_reporting(0); 
// variables
 $tipo        =$_GET['tipo'];
 $usuario     =$_GET['usuario'];
 $id          =$_GET['id'];
 $Cedula      =$_GET['Cedula'];
 $paso        =$_GET['paso'];
 $entrada     =$_GET['entrada'];
 $inscrito    =$_GET['inscrito'];

if ($entrada  == 'error' ) 
{ 
    // debo de realizar una consurta
    // si la consulta trae 3 resultados procedo a bloquear al usuario
    // sino guardo y envio datos          	
            $date = new DateTime("now", new DateTimeZone('America/Caracas'));
            $date->modify('-10 minute');
            $fecha = $date->format('Y-m-d H:i:s');
            $estato = new conexion;
            $sql="call Contro_D_Seguridad('$id', 'Fracaso', '$fecha');";
            $estato->conectar($sql,$opc='Guardar');
                if ($estato == 1) {
                header("location:../../../App/Views/login.php?fracaso=1");
                die();
                };
                if ($estato == 0) {
                echo('Ocurio un error al tratar de cambiar el estado a Fracaso');
                header("location:../../../App/Views/ayuda/ayuda.php?fracaso=1");
                    die();
                }
    die();
};
if ($entrada  == 'normal' ) 
{
        session_start(); 
    ######>  Datos que se enviaran por session para poder tener contro de las URL y
    ######>  Tener los previlegios normalisados y validados 
    ###############################################################
    ######>  ENVIO
    //  El ID del usuario que ingreso al sistema
        $_SESSION['ID']=$id;
        $LId= $_SESSION['ID'];
    //  Su Usuario
        $_SESSION['usuario']=$usuario;
        $LUsuario= $_SESSION['usuario'];
    //  y su tipo
        $_SESSION['tipo']=$tipo; 
        $LTipo= $_SESSION['tipo']; 
    //  y su tipo
    $_SESSION['Cedula']=$Cedula; 
    $LCedula= $_SESSION['Cedula'];
    //  y su tipo
    $_SESSION['paso']=$paso; 
    $LPaso= $_SESSION['paso'];
    //  y esta inscrito (solo estudiantes)
    $_SESSION['inscrito']=$inscrito; 
    $LInscrito= $_SESSION['inscrito'];
    ######> Fin del ENVIO
    #################################################################
        $date = new DateTime("now", new DateTimeZone('America/Caracas'));
        $date->modify('-10 minute');
        $fecha = $date->format('d-m-Y H:i:s');
        $estato = new conexion;
        $sql="call Contro_D_Seguridad($id, 'Activo', '$fecha');";
        $estato->conectar($sql,$opc='Guardar');
    if ($paso == 3) 
    { 
        header("location:../../Views/menu/menu.php");
    }
    if ($paso != 3) 
    {
        header("location:../../Views/menu/nueva.php");
    }
        die();
}; 
if ($entrada == 'Forzar') 
{
    
    session_start(); 
######>  ENVIO
//  El ID del usuario que ingreso al sistema
    $_SESSION['ID']=$id;
    $LId= $_SESSION['ID'];
//  Su Usuario
    $_SESSION['usuario']=$usuario;
    $LUsuario= $_SESSION['usuario'];
//  y su tipo
    $_SESSION['tipo']=$tipo; 
    $LTipo= $_SESSION['tipo']; 
//  y su tipo
$_SESSION['Cedula']=$Cedula; 
$LCedula= $_SESSION['Cedula']; 
//  y su tipo
$_SESSION['paso']='3'; 
$LPaso= $_SESSION['paso'];
 //  y esta inscrito (solo estudiantes)
 $_SESSION['inscrito']=$inscrito; 
 $LInscrito= $_SESSION['inscrito'];
######> Fin del ENVIO
#################################################################
    header("location:../../Views/menu/menu.php"); 
    die();
};

