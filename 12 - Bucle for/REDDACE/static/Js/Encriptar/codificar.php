<?php
// todo es mayescula $variable = strtoupper($texto);
// todo es minuscula $variable = strtolower($texto);
// desencrita echo substr('abcdef', -1, 1); // 
// echo strrev("Hello world!"); // outputs "!dlrow olleH"
// echo strlen ($cadena); saber la lunguitd de la cadena
// ///////////////////////////////////////////////////////////
// ///////////////////////////////////////////////////////////
error_reporting(0);
class desencriptarPHP
{
        public function comenzar($introducida,$codifica)
        { 
               
            $vieja  = $this->  pass1 = strtoupper($codifica);
            $nueva  = $this->  pass2 = strtoupper($introducida); 
            $desincriptar =[];
            $desincriptar[0]=[10,3,1,8,9,0,-1];
            $desincriptar[1]= substr($vieja, $desincriptar[0][1]); #la primera llave
            $desincriptar[2]= substr($vieja, $desincriptar[0][3]); #la segunda llave
            $desincriptar[3]= $desincriptar[1][0].$desincriptar[2][0] +$desincriptar[0][0];
            $desincriptar[4]= substr($vieja, $desincriptar[3]); #la llave primaria
            #
            $desincriptar[5]= $desincriptar[4][0];#comparando rago
            $desincriptar[6]= strlen($nueva);
            if ($desincriptar[5] != $desincriptar[6]) {
                return 0;
                die();
            }
            #
            $desincriptar[7]= $desincriptar[3]+$desincriptar[0][2]+$desincriptar[0][4]+$desincriptar[0][0]+$desincriptar[0][2];
            $desincriptar[8]= substr($vieja,$desincriptar[7]);
            $desincriptar[9]=$desincriptar[4][0]; #longitu del codigo
            $desincriptar[10]= strrev($nueva);
            $desincriptar[11]= substr($desincriptar[8], $desincriptar[0][5],$desincriptar[9]);

            if ($desincriptar[11] == $desincriptar[10]) 
            {
               return 1;
                die();
            }
            else 
            {
                return 0;
               
               die();   
            }
        }
    }
?>


            


