<?php
#                  LEA las instruciones  
// error_reporting(0);
########################################################################################
####################    LA OPC='Actualizar o Guardar' ##################################
      #retorna un 1=true->exito o un 0= false->error
      #ya que es un 1 o 0 no es nesesario hacer condicion y se manda de
      #una el retorno para que pueda ser manejado desde otro punto del docuento
########################################################################################
########################################################################################
// /////////////////////////////////////////////////////////////////////////////////////
########################################################################################
####################    LA OPC='' #################################################
      # es un mysqli_num_rows y se usa para mandar una sieta cantidad 
      # esta cantida se puede espresar como 0> = true y  false <0
########################################################################################
########################################################################################
// /////////////////////////////////////////////////////////////////////////////////////
########################################################################################
####################    LA OPC='Realizar' ##############################################
      # solo manda un enlase este enlase servira mas adelante para 
      # poder crear un while o cualquier bucle que se requiera
########################################################################################
########################################################################################
####################    LA OPC='tabla' ##############################################
      # puedo sacar el valor o los valores de modo array[?] 
      # sabiendo que posicion esta el valor que necesito 
########################################################################################
########################################################################################
class Panel extends conexion
{
  public function Analista_Panel($dato)
   {$cedula= $dato; 
    $analista= new Analista();
    $r= $analista->PNF_Analista($cedula); // el PNF = $es
      $pnf = $r[0];
      $info= new Cantidad();
      $d[0]=$aux=$info->in_Cantidad($pnf);
      $d[1]=$aux=$info->rp_Cantidad($pnf);
      $d[2]=$aux=$info->Reclamos_Cantidad($pnf);
      $d[3]=$aux=$info->Solicitudes_Cantidad($pnf);
      $d[4]=$aux=$info->IncripsionN_Cantidad($pnf);
    return $d[0].$d[1].$d[2].$d[3].$d[4];
   }
  public function Gerente_Panel($dato='')
   {$cedula= $dato;
      $info= new Cantidad();
      $d[0]=$aux=$info->PNF_Cantidad();
      $d[1]=$aux=$info->Trabajadores_Cantidad();
      $d[2]=$aux=$info->Planificasion_Cantidad();
      $d[3]=$aux=$info->Procesos_Cantidad();
      return $d[0].$d[1].$d[2].$d[3];
    // return $d[];
   }
}
class Login extends conexion
{
        #   METODOS
        public function Entrar_Login($datos)
        {
          #$datos               =$usuario  $contra;
          $los                  =$datos;
              $validando= new PK(); 
              return    $inf=$validando->validar_PK($donde='Login',$los);
            die();
          }
};
class Usuario extends conexion
{
        #   METODOS
        public function Validar_Usuario($datos)
        {
          #$datos               =usuario ;
          $los                  =$datos;
              $validando= new PK(); 
              return    $inf=$validando->validar_PK($donde='Usuario',$los);
            die();
        }
        public function Nuevo_Usuario($datos)
        {
          #$datos               = Tipo , usuarioR , ssap2;
          $los                  =$datos;
              $sql = "INSERT INTO usuarios (ID_usuario, Nombre_user, Contra,     Estado_user,   Tipo, Personas_Cedula, paso) 
                      VALUES                 (NULL,      '$los[1]' , '$los[2]', 'Activo', '$los[0]', NULL, '0');";
              return $respuesta = $this->conectar($sql,$opc='Guardar');
            die();
        }
        public function Paso_Usuario($id , $ci='' , $pa)
        {  
                   if ( $pa == 1) 
                   {
                      $sql="UPDATE usuarios 
                            SET Personas_Cedula ='$ci' , paso = '$pa'
                            WHERE ID_usuario    ='$id';";
                   }
                   else
                   {
                    $sql="UPDATE usuarios 
                          SET    paso = '$pa'
                          WHERE  ID_usuario ='$id';";
                   }
                 return $respuesta = $this->conectar($sql,$opc='Actualizar');
            die();
        }
        public function Cedula_Usuario($datos)
        {
          #$datos               = cedula;
          $los                  =$datos;
            $sql = "SELECT  Nombre_user
                    FROM    usuarios 
                    WHERE   Personas_Cedula = '$los';";
              return $respuesta = $this->conectar($sql,$opc='');
            die();
        }
        public function Dato_Usuario($datos)
        {
          #$datos               = cedula;
          $los                  =$datos;
            $sql = "SELECT  *
                    FROM    usuarios 
                    WHERE   ID_usuario = '$los';";
              return $respuesta = $this->conectar($sql,$opc='tabla');
            die();
        }
        public function Pasos_Usuario($datos)
        {
          #$datos               = id;
          $los                  =$datos;
              $sql = "SELECT  paso
                      FROM    usuarios 
                      WHERE   ID_usuario = '$los';";
            return  $respuesta = $this->conectar($sql,$opc='tabla');
            die();
        }
}; 
class Cantidad extends conexion
{ 
  public function Procesos_de_Estudiantes_Cantidad($datos)
  { $d= $datos;
    $tipo='';
    $sql= "SELECT COUNT(PcsE.Procesos) AS canti
              FROM  procesos_de_estudiantes AS PcsE
              INNER JOIN procesos  AS pcs
              ON pcs.ID_Procesos = PcsE.ID_Procesos
              WHERE PcsE.Estado = 'En Espera'
              AND pcs.Tipo = 'Inscripcion'";
      $respuesta0 = $this->conectar($sql,$opc='tabla');
     $sql1= "SELECT COUNT(PcsE.Procesos) AS canti
              FROM  procesos_de_estudiantes AS PcsE
              INNER JOIN procesos  AS pcs
              ON pcs.ID_Procesos = PcsE.ID_Procesos
              WHERE PcsE.Estado = 'En Espera'
              AND pcs.Tipo = 'Reparacion'";
      $respuesta1 = $this->conectar($sql1,$opc='tabla');
     $sql2= "SELECT COUNT(PcsE.Procesos) AS canti
              FROM  procesos_de_estudiantes AS PcsE
              INNER JOIN procesos  AS pcs
              ON pcs.ID_Procesos = PcsE.ID_Procesos
              WHERE PcsE.Estado = 'En Espera'
              AND pcs.Tipo = 'Intensivo'";
      $respuesta2 = $this->conectar($sql2,$opc='tabla');

        return$respuesta0[0].$respuesta1[0].$respuesta2[0];
  }
  public function Cupos_Cantidad($datos)
  { $d= $datos;
    $analista= new Analista();
    $es= $analista->PNF_Analista($d[0]); // el PNF = $es
    $proceso= new Procesos();
    $pr= $proceso->Estado_Procesos($d[1]); // el id del proceso $pr
    $sql="SELECT cupo  
          FROM inscripciones 
          INNER JOIN procesos 
          ON procesos.ID_Procesos = inscripciones.ID_Procesos
          WHERE inscripciones.Espesialidad = '$es[0]'
          AND procesos.Tipo = '$d[1]'
          AND procesos.Estado ='finalizado'
          AND procesos.ID_Procesos = '$pr[0]'";
    $r1 = $this->conectar($sql,$opc='tabla');
    
      $sql1="SELECT COUNT(PcsE.Procesos) AS canti
                 FROM  procesos_de_estudiantes AS PcsE
                 INNER JOIN procesos  AS pcs
                 ON pcs.ID_Procesos = PcsE.ID_Procesos
                 WHERE PcsE.Espesialidad = '$es[0]'
                 AND pcs.Tipo = '$d[1]'
                 AND PcsE.Estado = 'Aprobado'
                 AND pcs.ID_Procesos = '$pr[0]'";
    $r2 = $this->conectar($sql1,$opc='tabla');
    $resultado = $r1[0] - $r2[0] ;
    return $resultado ;
  }
  public function Avance_Cantidad($datos = '')
  { $d= $datos;
    $analista= new Analista();
    $es= $analista->PNF_Analista($d[0]); // el PNF = $es
    $proceso= new Procesos();
    $pr= $proceso->Estado_Procesos($d[1]); // el id del proceso $pr

        $sql="SELECT COUNT(*)
              FROM procesos_de_estudiantes AS pde 
              INNER JOIN procesos AS p 
              ON p.ID_Procesos = pde.ID_Procesos
              WHERE pde.Estado ='En Espera'
              AND p.Tipo ='$d[1]'
              AND pde.Espesialidad = '$es[0]'
              AND p.ID_Procesos = '$pr[0]'";

   return $r = $this->conectar($sql,$opc='tabla');
  }
  public function PorTrayecto_Cantidad($datos)
  { $d= $datos;
    $tipo='';
    $sera='';
      for ($i=1; $i < 5 ; $i++) { 
         $sql= "SELECT COUNT(PcsE.Procesos) AS canti
                FROM  procesos_de_estudiantes AS PcsE
                INNER JOIN procesos  AS pcs
                ON pcs.ID_Procesos = PcsE.ID_Procesos
                INNER JOIN avances AS a
                ON a.Procesos_DE = PcsE.Procesos
                WHERE PcsE.Estado = 'En Espera'
                AND pcs.Tipo = 'Adelanto'
                AND a.TrayectoN = 't$i'";
       $res= $this->conectar($sql,$opc='tabla');
       $sera[$i]=$res[0];
      }
     return  $sera;
  }
  public function Procesos1E_Cantidad($datos)
  {$d=$datos;
    $pnf1 = new Analista();
    $es = $pnf1->PNF_Analista($d[0]); // cedula
    $proceso= new Procesos();
    $pr= $proceso->Estado_Procesos($d[2]); // el id del proceso $pr

      $sql="SELECT  COUNT(r.ID_Recuperaciones)   AS Canti
            FROM recuperaciones AS r 
            INNER JOIN procesos_de_estudiantes AS pr 
            ON pr.Procesos = r.ID_Procesos 
            INNER JOIN procesos AS pro
            ON pro.ID_Procesos = pr.ID_Procesos
            INNER JOIN personas AS p 
            ON p.Cedula = pr.Cedula_Estudiantes 
            INNER JOIN materias AS m 
            ON m.Codigo_Materias = r.Codigo_Materias 
            WHERE m.Codigo_Materias = '$d[1]'
            AND pro.Tipo = '$d[2]'
            AND pr.Estado = 'En Espera'
            AND pr.Espesialidad = '$es[0]'
            AND r.Tipo = '$d[2]' 
            AND pro.ID_Procesos='$pr[0]'";
      return $re = $this->conectar($sql,$opc='tabla');
  }
  public function in_Cantidad($datos)
  {$d=$datos;
      $sql ="SELECT COUNT(*) 
                  FROM procesos_de_estudiantes AS pde 
                  INNER JOIN procesos AS p ON p.ID_Procesos = pde.ID_Procesos 
                  LEFT JOIN recuperaciones ON recuperaciones.ID_Procesos =pde.Procesos 
                  WHERE pde.Estado = 'En Espera' 
                  AND p.Tipo = 'Intensivo' 
                  AND pde.Espesialidad = '$d' 
                  AND pde.Creado BETWEEN '01-01-1999' AND now() 
                  GROUP BY pde.Trayecto_Actual 
                  ORDER BY pde.Trayecto_Actual ASC ";
          $r1=  $this->conectar($sql,$opc='tabla'); 
        return  $r1[0];
  }
  public function rp_Cantidad($datos)
  {$d=$datos;
      $sql ="SELECT COUNT(*)       
              FROM procesos_de_estudiantes AS pde
              INNER JOIN procesos  AS p
              ON p.ID_Procesos = pde.ID_Procesos
              LEFT JOIN recuperaciones 
              ON recuperaciones.ID_Procesos =pde.Procesos
              WHERE pde.Estado = 'En Espera'
              AND p.Tipo = 'Reparacion'
              AND pde.Espesialidad = '$d'
              AND pde.Creado BETWEEN '01-01-1999' AND now()";
          $re1=  $this->conectar($sql,$opc='tabla');  
        return  $re1[0];
  }
  public function Reclamos_Cantidad($datos)
  {$d=$datos;
     $sql1="SELECT COUNT(*)
          FROM peticiones
          WHERE    1
          AND Tipo = 'Reclamos'
          AND Carrera = '$d'
          AND Estado='En Espera'";
          $r1=  $this->conectar($sql1,$opc='tabla');  
    return$r1[0];
  }
  public function Solicitudes_Cantidad($datos)
  {$d=$datos;
    $sql2="SELECT COUNT(*)
          FROM peticiones
          WHERE    1
          AND Tipo = 'Solicitudes'
          AND Carrera = '$d'
          AND Estado='En Espera'";
          $r2=  $this->conectar($sql2,$opc='tabla');  
    return$r2[0];
  }
  public function IncripsionN_Cantidad($datos)
  {$d=$datos;
    $sql="SELECT COUNT(*)
          FROM procesos_de_estudiantes
          INNER JOIN procesos 
          ON procesos.ID_Procesos = procesos_de_estudiantes.ID_Procesos
          WHERE    1
          AND procesos_de_estudiantes.Estado ='En Espera'
          AND procesos.Tipo = 'Inscripcion'
          AND procesos_de_estudiantes.Espesialidad= '$d'";
          $r2=  $this->conectar($sql,$opc='tabla'); 
    return $r2[0];
  }
  public function PNF_Cantidad()
  { $d=$dato;
      $sql="SELECT COUNT(*)
            FROM carreras
            WHERE Estado = 'Activo' ";
      $r=  $this->conectar($sql,$opc='tabla');
      return $r[0];
  }
  public function Trabajadores_Cantidad()
  { 
        $sql="SELECT COUNT(*)
            FROM trabajador AS T 
            INNER JOIN personas AS P 
            ON P.Cedula = T.Personas_Cedula
            INNER JOIN analistas AS A
            ON A.Analista_Cedula = T.Personas_Cedula
            WHERE 1 ";
        $r=  $this->conectar($sql,$opc='tabla');
        return $r[0];
  }
  public function Planificasion_Cantidad()
  { 
    $sql="SELECT COUNT(*)
            FROM Planificaciones  
            WHERE 1
            AND  Aprobado = 'Sin Respuesta'";
    $r=  $this->conectar($sql,$opc='tabla');
        return $r[0];
  }
  public function Procesos_Cantidad()
  { 
    $sql="SELECT COUNT(*)
            FROM procesos  
            WHERE 1
            AND  Estado = 'En Proceso'";
    $r=  $this->conectar($sql,$opc='tabla');
        return $r[0];
  }
};   
#-- -----------------------------------------------------#
#-- Table Seguridad
class Seguridad extends conexion{  
  public function Agregar_Seguridad($datos)
  {
      $d                    =$datos;
   $sql = "INSERT INTO seguridad ( Pregunta1,Pregunta2,Pregunta3,Pregunta4, Respuesta1,Respuesta2,Respuesta3,Respuesta4,ID_usuario)
           VALUES                  ('$d[0]' , '$d[1]', '$d[2]', '$d[3]', '$d[4]', '$d[5]', '$d[6]', '$d[7]', '$d[8]');";
          $respuesta = $this->conectar($sql,$opc='Realizar');
      if ($d[9] == 'UPDAT3') 
      {
        $usuario= new Usuario();
        $usuario->Paso_Usuario($id=$d[8] , $ci='' , $pa='3');
      }
     return $respuesta;
  }
  public function Pass_Seguridad($datos)
  {
    $los                  =$datos;
        $validando= new PK();   
        return    $inf=$validando->validar_PK($donde='Pass',$los);
      die();
    }
  public function Comparar_Seguridad($datos)
  {
      $los                  =$datos;
      $validando= new PK(); 
      return    $inf=$validando->validar_PK($donde='Seguridad',$los);
        die();
  }
  public function Validando_Seguridad($datos)
  {
      $los                  =$datos;
      $validando= new PK(); 
      return $inf=$validando->validar_PK($donde='Seguridad2',$los);
      die(); 
  }
  public function Editar_Seguridad($datos)
  {
      $d                  =$datos;
          $sql="UPDATE seguridad 
                SET    Respuesta1 = '$d[2]' ,Respuesta2 = '$d[3]' ,Respuesta3 = '$d[4]',
                       Pregunta1  = '$d[5]' ,Pregunta2  = '$d[6]' ,Pregunta3  = '$d[7]'
                WHERE  ID_usuario = '$d[8]';";
          $respuesta = $this->conectar($sql,$opc='Actualizar');
          return 1;
      die(); 
  } 
};
#-- -----------------------------------------------------#
#-- Table Seguridad
class Peticion extends conexion{  
  public function Agregar_Peticion($datos)
  {$d=$datos; $sq="";
      $sq="SELECT peti.ID_Peticiones 
      FROM   peticiones  AS peti
      INNER  JOIN $d[7] AS soli
      ON     soli.ID_Peticiones = peti.ID_Peticiones 
      WHERE  peti.Tipo ='$d[7]'
      AND    soli.Tipo_doc = '$d[6]'
      AND    peti.Cedula_Estudiantes = '$d[0]'";
        $r18=  $this->conectar($sq,$opc='tabla');
        $r19=  $this->conectar($sq,$opc='validad');
      if ( $r19 == 1) 
      {
      $sqlBorar="DELETE FROM peticiones WHERE ID_Peticiones = '$r18[0]'";
            $respu=  $this->conectar($sqlBorar,$opc='Borrar');
      }
   $sql = "INSERT INTO peticiones ( Solisitada, tipo, carrera, Trayecto, Fase,
                                   Seccion, Matricula, Estado, Cedula_Estudiantes) 
           VALUES ( now(), '$d[7]', '$d[1]', '$d[2]', '$d[3]', '$d[5]', '$d[4]','En Espera', '$d[0]');";
              $respuesta=  $this->conectar($sql,$opc='Guardar');


