<?php

include '../librerias/fpdf/fpdf.php';

class PDF Extends FPDF
{

     function Header()
     {
         $this->Image('../../static/img/3.png',0,-2,210);
         $this->SetFont('Arial','B',15);
         $this->ln(16);
         $this->Cell(110);
         $this->Cell(80,10,'Reporte Sistema',0,0,'C');

         $this->ln(12);
       


     }

            function Footer()
             {
              $this->SetY(-15);
              $this->SetFont('Arial','I',8);
              $this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}', 0,0,'C');
        
            }

}


?>