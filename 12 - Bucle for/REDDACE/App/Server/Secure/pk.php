<?php
error_reporting(0);
class PK extends conexion
{
        public function validar_PK($don,$dat)
        {
           $donde = $don;
      switch ($donde)  
        {                  
          case 'Usuario':
                          $sql ="SELECT Nombre_user 
                                 FROM   usuarios 
                                 WHERE  Nombre_user = '$dat';";
                        $respuesta=$this->conectar($sql,$opc='validad');
                          //   # 0 sin usuario 
                          //   # 1 con usuario 
                          return $respuesta;
                          die(); 
          break;
          case 'Login':
                      /*  $dat[0] = usuarioE , $dat[1] = ssap */
                         $sql ="SELECT  *
                                FROM   usuarios 
                                WHERE  Nombre_user = '$dat[0]'";
                         $respuesta=$this->conectar($sql,$opc='tabla');
                               //  los datos optenidos
                            $id          = $respuesta[0];
                            $Nombre_user = $respuesta[1];
                            $Contra      = $respuesta[2];
                            $estado      = $respuesta[3]; 
                            $tipo        = $respuesta[4];
                            $Cedula      = $respuesta[5];
                            $paso        = $respuesta[6];
                            $inscrito    = '';
                          /*******************************/
                          if ($tipo == 'Estudiante') {
                                $sql ="SELECT Inscrito  
                                       FROM estudiantes 
                                       WHERE Personas_Cedula = '$Cedula'";
                                    $osfal=$this->conectar($sql,$opc='tabla');
                                   $inscrito = $osfal[0];
                          }
                          /*******************************/

                         if ($Nombre_user == $dat[0]) 
                         {
                                if ($estado == 'Activo') 
                                {
                                      include("desenciptar.php");  
                                          $compararPASS = new desencriptarPHP;
                                          $listoPASS=(int) $compararPASS ->comenzar($dat[1],$Contra);
                                          
                                              if ($listoPASS == 1) 
                                              {
                                                $entrada='normal';
                                                  echo "<script>location.href='../Server/Secure/seccion.php?tipo=$tipo&usuario=$Nombre_user&id=$id&Cedula=$Cedula&paso=$paso&entrada=$entrada&inscrito=$inscrito';</script>";                            
                                                  die();
                                              }
                                              else 
                                              {
                                                $entrada='error';
                                                 echo "<script>location.href='../Server/Secure/seccion.php?tipo=$tipo&usuario=$Nombre_user&id=$id&entrada=$entrada';</script>";                            
                                                die();
                                              }
                                }
                                else
                                {
                                  // usuario bloquiado
                                  echo'<script> swal ( "ERROR" ,  "Usuario Bloqueado" ,  "info" ) </script>';                        
                                  die();
                                }
                                die();
                         }
                         else
                         {
                          echo'<script> swal ( "Disculpe" ,  "Usuario No Existe" ,  "warning" ) </script>';
                               die();
                         }
          break;
          case 'Seguridad':
              $sql ="SELECT usuarios.Nombre_user , usuarios.Personas_Cedula,
                            seguridad.Pregunta1  , seguridad.Pregunta2,
                            seguridad.Pregunta3  , seguridad.Pregunta4,
                            usuarios.ID_usuario
                    FROM usuarios
                    INNER JOIN seguridad 
                    ON seguridad.ID_usuario = usuarios.ID_usuario
                    WHERE usuarios.Nombre_user ='$dat[0]';";
                    $respuesta1=$this->conectar($sql,$opc='tabla'); 
                        if ($respuesta1 != false ) 
                        {   // el usuario existe
                            if ($respuesta1[1] == $dat[1]) 
                            { // datos buenos
                                    $html[0]=$respuesta1[2];
                                    $html[1]=$respuesta1[3];
                                    $html[2]=$respuesta1[4];
                                    $html[3]=$respuesta1[0];
                                    $arr    = array("resul1"=>$html[0], "resul2"=>$html[1], "resul3"=>$html[2], "resul4"=>$html[3]);
                                    if ($dat[2] == 'editarcontra') {
                                      return $respuesta1 ;
                                    }else{
                                       echo json_encode($arr); 
                                    }
                             die();
                            }else { 
                                    $arr    = array("resul1"=>2, "resul2"=>2);
                                    echo json_encode($arr);
                             // datos malos
                              die();
                            }
                        }
                        else 
                        {
                          $arr    = array("resul1"=>3, "resul2"=>3);
                                    echo json_encode($arr);
                          // el usuario no existe
                          die();
                        }
          break;
          case 'Seguridad2':
                $sql ="SELECT usuarios.Nombre_user , seguridad.Respuesta1 , 
                        seguridad.Respuesta2 , seguridad.Respuesta3  
                FROM usuarios
                INNER JOIN seguridad 
                ON seguridad.ID_usuario = usuarios.ID_usuario
                WHERE usuarios.Nombre_user ='$dat[0]';";
                $respuesta1=$this->conectar($sql,$opc='tabla'); 
                        //            // datos buenos
                        if ($respuesta1[1] == $dat[2] &&
                            $respuesta1[2] == $dat[3] &&
                            $respuesta1[3] == $dat[4] ) 
                        { 
                          if ($dat[1]=='Verificar' ) 
                          {
                            return 1; 
                            die();
                          }
                          else
                          {
                                $sql = "UPDATE usuarios SET Contra = '$dat[1]' WHERE Nombre_user ='$dat[0]';";
                                $respuesta = $this->conectar($sql,$opc='Actualizar');
                                return 1;
                                die(); 
                          }
                        }
                        else  // datos malos
                        { 
                          return 0; 
                          die();
                        }
          break;
          case 'Pass':
                $sql ="SELECT usuarios.Contra , 
                        seguridad.Respuesta1 , 
                        seguridad.Respuesta2 
                 FROM usuarios
                 INNER JOIN seguridad  
                 ON seguridad.ID_usuario = usuarios.ID_usuario
                 WHERE usuarios.Nombre_user ='$dat[4]';";
                   $r =$this->conectar($sql,$opc='tabla');
                    include("desenciptar.php");  
                    $pass = new desencriptarPHP;
                    $listopass=(int) $pass ->comenzar($dat[0],$r[0]); 
                          if ($listopass == 1) 
                          {
                            if ($r[1] == $dat[2] && $r[2] == $dat[3] ) 
                            { 
                                $sql = "UPDATE usuarios SET Contra = '$dat[1]' WHERE Nombre_user ='$dat[4]';";
                                $respuesta = $this->conectar($sql,$opc='Actualizar');
                                return 1;
                                die(); 
                            }
                            else 
                            { 
                              return 0; 
                              die();
                            }
                          }
                          else 
                          {
                            return 0;
                            die();
                          }
             die(); 
          break;
          case 'Materia':
              $sql ="SELECT COUNT(Codigo_Materias) AS codigo
                     FROM materias 
                     WHERE Codigo_Materias ='$dat';";
                $respuesta=$this->conectar($sql,$opc='tabla'); 
                  return $respuesta[0];
                  die(); 
          break;
          case 'Carreras':
            $sql ="SELECT COUNT(Espesialidad ) AS Espesialidad 
                   FROM carreras 
                   WHERE Espesialidad  ='$dat';";
              $respuesta=$this->conectar($sql,$opc='tabla'); 
                return $respuesta[0];
                die(); 
          break;
          case 'Analista':
           $entrada='Forzar';
            $sql ="SELECT Codigo_Analista 
                   FROM  analistas
                   WHERE Analista_Cedula = '$dat[0]';";
              $respuesta=$this->conectar($sql,$opc='tabla'); 

              if ($respuesta[0] == $dat[1]) 
              {
                $sql ="UPDATE analistas SET Confirmar = 'si' , Estado = 'Activo' WHERE Analista_Cedula ='$dat[0]';";
                $respuesta=$this->conectar($sql,$opc='tabla');
                        $sql1="SELECT U.ID_usuario , U.Tipo , U.Nombre_user
                        FROM personas AS P
                        INNER JOIN usuarios  AS U
                        ON P.Cedula = U.Personas_Cedula 
                        WHERE P.Cedula  = '$dat[0]';";
                        $r=$this->conectar($sql1,$opc='tabla');
                echo $url="'../../../../Server/Secure/seccion.php?tipo=$r[1]&usuario=$r[2]&id=$r[0]&Cedula=$dat[0]&paso=3&entrada=$entrada";
                die(); 
              }
              if ($respuesta[0] != $dat[1] ) 
              {
                echo 2;
                die(); 
              }
          break;
          default:
            echo  $don;
          break;
        }
            die();
          }
};

?>