              if ($respuesta != false) 
              {

                $sql2="SELECT ID_Peticiones
                       FROM peticiones
                       WHERE  Cedula_Estudiantes = '$d[0]'
                       ORDER BY ID_Peticiones DESC;";
                $r1=  $this->conectar($sql2,$opc='tabla');


                              if ($d[7] == 'Solicitudes' ) 
                              {
                                    $sql3="INSERT INTO solicitudes ( Tipo_doc, ID_Peticiones) 
                                           VALUES ('$d[6]', '$r1[0]');";
                                        $r2=  $this->conectar($sql3,$opc='Guardar');
                              }
                              if ($d[7] == 'Reclamos' ) 
                              {
                                $sql3="INSERT INTO reclamos ( ID_Peticiones, Tipo_doc, Original, Error) 
                                      VALUES ( '$r1[0]', '$d[6]', '$d[9]', '$d[8]');";
                                        $r2=  $this->conectar($sql3,$opc='Guardar');
                              }
                              // if ($d[7] == 'Conjelar' )  
                              // {
                              //   die();
                              // }
                              // if ($d[7] == 'Retiro' ) 
                              // {
                              //   die();
                              // }
               return  1; 
              }
              

        
  }
  public function Ver_Peticion($datos)
  {
      $d                  =$datos;
        $sql="SELECT $d[2].*,
                          peticiones.Solisitada , peticiones.Estado
                FROM $d[2]
                RIGHT JOIN peticiones
                ON       peticiones.ID_Peticiones = $d[2].ID_Peticiones
                WHERE    peticiones.Cedula_Estudiantes = '$d[0]' 
                AND      $d[2].Tipo_doc ='$d[1]'
                AND peticiones.tipo = '$d[2]'
                ORDER by peticiones.Solisitada DESC;";
          return $respuesta = $this->conectar($sql,$opc='Realizar');
      die(); 
  }
  public function Aprobar_Peticion($datos)
  { $d=$datos;
      $sql="UPDATE peticiones 
            SET    Respondida = now(), Respuesta = '$d[2]', Estado = 'Aprobado', Cedula_Analista = '$d[0]' 
            WHERE  ID_Peticiones = '$d[1]';";
     return $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function Rechazar_Peticion($datos)
  { $d=$datos;
    $sql="UPDATE peticiones 
          SET    Respondida = now(), Respuesta = '$d[2]', Estado = 'Rechazado', Cedula_Analista = '$d[0]' 
          WHERE  ID_Peticiones = '$d[1]';";
   return $respuesta = $this->conectar($sql,$opc='Actualizar');
  }

};
#-- -----------------------------------------------------#
#-- Table Estados
class Estados extends conexion{ 
    public function buscar_Estados($datos)
    {
        #$datos               =usuario ;
        $los                  =$datos;
      $sql = "CALL Combo_box_direccion ('E','$los');";
        return $respuesta = $this->conectar($sql,$opc='Realizar');
    }
};   
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table Municipios
class Municipios extends conexion{
    public function buscar_Municipios($codigo)
    {
      $sql = "CALL Combo_box_direccion ('M','$codigo' );";         
        return $respuesta = $this->conectar($sql,$opc='Realizar');
    }
}; 
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table Parroquias
class Parroquias extends conexion{
  public function buscar_Parroquias($codigo)
  {
    $sql = "CALL Combo_box_direccion ('P','$codigo' );";
      return $respuesta = $this->conectar($sql,$opc='Realizar');
  }
};
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table Direcciones
class Direccione extends conexion{ 
  #   METODOS
  public function Agregar_Direccione($datos)
  {
    #datos= Cedula, sector, calle, carrera, numero_de_casa, punto_referencia, Estado, Municipio, parroquia
    $d=$datos; 
      $sql=" CALL Direccion('$d[0]','$d[1]','$d[2]','$d[3]','$d[4]','$d[5]','$d[6]','$d[7]','$d[8]');";
         $respuesta=  $this->conectar($sql,$opc='Guardar');
        if ($d[9] == 'UPDAT3') 
        {
          $usuario= new Usuario();
          $usuario->Paso_Usuario($id=$d[10] , $ci='' , $pa='2');
        }
       return $respuesta;
      die();
  }

