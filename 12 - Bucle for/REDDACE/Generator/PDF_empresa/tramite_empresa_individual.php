<?php
###################################
include('../plantillas_repetidas/plantilla_unica.php');


$pdf=new PDF();
// $pdf->AliasPages(); 
 
$pdf->addPage();

$pdf->SetFont('Arial','',10);
$pdf->Cell(50,8,'INCES 4ta Carrera Sur',0,0,'L',0);
$pdf->Cell(80);
$pdf->Cell(25,8,'Fecha De Hoy:',0,0,'L',0);
$pdf->Cell(30,8,"",0,1,'L',0);// aqui la variable de la consulta PARA la fecha
$pdf->SetFillColor(103,200,252);
$pdf->ln(10);
$pdf->Cell(72,11,'TRAMITE REALIZADO POR LA EMPRESA:',0,0,'L',0);
$pdf->Cell(113,11,"",0,1,'L',0);//AQUI LA VARIABLE DE CONSULTA, NOMBRE DE LA EMPRESA 
$pdf->ln(-6);
$pdf->Cell(72);
$pdf->Cell(113,1,'_______________________________________________________',0,1,'L',0);

$pdf->ln(4);
$pdf->SetFillColor(232,232,232);
$pdf->Cell(10,8,'R.I.F:',0,0,'L',0);
$pdf->Cell(38,8,"",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA RIF
$pdf->Cell(8,8,'NIL:',0,0,'L',0);
$pdf->Cell(28,8,"",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA NIL
$pdf->Cell(40,8,'CODIGO APORTANTE:',0,0,'L',0);
$pdf->Cell(30,8,"",0,1,'L',0);// AQUI LA VARIABLE DE CONSULTA CODIGO APPORTANTE
$pdf->ln(10);

$pdf->Cell(47,8,'NOMBRE DEL EMPLEADO:',0,0,'L',1);
$pdf->Cell(75,8,"",0,0,'L',1);
$pdf->Cell(45,8,'CODIGO DEL EMPLEADO:',0,0,'L',1);
$pdf->Cell(15,8,"",0,1,'L',1);



$pdf->ln(5);
$pdf->Cell(28,8,'CORRELATIVO:',0,0,'L',0);
$pdf->Cell(60,8,"",0,1,'L',0);
$pdf->ln(12);
$pdf->Cell(52,8,'EL TIPO DE OPERACION FUE:',0,0,'L',0);
$pdf->Cell(15,8,"",0,0,'L',0);// AQUI LA VARIABLE  TIPO DE OPERACION


$pdf->Cell(15,8,'DEUDA:',0,0,'L',0);
$pdf->Cell(15,8,"",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA DEUDA

$pdf->Cell(12,8,'PAGO:',0,0,'L',0);
$pdf->Cell(10,8,"",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA PAGO

$pdf->ln(-10);
$pdf->Cell(135);
$pdf->Cell(35,8,'CANTIDAD DE PAGO',0,1,'C',0);
$pdf->ln(-4);
$pdf->Cell(135);
$pdf->Cell(35,8,'O DEUDA:',0,1,'C',0);
$pdf->ln(-2);
$pdf->Cell(135);
$pdf->Cell(35,8,"",0,1,'C',0);// AQUI LA VARIABLE DE CONSULTA CANTIDAD_DE_PAGO

$pdf->ln(-4);
$pdf->Cell(52);
$pdf->Cell(10,1,'_____',0,0,'L',0);//RAYA OPERACION

$pdf->ln(0);
$pdf->Cell(82);
$pdf->Cell(20,1,'_____',0,0,'L',0);// RAYA DEUDA

$pdf->ln(0);
$pdf->Cell(108);
$pdf->Cell(10,1,'_____',0,0,'L',0);// RAYA PAGO

$pdf->ln(0);
$pdf->Cell(142);
$pdf->Cell(10,1,'___________',0,0,'L',0);// RAYA CANTIDAD DE PAGO


$pdf->ln(15);
$pdf->Cell(75,8,'ESTA OPERACION FUE REALIZADA:',0,0,'L',1);
$pdf->Cell(45,8,"",0,1,'L',1);
$pdf->ln(5);
$pdf->Cell(75,8,'LA ULTIMA OPERACION FUE REALIZADA:',0,0,'L',1);
$pdf->Cell(45,8,"",0,1,'L',1);

 
$pdf->ln(5);
$pdf->Cell(28,8,'CORRELATIVO:',0,0,'L',0);
$pdf->Cell(60,8,"",0,1,'L',0);
$pdf->ln(12);
$pdf->Cell(52,8,'EL TIPO DE OPERACION FUE:',0,0,'L',0);
$pdf->Cell(15,8,"",0,0,'L',0);// AQUI LA VARIABLE  TIPO DE OPERACION


$pdf->Cell(15,8,'DEUDA:',0,0,'L',0);
$pdf->Cell(15,8,"",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA DEUDA

$pdf->Cell(12,8,'PAGO:',0,0,'L',0);
$pdf->Cell(10,8," ",0,0,'L',0);// AQUI LA VARIABLE DE CONSULTA PAGO

$pdf->ln(-10);
$pdf->Cell(135);
$pdf->Cell(35,8,'CANTIDAD DE PAGO',0,1,'C',0);
$pdf->ln(-4);
$pdf->Cell(135);
$pdf->Cell(35,8,'O DEUDA FINAL:',0,1,'C',0);
$pdf->ln(-2);
$pdf->Cell(135);
$pdf->Cell(35,8,"",0,1,'C',0);// AQUI LA VARIABLE DE CONSULTA CANTIDAD_DE_PAGO

$pdf->ln(-4);
$pdf->Cell(52);
$pdf->Cell(10,1,'_____',0,0,'L',0);//RAYA OPERACION

$pdf->ln(0);
$pdf->Cell(82);
$pdf->Cell(20,1,'_____',0,0,'L',0);// RAYA DEUDA

$pdf->ln(0);
$pdf->Cell(108);
$pdf->Cell(10,1,'_____',0,0,'L',0);// RAYA PAGO

$pdf->ln(0);
$pdf->Cell(142);
$pdf->Cell(10,1,'___________',0,0,'L',0);// RAYA CANTIDAD DE PAGO
// while($row= mysqli_fetch_assoc($resultado)){

// $pdf->Cell(45,6,$row['CI_Aprendiz'],1,0,'C');
// $pdf->Cell(45,6,$row['Primer_Nombre'],1,0,'C');
// $pdf->Cell(45,6,$row['Primer_Apellido'],1,0,'C');
// $pdf->Cell(45,6,$row['Status_Aprendiz'],1,1,'C');

// }

$pdf->output('../../temp/reporte.pdf', 'F');



?>