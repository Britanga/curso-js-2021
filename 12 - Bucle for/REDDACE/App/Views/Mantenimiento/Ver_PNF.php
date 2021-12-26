<?php

// error_reporting(0);
// ////////////////////////////////////////////////////////////////
#auxiliar
$opc='All'; 
$donde='Carreras';  
$info='SELECT c.*, COUNT(m.Codigo_Materias) AS mat
       FROM carreras AS c
       LEFT JOIN materias AS m
       ON m.Espesialidad = c.Espesialidad 
       WHERE 1
       GROUP BY c.Espesialidad'; 
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
$html= "";
        $prioridad=0;

do 
{ 
 
            if ($array_s != null || $array_s != "") 
            {
            $prioridad++;
            $html= "<tr> 
                    <td>".$array_s['Espesialidad']."</td>
                    <td>".$array_s['Titulo']." </td>
                    <td>".$array_s['Duracion']." </td>
                    <td>".$array_s['mat']." </td>
                    <td>".$array_s['Estado']." </td>
                    <td id='opc-iz'> <button class='btn btn-outline-dark elbnt' onClick=' 
                    $.ajax({
                        type:".'"POST"'.",
                        url:".'"../../../Generator/PDF_empresa/tramite_empresa_individual.php"'.",
                        data:".'"sera="'."+".$array_s['Duracion'].", 
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