  public function editar_Direccione($datos)
  {   
     $d=$datos;
          $sql ="UPDATE direcciones 
                 SET C_P_E ='$d[0]' , C_P_M = '$d[1]' , 	IDP   = '$d[2]' ,
                     Sector='$d[3]' , Calle = '$d[4]' , Carrera = '$d[5]' ,
                     N_casa='$d[6]' , Pnt_referen = '$d[7]'
                 WHERE Personas_Cedula = '$d[8]';";
          return $respuesta=  $this->conectar($sql,$opc='Actualizar');
          die();
  }
}
#-- -----------------------------------------------------#  
#-- -----------------------------------------------------#
#-- Table Personas
class Persona extends conexion{
  public function Editar_Persona($datos)
  { $d=$datos;
    
    include("desenciptar.php");   
            $compararPASS = new desencriptarPHP;
            $listoPASS=(int) $compararPASS ->comenzar($d[5],$d[6]);
            if ($listoPASS == 1) { 
              $sql ="CALL Editar_DatosBasico('$d[0]','$d[1]','$d[2]','$d[3]','$d[4]')";
               $respuesta=  $this->conectar($sql,$opc='Actualizar');
              return 1;
              die();
            }else
            {
              return 2;
              die(); 
            }
  }
  public function Agregar_Persona($datos)
  { 
    $los                  =$datos;
    $sql = "INSERT INTO personas (Cedula,     Nombre1, Nombre2, Apellido1,  Apellido2,   Edad,   Genero,  Fecha_naci, Nacionalidad) 
            VALUES               ('$los[0]','$los[1]', '$los[2]', '$los[3]' , '$los[4]', '$los[5]' ,  '$los[6]', '$los[7]', '$los[8]' );";
        $this->conectar($sql,$opc='Guardar');
        $this->tipo_Persona($los);
          $usuario= new Usuario();
          $usuario->Paso_Usuario($id=$los[9] , $ci=$los[0] , $pa='1');
        return 1;
        die();
  }
  
