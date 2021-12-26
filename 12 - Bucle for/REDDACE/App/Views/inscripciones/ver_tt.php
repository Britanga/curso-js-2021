<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='tt';
$donde='Historial'; 
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']);
$info[1]='Adelanto'; 
$info[2]='t%';   
################################################
################################################ 
include('../../../database/data1.php'); 
################################################ 
################################################ 
$controlando= new desiciones($donde,$info,$opc);
$r= $controlando->realizar(); 
################################################
################################################ 
$array_s =  mysqli_fetch_assoc($r);
################################################ 
// echo "<script> swal ('Disculpe' , '$r' , 'warning');</script>";
$html= "<tr> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>";
        $prioridad=0;
do 
{ 
            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $Tv=strtoupper($array_s['Trayecto_Actual']);
            $Fv=strtoupper($array_s['Fase_Actual']);
            $Tn=strtoupper($array_s['TrayectoN']);
            $Fn=strtoupper($array_s['FaseN']);
            $html= "<tr> 
                    <td>".$Tv.'-'.$Fv.' '.$Tn.'-'.$Fn." </td>
                    <td>".$array_s['Estado']." </td>
                    <td>".$array_s['Creado']." </td>
                    <td>".$array_s['Espesialidad']." </td>
                    <td id='opc-iz'> <a href='javascript: 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:".'"sera="'."+".$array_s['Procesos'].",
                        success: function(datos){
                                 setTimeout(function(){
                                     $(".'"#ver-pdf"'.").modal({
                                     show:true,
                                     backdrop:".'"static"'."
                                     }); 
                                 },10);
                                 PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                     } 
                   });;'> <button class='btn btn-outline-dark elbnt'> <i class='icon icon-file-pdf-o unamas'></i> </button> </a></td> 
                
                            </tr>"; 
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 