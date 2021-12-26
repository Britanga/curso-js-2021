 <?php
##-- -----------------------------------------------------##
#  Table conexion
##-- -----------------------------------------------------##
class conexion 
{
public $mesajess=['error','exito'];

    private function operacion($sql,$datos,$opc)
    {  
        $this-> servido = $datos[0];
        $this-> user    = $datos[1];
        $this-> ssap    = $datos[2];
        $this-> BD      = $datos[3];
        $memory1=mysqli_connect($this->servido,$this->user,$this->ssap,$this->BD);
        if ($memory1 == false)
        {
            return 'tiene algo mal en su conexion verifique';
        };

#esta condision es para realizar 
        ##  Manejo de Datos como son
        //  INSERT INTO
        //  UPDATE
        //  DELETE
##########
            if ($opc=='tabla') {
                $listo           =  mysqli_query($memory1,$sql);
                // $similitud       = [];
                return $similitud       =  mysqli_fetch_array($listo);
                
                die();
            };
            if ($opc == 'Realizar' ) 
            {
               return $listo           =  mysqli_query($memory1,$sql);
                
                        // return $asociados;
                        die();
                   
            };
            if ( $opc=='Actualizar' || $opc=='Guardar' || $opc=='Borrar') 
            {
                $listo = mysqli_query($memory1,$sql);
                if ($listo==false) 
                { 
                    echo $sql;
                    return 0;
                    die(); 
                }   
                else 
                {
                    return 1;
                    die(); 
                };
            };

            if ($opc == 'validad') 
            {
                $listo           =  mysqli_query($memory1,$sql);
                $cantidad_dato   =  mysqli_num_rows($listo);

                    if($cantidad_dato ==1)
                    {
                        return 1;
                        die();
                    }
                    else
                    {
                        return 0;
                        die();
                    }; 
            };
            

            if ($opc=='') {
               
                $listo                  =  mysqli_query($memory1,$sql);
                // $similitud       = [];
                return $similitud       =  mysqli_num_rows($listo);

                die();
            };

            }
########################################################
########################################################
########################################################
#este metodo me permite  
        ##  Buscar los datos para realizar una nueva conexion
        ##  mediante el metodo include();
##########
    public function conectar($sql,$opc='')
    {
        include ('conexion.php');
       
        $this-> sql =$sql;
        $this-> opc =$opc; 
        $this-> otro =$otro;
 
       return $this->operacion($this-> sql, $datos,$this-> opc);
               
    }
########################################################
########################################################
########################################################
########################################################
########################################################
########################################################
#este metodo es para cerrar la cuquis de Mysql; 
        ##  con estra trato de eliminar las conexciones
        ##  de consultas de validacion y de cualquier metodo
        ##  que no sea nesesario mantenerlo en ejecusion 
##########
    public function cloce()
    {

        exit('hola mundo cruel');
    }
   
};



?>