  public function Tipo_Persona($datos)
  { $d=$datos;
      if ($d[1]=='Estudiante') 
      {
        $estudiante= new Estudiante();
        $estudiante->Agregar_Estudiante($d);
      } 
      if ($d[1]=='Analista') 
      {
        $Analista= new Analista();
        $Analista->Agregar_Trabajador($d);
      }
      if ($d[1]=='Gerente') 
      {
        $Gerente= new Gerente();
        $Gerente->Agregar_Gerente($d);
      }
  }
}  
#-- -----------------------------------------------------#
#-- Table Estudiante
class Estudiante extends conexion{
  public function Estado_Estudiante($datos)
  { $d=$datos;
     $sql="SELECT Matricula, Estado , PNF
            FROM   estudiantes 
            WHERE  Personas_Cedula = '$d';"; 
     return $respuesta = $this->conectar($sql,$opc='tabla');
  }
  public function Agregar_Estudiante($datos)
  { $d=$datos;
    $sql="INSERT INTO estudiantes (Personas_Cedula, Inscrito, Estado, Matricula) 
          VALUES ('$d[0]', NULL, 'Activo', NULL);";
     $this->conectar($sql,$opc='Actualizar');
  }
  public function Tiempo_Estudiante($dato)
  {$d=$dato;
    $sqlBuscar="SELECT Inscrito 
                FROM estudiantes
                WHERE Personas_Cedula = '$d'"; 
    return $respuesta = $this->conectar($sqlBuscar,$opc='tabla');
  } 
  public function Verificar_Estudiante($dato)
  {$d=$dato;
    $entrada='Forzar';
    $tipo='Estudiante';
    if ($d[0] == 'No') 
    {
      $sql1="UPDATE estudiantes 
            SET Inscrito = 'No' 
            WHERE Personas_Cedula = '$d[3]';";
      $respuesta = $this->conectar($sql1,$opc='Actualizar');

      echo $url="'../../../../Server/Secure/seccion.php?tipo=$tipo&usuario=$d[5]&id=$d[4]&Cedula=$d[3]&paso=3&entrada=$entrada&inscrito=$d[0]";
    }
    else 
    {
      $sql2="UPDATE estudiantes 
             SET Inscrito = 'Si' , Matricula = '$d[1]',  	PNF = '$d[2]'
             WHERE Personas_Cedula = '$d[3]';";
      $respuesta = $this->conectar($sql2,$opc='Actualizar');

    echo $url="'../../../../Server/Secure/seccion.php?tipo=$tipo&usuario=$d[5]&id=$d[4]&Cedula=$d[3]&paso=3&entrada=$entrada&inscrito=$d[0]";

    }
  } 
}  
#-- -----------------------------------------------------#
#-- Table Analista
class Analista extends conexion{ 
  public function Agregar_Trabajador($dato)
  {$d=$dato;
    $sql="INSERT INTO trabajador (Personas_Cedula, Estado) 
          VALUES ('$d[0]', 'Espera');";
      $this->conectar($sql,$opc='Guardar');
  } 
  public function Agregar_Analista($dato)
  {$d=$dato;
    $sql="INSERT INTO analistas VALUES ('$d[0]', '$d[6]', '$d[4]', 'Espera', '$d[2]', '$d[5]', '$d[3]', '$d[1]', 'no');";
    $respuesta = $this->conectar($sql,$opc='Guardar');
    return  $update = $this->Actualizar_Trabajador($d[0]);
  } 
  public function Actualizar_Trabajador($dato)
  {$d=$dato;
    $sql="UPDATE trabajador 
          SET    Estado = 'Activo' 
          WHERE  Personas_Cedula = '$d';";
    return $respuesta = $this->conectar($sql,$opc='Guardar');
  } 
  public function Eliminar_Analista($dato)
  {$d=$dato;
     $sql="UPDATE analistas 
          SET Estado = 'Retirado' 
          WHERE  Analista_Cedula = '$d';";
      $respuesta = $this->conectar($sql,$opc='Actualizar');

      return  $this->Eliminar_Trabajador($d);

  } 
  public function Eliminar_Trabajador($dato)
  {$d=$dato;
    $sql="UPDATE trabajador 
          SET Estado = 'Retiro' 
          WHERE   Personas_Cedula = '$d';";
    return $respuesta = $this->conectar($sql,$opc='Actualizar');
  } 
  public function Confirmar_Analista($dato)
  {$d=$dato;
    $sqlBuscar="SELECT A.Confirmar , A.Analista_Cedula  ,T.Personas_Cedula
                FROM analistas AS A 
                RIGHT JOIN trabajador AS T 
                ON T.Personas_Cedula = A.Analista_Cedula 
                WHERE A.Analista_Cedula ='$d'"; 
    return $respuesta = $this->conectar($sqlBuscar,$opc='tabla');
  } 
  public function Verificar_Analista($dato)
  {$d=$dato;
      $validando= new PK(); 
        return    $inf=$validando->validar_PK($donde='Analista',$d);
      die();

  } 
  public function PNF_Analista($dato)
  {$d=$dato;
    $sql="SELECT A.Area 
          FROM analistas AS A
          INNER JOIN trabajador AS T
          ON T.Personas_Cedula = A.Analista_Cedula
          WHERE A.Analista_Cedula = '$d'
          AND A.Confirmar = 'si'
          AND T.Estado = 'Activo'";
    return $r= $this->conectar($sql,$opc='tabla');
    
  }
}; 
#-- -----------------------------------------------------#
#-- Table Gerente
class Gerente extends conexion{ 
  public function Agregar_Gerente($dato)
  {  $d=$dato;
    $sql="INSERT INTO gerentes (Personas_Cedula, Estado) 
    VALUES ('$d[0]', 'Activo');";
    $this->conectar($sql,$opc='Guardar');
  } 
}; 
#-- -----------------------------------------------------#
#-- Table Matricula
class Matricula extends conexion{
  public function Editar_Matricula($datos)
  { $d=$datos;
      $sql="UPDATE estudiantes 
            SET Matricula = '$d[0]' 
            WHERE Personas_Cedula ='$d[1]';";
      $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
}  
#-- -----------------------------------------------------#
#-- Table Inscripcion
class Inscripcion extends conexion
{
  public function Editar_Inscripcion($datos)
  { $d=$datos;
      $sql="UPDATE estudiantes 
            SET Matricula = '$d[0]' 
            WHERE Personas_Cedula ='$d[1]';";
      $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function NuevoIngreso_Inscripcion($datos)
  { $d=$datos;

    $sl22="SELECT COUNT(*) , Procesos 
           FROM procesos_de_estudiantes  AS pde
           WHERE pde.ID_Procesos  =    '$d[0]' 
           AND pde.Cedula_Estudiantes ='$d[2]'";
    $ra = $this->conectar($sl22,$opc='tabla');
    if ($ra[0]==1) {
      $sl21="DELETE  FROM procesos_de_estudiantes 
             WHERE procesos_de_estudiantes.Procesos = '$ra[1]'";
         $oca= $this->conectar($sl21,$opc='Borrar');
    }
    $sql="INSERT INTO procesos_de_estudiantes ( ID_Procesos, Estado, Creado, Espesialidad, Trayecto_Actual, Fase_Actual, Cedula_Estudiantes) 
    VALUES ('$d[0]', 'En Espera', now(), '$d[1]', 'Ts', 'F1', '$d[2]');";
    $respuesta = $this->conectar($sql,$opc='Guardar');

          if ($respuesta == 1) {
            $Recaudo= new Recaudo();
            $Recaudo-> NuevoIngreso_Recaudo($d);
                      $comunicasion =  $Recaudo;
              return  $comunicasion;
              die();

          }else{
            return 0;
            die();
          }
  }
  public function Adelanto_Inscripcion($datos)
  { $d=$datos;

    $sl22="SELECT COUNT(*) , Procesos 
           FROM procesos_de_estudiantes  AS pde
           WHERE pde.ID_Procesos  =    '$d[0]' 
           AND pde.Cedula_Estudiantes ='$d[2]'";
    $ra = $this->conectar($sl22,$opc='tabla');
    if ($ra[0] ==1) {
      $sl21="DELETE  FROM procesos_de_estudiantes 
             WHERE procesos_de_estudiantes.Procesos = '$ra[1]'";
         $oca= $this->conectar($sl21,$opc='Borrar');
    }
       $matricula =new Estudiante();
       $m= $matricula-> Estado_Estudiante($d[2]);
       $sql="INSERT INTO procesos_de_estudiantes 
     VALUES (null, '$d[0]', 'En Espera', now(), '$m[2]', '$d[3]', '$d[4]', '$d[2]',null,null,'$m[0]',null);";
       $respuesta = $this->conectar($sql,$opc='Guardar');
      //  tengo que saver el puesto de este proveso de estudiante esta (yo me entiendo xD)
      $sl33="SELECT COUNT(*) , Procesos 
             FROM procesos_de_estudiantes  AS pde
             WHERE pde.ID_Procesos  =    '$d[0]' 
             AND pde.Cedula_Estudiantes ='$d[2]'";
      $res = $this->conectar($sl33,$opc='tabla');
       $Avances = new Avances();
       $a= $Avances->Avance_Avances($t=$d[5],$f=$d[6],$p=$res[1]);
        if ($a == 1) 
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
  public function Rechazar_Inscripcion($datos)
  { $d=$datos;
      $sql="UPDATE procesos_de_estudiantes 
            SET Estado = 'Rechazado', Cedula_Analista = '$d[0]' 
            WHERE Procesos = '$d[1]';";
      $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function Aprobar_Inscripcion($datos)
  { $d=$datos;
      $sql="UPDATE procesos_de_estudiantes 
            SET Estado = 'Aprobado', Cedula_Analista = '$d[0]' 
            WHERE Procesos = '$d[1]';";
      $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function AprobarT_Inscripcion($datos)
  { $d=$datos;

    $kienes= new Historial();
     $r     =  $kienes->NuevoIngreso_Historial($d);
        $array_s =  mysqli_fetch_assoc($r);
    ################################################ 
    do 
    { 
                if ($array_s != null || $array_s != "") 
                {
                  $donde =$array_s['Procesos'];
                    $sql="UPDATE procesos_de_estudiantes 
                          SET Estado = 'Aprobado', Cedula_Analista = '$d[0]' 
                          WHERE Procesos = '$donde';";
                    $respuesta = $this->conectar($sql,$opc='Actualizar');
                };
      }while($array_s = mysqli_fetch_assoc($r)); 

  //  return 1;
  }
  public function InGuardar_Inscripcion($datos)
  { $d=$datos;
    $t=$d[11];
      $sql="SELECT COUNT(*) , Procesos 
                FROM procesos_de_estudiantes
                WHERE ID_Procesos  =    '$d[10]' 
                AND Cedula_Estudiantes ='$d[0]'";
          $ra  = $this->conectar($sql,$opc='validad');
          $res = $this->conectar($sql,$opc='tabla');
            if ($ra==1) 
            {
                  $sql1="SELECT Tipo
                         FROM   procesos 
                         WHERE  ID_Procesos ='$d[10]'";
                  $ra1 = $this->conectar($sql1,$opc='tabla');
                  if ($ra1[0] == 'Intensivo')
                  {
                    $sqlBorrador="DELETE 
                                  FROM  procesos_de_estudiantes 
                                  WHERE Procesos ='$res[1]'";
                    $ra12 = $this->conectar($sqlBorrador,$opc='Borrar');
                      $sql9="INSERT INTO procesos_de_estudiantes ( ID_Procesos, Estado, Creado, Espesialidad, Trayecto_Actual, Fase_Actual, Cedula_Estudiantes ) 
                             VALUES ( '$d[10]', 'En Espera', now() , '$d[1]', '$d[2]', '$d[3]', '$d[0]');";
                      $res = $this->conectar($sql9,$opc='Guardar'); 

                       $SQlBuscardor="SELECT ep.Procesos , sp.Tipo
                                      FROM   procesos_de_estudiantes AS ep
                                      INNER JOIN Procesos  AS sp
                                      ON sp.ID_Procesos = ep.ID_Procesos
                                      WHERE ep.Cedula_Estudiantes ='$d[0]'
                                      AND   ep.ID_Procesos  = '$d[10]'
                                      AND   sp.Tipo = 'Intensivo'
                                      GROUP BY ep.ID_Procesos
                                      ORDER BY ep.Procesos ASC";
                                      $p = $this->conectar($SQlBuscardor,$opc='tabla'); 
                                      $recuperar = new Recuperacion;
                                      $recuperar->Materia_Recuperacion($d,$p[0],$t);
                      return $recuperar;
                  };
                  
               die();
            }
            else
            {
                $sql9="INSERT INTO procesos_de_estudiantes ( ID_Procesos, Estado, Creado, Espesialidad, Trayecto_Actual, Fase_Actual, Cedula_Estudiantes ) 
                       VALUES ( '$d[10]', 'En Espera', now() , '$d[1]', '$d[2]', '$d[3]', '$d[0]');";
                $res = $this->conectar($sql9,$opc='Guardar'); 

                  $SQlBuscardor="SELECT ep.Procesos , sp.Tipo
                                FROM   procesos_de_estudiantes AS ep
                                INNER JOIN Procesos  AS sp
                                ON sp.ID_Procesos = ep.ID_Procesos
                                WHERE ep.Cedula_Estudiantes ='$d[0]'
                                AND   ep.ID_Procesos  = '$d[10]'
                                AND   sp.Tipo = 'Intensivo'
                                GROUP BY ep.ID_Procesos
                                ORDER BY ep.Procesos ASC";
                                $p = $this->conectar($SQlBuscardor,$opc='tabla'); 
                                $recuperar = new Recuperacion;
                                $recuperar->Materia_Recuperacion($d,$p[0],$t);
                return $recuperar;
            }
  }
  public function RpGuardar_Inscripcion($datos)
  { $d=$datos;
    $t=$d[11];
      $sql="SELECT COUNT(*) , Procesos 
                FROM procesos_de_estudiantes
                WHERE ID_Procesos  =    '$d[10]' 
                AND Cedula_Estudiantes ='$d[0]'";
          $ra  = $this->conectar($sql,$opc='validad');
          $res = $this->conectar($sql,$opc='tabla');
            if ($ra==1) 
            {
                  $sql1="SELECT Tipo
                         FROM   procesos 
                         WHERE  ID_Procesos ='$d[10]'";
                  $ra1 = $this->conectar($sql1,$opc='tabla');
                  if ($ra1[0] == 'Reparacion')
                  {
                    $sqlBorrador="DELETE 
                                  FROM  procesos_de_estudiantes 
                                  WHERE Procesos ='$res[1]'";
                    $ra12 = $this->conectar($sqlBorrador,$opc='Borrar');
                      $sql9="INSERT INTO procesos_de_estudiantes ( ID_Procesos, Estado, Creado, Espesialidad, Trayecto_Actual, Fase_Actual, Cedula_Estudiantes ) 
                             VALUES ( '$d[10]', 'En Espera', now() , '$d[1]', '$d[2]', '$d[3]', '$d[0]');";
                      $res = $this->conectar($sql9,$opc='Guardar'); 

                       $SQlBuscardor="SELECT ep.Procesos , sp.Tipo
                                      FROM   procesos_de_estudiantes AS ep
                                      INNER JOIN Procesos  AS sp
                                      ON sp.ID_Procesos = ep.ID_Procesos
                                      WHERE ep.Cedula_Estudiantes ='$d[0]'
                                      AND   ep.ID_Procesos  = '$d[10]'
                                      AND   sp.Tipo = 'Reparacion'
                                      GROUP BY ep.ID_Procesos
                                      ORDER BY ep.Procesos ASC";
                                      $p = $this->conectar($SQlBuscardor,$opc='tabla'); 
                                      $recuperar = new Recuperacion;
                                      $recuperar->Materia_Recuperacion($d,$p[0],$t);
                      return $recuperar;
                  };
                  
               die();
            }
            else
            {
                $sql9="INSERT INTO procesos_de_estudiantes ( ID_Procesos, Estado, Creado, Espesialidad, Trayecto_Actual, Fase_Actual, Cedula_Estudiantes ) 
                       VALUES ( '$d[10]', 'En Espera', now() , '$d[1]', '$d[2]', '$d[3]', '$d[0]');";
                $res = $this->conectar($sql9,$opc='Guardar'); 

                  $SQlBuscardor="SELECT ep.Procesos , sp.Tipo
                                FROM   procesos_de_estudiantes AS ep
                                INNER JOIN Procesos  AS sp
                                ON sp.ID_Procesos = ep.ID_Procesos
                                WHERE ep.Cedula_Estudiantes ='$d[0]'
                                AND   ep.ID_Procesos  = '$d[10]'
                                AND   sp.Tipo = 'Reparacion'
                                GROUP BY ep.ID_Procesos
                                ORDER BY ep.Procesos ASC";
                                $p = $this->conectar($SQlBuscardor,$opc='tabla'); 
                                $recuperar = new Recuperacion;
                                $recuperar->Materia_Recuperacion($d,$p[0],$t);
                return $recuperar;
            }
  }
}
#-- -----------------------------------------------------#
#-- Table  Recuperacion
class Recuperacion extends conexion{
  public function Materia_Recuperacion($datos , $proceso , $tipo)
  { $p=$proceso;
    $d=$datos;
    $t=$tipo;
    $pe=date('Y');
    /*********************************/
        // primera materia
        $d1[1]=$d[4]; //Trayecto1
        $d1[2]=$d[5]; //Fase1
        $d1[3]=$d[6]; //materia1
        // segunda materia
        $d2[1]=$d[7]; //Trayecto2
        $d2[2]=$d[8]; //Fase2
        $d2[3]=$d[9]; //materia2
    /*********************************/

    $sql1="INSERT INTO recuperaciones VALUES (null,'$p','$t','$d1[1]','$d1[2]','$d1[3]','$d[1]','$pe','En Espera');";
      $respuesta1=  $this->conectar($sql1,$opc='Guardar');

    $sql2="INSERT INTO recuperaciones VALUES (null,'$p','$t','$d2[1]','$d2[2]','$d2[3]','$d[1]','$pe','En Espera');";
      $respuesta2=  $this->conectar($sql2,$opc='Guardar');

      return 1;
  }
  public function Procesos_Recuperacion($datos)
  {$d=$datos;
    $pnf1 = new Analista();
    $es = $pnf1->PNF_Analista($d[0]); // cedula
    $proceso= new Procesos();
    $pr= $proceso->Estado_Procesos($d[2]); // el id del proceso $pr

      $sql="SELECT p.Cedula , p.Nombre1 , p.Apellido1 , p.Nacionalidad ,
                    r.Codigo_Materias , pr.Procesos , r.ID_Recuperaciones
            FROM recuperaciones AS r 
            INNER JOIN procesos_de_estudiantes AS pr 
            ON pr.Procesos = r.ID_Procesos 
            INNER JOIN procesos AS pro
            ON pro.ID_Procesos = pr.ID_Procesos
            INNER JOIN personas AS p 
            ON p.Cedula = pr.Cedula_Estudiantes 
            INNER JOIN materias AS m 
            ON m.Codigo_Materias = r.Codigo_Materias 
            WHERE m.Codigo_Materias = '$d[1]'
            AND pro.Tipo = '$d[2]'
            AND pr.Estado = 'En Espera'
            AND pr.Espesialidad = '$es[0]'
            AND r.Tipo = '$d[2]' 
            AND pro.ID_Procesos='$pr[0]'";
      return $re = $this->conectar($sql,$opc='Realizar');
  }
  public function Aprobar_Recuperacion($datos)
  {$d=$datos;
    $sqlBuscar="SELECT COUNT(*)
                FROM recuperaciones 
                WHERE ID_Procesos = '$d[1]'
                AND Aprovar_materia = 'En espera' ;";
        $r1= $res1= $this->conectar($sqlBuscar,$opc='tabla');

              $sql="UPDATE recuperaciones 
                    SET Aprovar_materia = 'Aprobado' 
                    WHERE ID_Recuperaciones = '$d[2]';";
        $respuesta = $this->conectar($sql,$opc='Actualizar');
    if ( $r1[0] == 2) 
    {
          return 1;
    }
    if ($r1[0] == 1 ) {
      $pnf1 = new Inscripcion();
      $es = $pnf1->Aprobar_Inscripcion($d); // cedula
      return 1;
    }
  }
  public function Rechazar_Recuperacion($datos)
  {$d=$datos;
    $sqlBuscar="SELECT COUNT(*)
                FROM recuperaciones 
                WHERE ID_Procesos = '$d[1]'
                AND Aprovar_materia = 'En espera' ;";
        $r1= $res1= $this->conectar($sqlBuscar,$opc='tabla');

              $sql="UPDATE recuperaciones 
                    SET Aprovar_materia = 'Rechazado' 
                    WHERE ID_Recuperaciones = '$d[2]';";
        $respuesta = $this->conectar($sql,$opc='Actualizar');
    if ( $r1[0] == 2) 
    {
          return 1;
    }
    if ($r1[0] == 1 ) {
      $pnf1 = new Inscripcion();
      $es = $pnf1->Rechazar_Inscripcion($d); // cedula
      return 1;
    }
  }
}
#-- -----------------------------------------------------#
#-- Table  Recuperacion
class Avances extends conexion{
  public function Avance_Avances($t,$f,$p)
  { /*********************************/
              $AI= date('Y'); 
              $m = $AI; 
    /*********************************/
      $sql="INSERT INTO avances VALUES (NULL, '$t', '$f', '$m', 'ns', '$p');";
      $respuesta=  $this->conectar($sql,$opc='Guardar');
      return 1;
  }
}
#-- Table Recaudo
class Recaudo extends conexion{
  public function NuevoIngreso_Recaudo($datos)
  { $d=$datos;
      $sql="SELECT COUNT(*)
            FROM recaudos 
            WHERE Estudiantes_Cedula = '$d[2]'"; 
       $r1 = $this->conectar($sql,$opc='');
     
    if ($r1 == 0) 
    {
      $sql="INSERT INTO recaudos (Estudiantes_Cedula, Estado, Cedula, Foto, Titulo, Carta_culminacion, Salud, Puntos) 
            VALUES ('$d[2]' ,'$d[8]' , '$d[4]' , '$d[3]' , '$d[6]',  '$d[5]' ,'$d[7]' , '$d[9]' );";
      return $respuesta = $this->conectar($sql,$opc='Guardar');
    }else { 
      $sql3="DELETE FROM recaudos 
             WHERE Estudiantes_Cedula = '$d[2]';";
           $respuesta = $this->conectar($sql3,$opc='Guardar');

           $sql4="INSERT INTO recaudos (Estudiantes_Cedula, Estado, Cedula, Foto, Titulo, Carta_culminacion, Salud, Puntos) 
            VALUES ('$d[2]' ,'$d[8]' , '$d[4]' , '$d[3]' , '$d[6]',  '$d[5]' ,'$d[7]' , '$d[9]' );";
      return $respuesta = $this->conectar($sql4,$opc='Guardar');
    }
    
      
  }
}  
#-- -----------------------------------------------------#
#-- Table Historial
class Historial extends conexion
{
  public function in_Historial($datos)
  { $d=$datos;
      $sql ="SELECT pde.Estado, pde.Espesialidad, pde.Creado,
                    pde.Procesos,   pde.Respuesta,
                    pde.Trayecto_Actual,
                    p.Tipo,
                    COUNT(recuperaciones.Espesialidad) AS ma
             FROM procesos_de_estudiantes AS pde
             INNER JOIN procesos  AS p
             ON p.ID_Procesos = pde.ID_Procesos
             LEFT JOIN recuperaciones 
             ON recuperaciones.ID_Procesos =pde.Procesos
             WHERE pde.Cedula_Estudiantes = '$d[0]'
             AND p.Tipo = 'Intensivo'
             AND pde.Trayecto_Actual LIKE 't%'
             AND pde.Creado BETWEEN '01-01-1999' AND now()
             GROUP BY pde.Trayecto_Actual 
             ORDER BY pde.Trayecto_Actual ASC;";
        return  $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function ts_Historial($datos)
  { $d=$datos;
      $sql ="SELECT pde.Estado, pde.Espesialidad, pde.Creado,
                    pde.Procesos,   pde.Respuesta,
                    pde.Trayecto_Actual,
                    p.Tipo
             FROM procesos_de_estudiantes AS pde
             INNER JOIN procesos  AS p
             ON p.ID_Procesos = pde.ID_Procesos
             WHERE pde.Cedula_Estudiantes = '$d[0]'
             AND p.Tipo = 'Inscripcion'
             AND pde.Trayecto_Actual LIKE 'ts%'
             AND pde.Creado BETWEEN '01-01-1999' AND now()
             GROUP BY pde.Trayecto_Actual 
             ORDER BY pde.Trayecto_Actual ASC;";
        return  $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function tt_Historial($datos)
  { $d=$datos;
      $sql ="SELECT pde.Estado, pde.Espesialidad, pde.Creado,
                    pde.Procesos,   pde.Respuesta,
                    pde.Trayecto_Actual,
                    p.Tipo, a.TrayectoN, a.FaseN , pde.Fase_Actual
             FROM procesos_de_estudiantes AS pde
             INNER JOIN procesos  AS p
             ON p.ID_Procesos = pde.ID_Procesos
             INNER JOIN avances AS a 
             ON a.Procesos_DE = pde.Procesos
             WHERE pde.Cedula_Estudiantes = '$d[0]'
             AND p.Tipo = '$d[1]'
             AND pde.Creado BETWEEN '01-01-1999' AND now()
             GROUP BY pde.Trayecto_Actual 
             ORDER BY pde.Trayecto_Actual ASC;";
        return  $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function rp_Historial($datos)
  { $d=$datos;
    $sql ="SELECT pde.Estado, pde.Espesialidad, pde.Creado,
              pde.Procesos,   pde.Respuesta,
              pde.Trayecto_Actual,
              p.Tipo,
              COUNT(recuperaciones.Espesialidad) AS ma
          FROM procesos_de_estudiantes AS pde
          INNER JOIN procesos  AS p
          ON p.ID_Procesos = pde.ID_Procesos
          LEFT JOIN recuperaciones 
          ON recuperaciones.ID_Procesos =pde.Procesos
          WHERE pde.Cedula_Estudiantes = '$d[0]'
          AND p.Tipo = 'Reparacion'
          AND pde.Trayecto_Actual LIKE 't%'
          AND pde.Creado BETWEEN '01-01-1999' AND now()
          GROUP BY pde.Trayecto_Actual 
          ORDER BY pde.Trayecto_Actual ASC;";
          return  $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function eq_Historial($datos)
  { $d=$datos;
    $sql ="SELECT e.Tipo ,e.Carrera_Estas , e.Carrera_Desea,
                 p.Solisitada , p.Estado
           FROM equibalencia AS e 
           INNER JOIN peticiones AS p 
           ON p.ID_Peticiones = e.ID_Peticiones 
           WHERE p.Cedula_Estudiantes ='$d[0]'";
      return  $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function NuevoIngreso_Historial($datos)
  {$d=$datos;
    $pnf1 = new Analista();
    $res = $pnf1->PNF_Analista($d[0]); // cedula
    $pnf2 = new Cantidad();
    $cup = $pnf2->Cupos_Cantidad($d);// tipo
            $sql="SELECT pro.Procesos,  pro.Estado ,
                       per.Nombre1,  per.Cedula, per.Apellido1,
                          tel.Codigo, tel.Numero, 
                       cor.Dominio , cor.Direccion_c
                  FROM procesos_de_estudiantes AS pro
                  LEFT JOIN telefonos AS tel 
                  ON tel.Personas_Cedula = pro.Cedula_Estudiantes
                  LEFT JOIN correos AS cor
                  ON cor.Personas_Cedula = pro.Cedula_Estudiantes
                  INNER JOIN personas AS per
                  ON per.Cedula = pro.Cedula_Estudiantes 
                  LEFT JOIN recaudos AS rec
                  ON rec.Estudiantes_Cedula = per.Cedula
                  INNER JOIN procesos AS p
                  ON p.ID_Procesos = pro.ID_Procesos
                  WHERE pro.Estado= 'En Espera'
                  AND p.Tipo ='$d[1]'
                  AND pro.Espesialidad ='$res[0]'
                  GROUP BY pro.Cedula_Estudiantes 
                  ORDER BY rec.Puntos ASC 
                  LIMIT $cup";
    return  $r=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Trayecto_Historial($datos)
  {$d=$datos;
    $pnf1 = new Analista();
    $res = $pnf1->PNF_Analista($d[0]); // cedula
    $pnf2 = new Procesos();
    $pro = $pnf2->Estado_Procesos($d[2]);// tipo
            $sql="SELECT pro.Procesos,  pro.Estado ,
                       per.Nombre1,  per.Cedula, per.Apellido1,
                          tel.Codigo, tel.Numero, 
                       cor.Dominio , cor.Direccion_c
                  FROM procesos_de_estudiantes AS pro
                  LEFT JOIN telefonos AS tel 
                  ON tel.Personas_Cedula = pro.Cedula_Estudiantes
                  LEFT JOIN correos AS cor
                  ON cor.Personas_Cedula = pro.Cedula_Estudiantes
                  INNER JOIN personas AS per
                  ON per.Cedula = pro.Cedula_Estudiantes 
                  INNER JOIN procesos AS p
                  ON p.ID_Procesos = pro.ID_Procesos
                  INNER JOIN avances AS a
                  ON a.Procesos_DE = pro.Procesos
                  WHERE pro.Estado= 'En Espera'
                  AND p.Tipo ='Adelanto'
                  AND p.ID_Procesos = '$pro[0]'
                  AND pro.Espesialidad ='$res[0]'
                  AND a.TrayectoN = '$d[1]'
                  GROUP BY pro.Cedula_Estudiantes 
                  ORDER BY pro.Procesos  ASC ";
    return  $r=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Solicitudes_Historial($datos)
  { $d=$datos;
      $analista= new Analista();
      $r= $analista->PNF_Analista($d[0]); // el PNF = $es
      $pnf = $r[0];
      $sql2="SELECT per.Nacionalidad ,per.Cedula , per.Nombre1 , per.Apellido1, 
                      pet.Solisitada, pet.ID_Peticiones,
                        sol.Tipo_doc
              FROM peticiones AS pet
              INNER JOIN personas AS per
              ON per.Cedula = pet.Cedula_Estudiantes 
              INNER JOIN solicitudes AS sol
              ON sol.ID_Peticiones = pet.ID_Peticiones
              WHERE    1
              AND Tipo = '$d[2]'
              AND Carrera = '$pnf'
              AND Estado='$d[1]'";
        return  $respuesta=  $this->conectar($sql2,$opc='Realizar'); 
  }
  public function Reclamos_Historial($datos)
  { $d=$datos;
      $analista= new Analista();
      $r= $analista->PNF_Analista($d[0]); // el PNF = $es
      $pnf = $r[0];

      $sql2="SELECT per.Nacionalidad ,per.Cedula , per.Nombre1 , per.Apellido1, 
                      pet.Solisitada, pet.ID_Peticiones,
                        rec.Tipo_doc  ,
                        rec.Original  ,
                        rec.Error  
              FROM peticiones AS pet
              INNER JOIN personas AS per
              ON per.Cedula = pet.Cedula_Estudiantes 
              INNER JOIN reclamos AS rec 
              ON rec.ID_Peticiones = pet.ID_Peticiones 
              WHERE    1
              AND Tipo = 'Reclamos'
              AND Carrera = '$pnf'
              AND Estado  ='En Espera' ";
        return  $respuesta=  $this->conectar($sql2,$opc='Realizar'); 
  }
}
#-- -----------------------------------------------------#
#-- Table Comunicasion
class Comunicasion extends conexion{
  public function Telefono_Comunicasion($datos)
  { $d=$datos;
      $sql ="INSERT INTO telefonos (Codigo, Numero, Personas_Cedula) 
             VALUES ('$d[1]','$d[2]' ,'$d[0]');";
             $respuesta=  $this->conectar($sql,$opc='Guardar');
      $sql="DELETE FROM telefonos WHERE ID_Telefono = '$d[3]'";
      return $respuesta=  $this->conectar($sql,$opc='Borrar'); 
  }

  public function Correo_Comunicasion($datos)
  { $d=$datos;
      $sql ="INSERT INTO correos ( Dominio, Direccion_c, Personas_Cedula) 
             VALUES ('$d[2]','$d[1]' ,'$d[0]' );";
            $respuesta=  $this->conectar($sql,$opc='Guardar');
      $sql="DELETE FROM correos WHERE ID_Correo ='$d[3]'";
      return $respuesta=  $this->conectar($sql,$opc='Borrar'); 
  }
}
#-- Table Procesos 
class Procesos extends conexion{

  public function Abrir_Procesos($datos)
  { $d=$datos;
      $sql="INSERT INTO procesos VALUES ( null, 'En Espera', '$d[4]', now(), '$d[0]', '$d[1]', '$d[2]', '$d[3]');";
          return $res1=  $this->conectar($sql,$opc='Guardar');
          die();
  }
  public function Inscripcion_Procesos($datos)
  { $d=$datos;
    $sql1="SELECT   ID_Procesos
           FROM     procesos 
           WHERE    Tipo        = '$d[1]'
           AND      Estado      = 'En Proceso'
           GROUP BY Fecha_creada 
           ORDER BY Fecha_creada ASC
           LIMIT 1";
         
           $res1=  $this->conectar($sql1,$opc='tabla');
           $re1=   $this->conectar($sql1,$opc='validad');

           if ($re1== 1 ) 
           {
            $sql7="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                   From     procesos 
                   Where    ID_Procesos  ='$res1[0]'";
            $res6=  $this->conectar($sql7,$opc='tabla');
              if ($res6[0] <= 0) 
              {
                $sql2="SELECT DATEDIFF(procesos.fecha_culmina,now()) as diferencia
                      From     procesos 
                      Where    ID_Procesos  ='$res1[0]'";
                $res2=  $this->conectar($sql2,$opc='tabla');

                  if ($res2[0] > 0) 
                  {
                      $sql3="SELECT COUNT(*) 
                            FROM procesos_de_estudiantes AS pde
                            INNER JOIN procesos  AS p
                            ON p.ID_Procesos = pde.ID_Procesos
                            WHERE pde.Cedula_Estudiantes ='$d[0]'
                            AND p.ID_Procesos = '$res1[0]'
                            AND p.Estado ='En Proceso'";
                      $res3=  $this->conectar($sql3,$opc='tabla'); 
                            if ($res3[0]== 1 ) 
                            {
                                  $sql4="SELECT DATEDIFF(procesos.FechePARAeditar_datos ,now()) as diferencia
                                          From     procesos 
                                          Where    ID_Procesos ='$res1[0]'";
                                  $res4=  $this->conectar($sql4,$opc='tabla');
                                      if ($res4[0] >= 0) 
                                      {
                                        return '1'.$res1[0]; #si puede editar los datos
                                        die();
                                      }
                                      else 
                                      {
                                        return '3'.$res1[0]; #no puede editar los datos
                                        die();
                                      }
                            }
                            else
                            {
                              return '4'.$res1[0];# aun no realiza su proceso de inscripcion
                            }
                  }
                  else
                  {
                      if ($res2[0] <= 0) 
                      {
                            $sql6=" UPDATE procesos 
                            SET    Estado = 'Finalizado' 
                            WHERE  ID_Procesos = $res1[0];";
                            $res5=  $this->conectar($sql6,$opc='Guardar');
                            return 6; #Intente de nuevo  
                      }
                      else 
                      {
                        return 10;
                      }
                  }
              }
      
           }
           else
           {
            $sql9="SELECT  COUNT(*), fecha_inicio, ID_Procesos
                   FROM     procesos 
                   WHERE    Tipo        = '$d[1]'
                   AND      Estado      = 'En Espera'
                   GROUP BY Fecha_creada 
                   ORDER BY Fecha_creada ASC
                   LIMIT 1";
            $res7=  $this->conectar($sql9,$opc='tabla');
            $re7 =  $this->conectar($sql9,$opc='validad');
                  if ($re7==1) 
                  {
                      $sql10="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                              From     procesos 
                              Where    ID_Procesos  ='$res7[2]'";
                    $res10=  $this->conectar($sql10,$opc='tabla');
                      if ($res10[0]<=0) 
                      {
                        # es decir qu el proceso a comensado
                          $sq="UPDATE procesos 
                               SET    Estado = 'En Proceso'
                               WHERE  ID_Procesos ='$res7[2]'";
                        $rs1=  $this->conectar($sq,$opc='Guardar');
                        return '14'.$re7; #disculpa vuelba a entrar
                      }
                      else 
                      {
                        return '8'.$res7[1]; #aun no a enpesado el proceso de iscricion
                        die();
                      }
                  }
                  else 
                  {
                    return '12'.$re7; #no hay procesos de inscripcion en estos momentos 
                  }
           }     
      die();
  }
  public function Intensivo_Procesos($datos)
  { $d=$datos;
    $sql1="SELECT   ID_Procesos
           FROM     procesos 
           WHERE    Tipo        = 'Intensivo'
           AND      Estado      = 'En Proceso'
           GROUP BY Fecha_creada 
           ORDER BY Fecha_creada ASC
           LIMIT 1";

           $res1=  $this->conectar($sql1,$opc='tabla');
           $re1=   $this->conectar($sql1,$opc='validad');

           if ($re1== 1 ) 
           {
               $sql7="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                      From     procesos 
                      Where    ID_Procesos  ='$res1[0]'";
               $res6=  $this->conectar($sql7,$opc='tabla');
                if ($res6[0] <= 0) 
                {
                  $sql2="SELECT DATEDIFF(procesos.fecha_culmina,now()) as diferencia
                         From     procesos 
                         Where    ID_Procesos  ='$res1[0]'";
                  $res2=  $this->conectar($sql2,$opc='tabla');

                    if ($res2[0] > 0) 
                    {
                        $sql3="SELECT COUNT(*) 
                              FROM procesos_de_estudiantes AS pde
                              INNER JOIN procesos  AS p
                              ON p.ID_Procesos = pde.ID_Procesos
                              WHERE pde.Cedula_Estudiantes ='$d'
                              AND p.ID_Procesos = '$res1[0]'
                              AND p.Estado ='En Proceso'";
                        $res3=  $this->conectar($sql3,$opc='tabla'); 
                              if ($res3[0]== 1 ) 
                              {
                                    $sql4="SELECT DATEDIFF(procesos.FechePARAeditar_datos ,now()) as diferencia
                                            From     procesos 
                                            Where    ID_Procesos ='$res1[0]'";
                                    $res4=  $this->conectar($sql4,$opc='tabla');
                                        if ($res4[0] >= 0) 
                                        {
                                          return '1'.$res1[0]; #si puede editar los datos
                                          die();
                                        }
                                        else 
                                        {
                                          return '3'.$res1[0]; #no puede editar los datos
                                          die();
                                        }
                              }
                              else
                              {
                                return '4'.$res1[0];# aun no realiza su proceso de intensivo
                              }
                    }
                    else
                    {
                        if ($res2[0] <= 0) 
                        {
                              $sql6=" UPDATE procesos 
                              SET    Estado = 'Finalizado' 
                              WHERE  ID_Procesos = $res1[0];";
                              $res5=  $this->conectar($sql6,$opc='Guardar');
                              return 6; #Intente de nuevo  
                        }
                        else 
                        {
                          return 10;
                        }
                    }
                }
           }
           else
           {
            $sql9="SELECT  COUNT(*), fecha_inicio , ID_Procesos
                   FROM     procesos 
                   WHERE    Tipo        = 'Intensivo'
                   AND      Estado      = 'En Espera'
                   GROUP BY Fecha_creada 
                   ORDER BY Fecha_creada ASC
                   LIMIT 1";
            $res7=  $this->conectar($sql9,$opc='tabla');
            $re7 =  $this->conectar($sql9,$opc='validad');
                  if ($re7==1) 
                  {
                    $sql10="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                            From     procesos 
                            Where    ID_Procesos  ='$res7[2]'";
                    $res10=  $this->conectar($sql10,$opc='tabla');
                      if ($res10[0]<=0) 
                      {
                        # es decir qu el proceso a comensado
                          $sq="UPDATE procesos 
                               SET    Estado = 'En Proceso'
                               WHERE  ID_Procesos =' $res7[2]'";
                        $rs1=  $this->conectar($sq,$opc='Guardar');
                        return '5'.$re7; #disculpa vuelba a entrar
                      }
                      else 
                      {
                        return '8'.$res7[1]; #aun no a enpesado el proceso de iscricion
                        die();
                      }
                  }
                  else 
                  {
                    return '9'.$re7; #no hay procesos de Intensivo en estos momentos 
                  }
        
                      
           }     
      die();
  }
  public function Reparacion_Procesos($datos)
  { $d=$datos;
    $sql1="SELECT   ID_Procesos
           FROM     procesos 
           WHERE    Tipo        = 'Reparacion'
           AND      Estado      = 'En Proceso'
           GROUP BY Fecha_creada 
           ORDER BY Fecha_creada ASC
           LIMIT 1";

           $res1=  $this->conectar($sql1,$opc='tabla');
           $re1=   $this->conectar($sql1,$opc='validad');

           if ($re1== 1 ) 
           {
               $sql7="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                      From     procesos 
                      Where    ID_Procesos  ='$res1[0]'";
               $res6=  $this->conectar($sql7,$opc='tabla');
                if ($res6[0] <= 0) 
                {
                  $sql2="SELECT DATEDIFF(procesos.fecha_culmina,now()) as diferencia
                         From     procesos 
                         Where    ID_Procesos  ='$res1[0]'";
                  $res2=  $this->conectar($sql2,$opc='tabla');

                    if ($res2[0] > 0) 
                    {
                        $sql3="SELECT COUNT(*) 
                              FROM procesos_de_estudiantes AS pde
                              INNER JOIN procesos  AS p
                              ON p.ID_Procesos = pde.ID_Procesos
                              WHERE pde.Cedula_Estudiantes ='$d'
                              AND p.ID_Procesos = '$res1[0]'
                              AND p.Estado ='En Proceso'";
                        $res3=  $this->conectar($sql3,$opc='tabla'); 
                              if ($res3[0]== 1 ) 
                              {
                                    $sql4="SELECT DATEDIFF(procesos.FechePARAeditar_datos ,now()) as diferencia
                                            From     procesos 
                                            Where    ID_Procesos ='$res1[0]'";
                                    $res4=  $this->conectar($sql4,$opc='tabla');
                                        if ($res4[0] >= 0) 
                                        {
                                          return '1'.$res1[0]; #si puede editar los datos
                                          die();
                                        }
                                        else 
                                        {
                                          return '3'.$res1[0]; #no puede editar los datos
                                          die();
                                        }
                              }
                              else
                              {
                                return '4'.$res1[0];# aun no realiza su proceso de intensivo
                              }
                    }
                    else
                    {
                        if ($res2[0] <= 0) 
                        {
                              $sql6=" UPDATE procesos 
                              SET    Estado = 'Finalizado' 
                              WHERE  ID_Procesos = $res1[0];";
                              $res5=  $this->conectar($sql6,$opc='Guardar');
                              return 6; #Intente de nuevo  
                        }
                        else 
                        {
                          return 10;
                        }
                    }
                }
           }
           else
           {
            $sql9="SELECT  COUNT(*), fecha_inicio , ID_Procesos
                   FROM     procesos 
                   WHERE    Tipo        = 'Reparacion'
                   AND      Estado      = 'En Espera'
                   GROUP BY Fecha_creada 
                   ORDER BY Fecha_creada ASC
                   LIMIT 1";
            $res7=  $this->conectar($sql9,$opc='tabla');
            $re7 =  $this->conectar($sql9,$opc='validad');
                  if ($re7==1) 
                  {
                    $sql10="SELECT DATEDIFF(procesos.fecha_inicio ,now()) as diferencia
                            From     procesos 
                            Where    ID_Procesos  ='$res7[2]'";
                    $res10=  $this->conectar($sql10,$opc='tabla');
                      if ($res10[0]<=0) 
                      {
                        # es decir qu el proceso a comensado
                        $sq="UPDATE procesos 
                               SET    Estado = 'En Proceso'
                               WHERE  ID_Procesos =' $res7[2]'";
                        $rs1=  $this->conectar($sq,$opc='Guardar');
                        return '5'.$re7; #disculpa vuelba a entrar
                      }
                      else 
                      {
                        return '8'.$res7[1]; #aun no a enpesado el proceso de iscricion
                        die();
                      }
                  }
                  else 
                  {
                    return '9'.$re7; #no hay procesos de Intensivo en estos momentos 
                  }
        
                      
           }     
      die();
  }
  public function Ver_Procesos($datos)
  { $d=$datos;
      $sql="SELECT ID_Procesos , Estado,  fecha_inicio, 
                  FechePARAeditar_datos, fecha_culmina 
            FROM procesos  
            WHERE 1
            AND  Tipo = '$d[1]'";
          return $res1=  $this->conectar($sql,$opc='Realizar');
          die();
  }
  public function Estado_Procesos($datos)
  {$d=$datos;
    $sql="SELECT ID_Procesos
          FROM procesos 
          WHERE Estado ='finalizado'
          AND Tipo = '$d'
          GROUP BY Tipo
          ORDER BY ID_Procesos DESC 
          LIMIT 1";
    return $re = $this->conectar($sql,$opc='tabla');
  }
}
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table  Carreras
class Carreras extends conexion{
  public function Buscar_Carreras()
  {
      $sql="SELECT Espesialidad , Duracion 
            FROM carreras 
            WHERE 1";
     return $respuesta=  $this->conectar($sql,$opc='Tabla');
  }
  public function All_Carreras($sql='')
  {
    return $respuesta=  $this->conectar($sql,$opc='Realizar');
  }
  public function Activas_Carreras($dato)
  { $d=$dato;
      $sql="SELECT Espesialidad
            FROM carreras
            WHERE Estado = 'Activo' ";
     return $respuesta=  $this->conectar($sql,$opc='Realizar');
  }
  public function Agregar_Carreras($dato)
  { $d=$dato;
    $sql = "INSERT INTO carreras VALUES ('$d[1]', '$d[2]', now(), '$d[3]', 'Activo', '$d[0]');";         
      return $respuesta = $this->conectar($sql,$opc='Guardar');
  }
  public function Modificar_Carreras($dato)
  { $d=$dato;
     $sql = "UPDATE carreras 
             SET    Duracion     = '$d[2]', Titulo = '$d[3]',  Estado = '$d[4]' 
             WHERE  Espesialidad = '$d[1]' ";         
      return $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function Codigo_Carreras($dato)
  { $d=$dato;
    $validando= new PK(); 
    return    $inf=$validando->validar_PK($donde='Carreras',$d);
  }
}
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table  Materias
class Materias extends conexion{
  public function Analista_Materias($datos)
  { $d=$datos;

    $analista= new Analista();
    $a = $analista->PNF_Analista($d[0]);
    $sql="SELECT  Nombre, Codigo_Materias
          FROM materias
          WHERE Espesialidad = '$a[0]'
          AND  Trayecto = '$d[1]'";
     return $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Analista2_Materias($datos)
  { $d=$datos;

    $analista= new Analista();
    $a = $analista->PNF_Analista($d[0]);
        $pnf2 = new Procesos();
        $pro = $pnf2->Estado_Procesos($d[3]);// tipo
    $sql="SELECT m.Nombre AS mm, m.Codigo_Materias , COUNT(ID_Recuperaciones)AS cantiso
          FROM materias AS m
          LEFT JOIN recuperaciones  AS r
          ON r.Codigo_Materias = m.Codigo_Materias 
          LEFT JOIN procesos_de_estudiantes AS p
          ON p.Procesos = r.ID_Procesos 
          LEFT JOIN procesos AS pro
          ON pro.ID_Procesos = p.ID_Procesos
          WHERE m.Espesialidad = '$a[0]' 
          AND m.Trayecto = '$d[1]'
          AND pro.Tipo ='$d[3]' 
          AND p.Estado= '$d[4]'
          AND pro.ID_Procesos = '$pro[0]'
          AND pro.Estado = '$d[2]'";
     return $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function lista_Materias($datos)
  {$d=$datos;
     $sql="SELECT * 
           FROM materias 
           WHERE Espesialidad = '$d'";
     return $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Buscar_Materias($datos)
  {
    $d=$datos;
    $sql2="SELECT procesos.ID_Procesos 
           FROM procesos 
           WHERE procesos.Estado = 'En Proceso'
           AND procesos.Tipo ='Inscripcion'
           GROUP BY procesos.Tipo
           ORDER BY procesos.ID_Procesos DESC 
           LIMIT 1 ";
    $r=  $this->conectar($sql2,$opc='tabla'); 

        $sql="SELECT COUNT(Codigo_Materias)AS Mate, 
               carreras.Duracion, carreras.Fecha_agg, carreras.Titulo,
               inscripciones.cupo, materias.Nombre
           FROM carreras
           INNER JOIN materias
           ON materias.Espesialidad = carreras.Espesialidad
           LEFT JOIN inscripciones
           ON inscripciones.Espesialidad = carreras.Espesialidad
           WHERE carreras.Espesialidad = '$d'
           AND inscripciones.ID_Procesos ='$r[0]'
           GROUP BY carreras.Espesialidad";
   return   $respuesta=  $this->conectar($sql,$opc='tabla'); 
  }
  public function Buscar2_Materias($datos)
  {
    $d=$datos;
     $sql="SELECT  Nombre, Codigo_Materias
     FROM materias
     WHERE Espesialidad = '$d[0]'
     AND  Trayecto ='$d[1]'";
     return $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Buscar3_Materias($datos)
  {
    $d=$datos;
     $sql="SELECT  Nombre, Codigo_Materias
     FROM materias
     WHERE Espesialidad = '$d[0]'
     AND  Trayecto ='$d[1]'
     AND  Fase ='$d[2]'";
     return $respuesta=  $this->conectar($sql,$opc='Realizar'); 
  }
  public function Buscar4_Materias($datos)
  { 
    $d=$datos;
          $vista = new Vistas(); 
      $r= $vista->  Materia_Vistas($codigo=$d);
     return $r ;
  }
  public function Agregar_Materias($dato)
  { $d=$dato;
     $sql = "INSERT INTO materias VALUES ('$d[4]','$d[5]','$d[3]','$d[2]','$d[1]',now(),'Activo','$d[0]');";         
     return $respuesta = $this->conectar($sql,$opc='Guardar');
  }
  public function Modificar_Materias($dato)
  { $d=$dato;
     $sql = "UPDATE materias 
             SET    Nombre = '$d[1]', Fase = '$d[3]', Trayecto = '$d[2]', Estado = '$d[0]' 
             WHERE  Codigo_Materias = '$d[4]';  ";         
      return $respuesta = $this->conectar($sql,$opc='Actualizar');
  }
  public function Codigo_Materias($dato)
  { $d=$dato;
    $validando= new PK(); 
    return    $inf=$validando->validar_PK($donde='Materia',$d);
  }
}
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Table Mantenimiento
class Mantenimiento extends conexion{
  public function Agregar_PNF_Mantenimiento($dato)
  { $d=$dato;
        # $d[4] == el codigo de la materia
        $carrera= new Carreras();
        $respuesta=$carrera->Codigo_Carreras($d[1]);
    if ($respuesta==0) 
    {
      return $carrera->Agregar_Carreras($d);
       die();
    };
    if ($respuesta==1) 
    {
      return 3;
      die();
    };
  }
  public function Modificar_PNF_Mantenimiento($dato)
  { $d=$dato;
    $carrera= new Carreras();
    return $carrera->Modificar_Carreras($d);
  }
  public function Agregar_Materia_Mantenimiento($dato)
  { $d=$dato;
    # $d[4] == el codigo de la materia
    $materias= new Materias();
        $respuesta=$materias->Codigo_Materias($d[4]);
    if ($respuesta==0) 
    {
      return $materias->Agregar_Materias($d);
       die();
    };
    if ($respuesta==1) 
    {
      return 3;
      die();
    };
  }
  public function Modificar_Materia_Mantenimiento($dato)
  { $d=$dato;
    $materia= new Materias();
    return $materia->Modificar_Materias($d);
  }
}; 
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#
#-- Vistas y PDF
#--  select * from (select @Dint:= 25568821  i) alias , DatosPersonal_Vista;
#-- @Dvarchar , @Ddate, @Dint ;;;  int Tamaño (15)  ::: varchar Tamaño (50)
class Vistas extends conexion{ 
  public function DatosPersonal_Vistas($dato)
  {
      $sql = "SELECT * FROM (SELECT @Dint:='$dato'  i) alias , DatosPersonal_Vista;";
      return $respuesta = $this->conectar($sql,$opc='tabla');
  } 
  public function Direccion_Vistas($dato)
  {
      $sql = "SELECT * FROM (SELECT @Dint:='$dato'  i) alias , Direccion_Vista;";
      return $respuesta = $this->conectar($sql,$opc='tabla');
  } 
  public function Materia_Vistas($dato)
  {
      $sql = "SELECT * FROM (SELECT @Dvarchar:='$dato'  i) alias , Materia_Vista;";
      return $respuesta = $this->conectar($sql,$opc='tabla');
  } 
};    
#-- -----------------------------------------------------#
#-- -----------------------------------------------------#

