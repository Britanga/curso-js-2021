<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
$opc='Ver';
$donde='Procesos';  
############  USUARIO  ########################
$info[0]=strtolower($_POST['r0']); //cedula
$info[1]=strtolower($_POST['r1']); //tipo 
#r2 = tipo de peticion puedeser (Inscripcion,Reparacion, Intensivo)
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
        <td></td>
        </tr>";
        $prioridad=0;
do 
{ 
            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $html= "<tr> 
                    <td>".$prioridad." </td>
                    <td>".$array_s['Estado']." </td>
                    <td>".$array_s['fecha_inicio']." </td>
                    <td>".$array_s['FechePARAeditar_datos']." </td>
                    <td>".$array_s['fecha_culmina']." </td>
                    <td id='opc-iz'> 


                    <button class='btn btn-outline-dark elbnt' onClick=' 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:"."sera="."+".$array_s['ID_Procesos'].", 
                        success: function(data){
                                 setTimeout(function(){
                                     $(".'"#ver-pdf2"'.").modal({
                                     show:true,
                                     backdrop:".'"static"'."
                                     }); 
                                 },20);
                                 PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf2"'.");
                     } 
                   });;'> <i class='icon icon-user unamas'></i> </button> 



                   <button class='btn btn-outline-dark elbnt' onClick=' 
                   $.ajax({
                       type:".'"POST"'.",
                       url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                       data:"."sera="."+".$array_s['ID_Procesos'].", 
                       success: function(data){
                                setTimeout(function(){
                                    $(".'"#ver-pdf2"'.").modal({
                                    show:true,
                                    backdrop:".'"static"'."
                                    }); 
                                },20);
                                PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf2"'.");
                    } 
                  });;'> <i class='icon icon-folder-open unamas'></i> </button> 



                     <button class='btn btn-outline-dark elbnt' onClick=' 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:"."sera="."+".$array_s['ID_Procesos'].", 
                        success: function(data){
                                 setTimeout(function(){
                                     $(".'"#ver-pdf"'.").modal({
                                     show:true,
                                     backdrop:".'"static"'."
                                     }); 
                                 },20);
                                 PDFObject.embed(".'"../../../Temp/reporte.pdf"'.", ".'"#view_pdf"'.");
                     } 
                   });;'> <i class='icon icon-file-pdf-o unamas'></i> </button> </td> 
                
                            </tr>";  
    echo    $html;
            };
  }while($array_s = mysqli_fetch_assoc($r)); 