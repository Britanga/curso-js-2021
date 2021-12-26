<?php
// include ('../Secure/modelo.php');
// include ('error.php');
class desiciones extends conexion
{ 
   
    public $ralla      = '_';
    public $metodo     = '';

    public function __construct($donde,$info,$opc)
    { 
        $this-> donde     = $donde;
        $this-> info      = $info;
        $this-> opc       = $opc;
    }  
  

    public function realizar() 
    {

        $class          = $this-> donde ;
        $peticion       = new $class;        
        $informacion    = $this-> info; 

        $realiza= $this-> metodo = $this-> opc .$this-> ralla. $this-> donde;
            return      $listo = $peticion-> $realiza($informacion);
            die();
    }

}
  
?>   