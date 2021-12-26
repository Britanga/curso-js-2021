<?php
    $con = NULL;
        try{

            /* Crea la conexion a la BD */
            $con = new PDO("mysql:host=localhost;port=3306;dbname=marvel", 'root', '');

            if(isset($_GET['id'])){ /* Si estamos enviando un id */
                $id = $_GET['id']; /* Declaro variable id q guarda el id q estamos enviando */
                $sql = "SELECT * FROM characters WHERE id=$id"; /* Declaro la consulta SQL */
            }else{
                $sql = "SELECT * FROM characters"; /* SIno solo declara la consulta SQL */
            }

            $stm=$con->prepare($sql); /* Prepara consulta SQL */

            $stm->execute(); /* Ejecuta consulta SQL */

            $resultSet = $stm->fetchAll(PDO::FETCH_ASSOC); /* Guardo todos los resultados en un array asociativo */

            echo json_encode($resultSet); /* Convierto array en formato json para q JS lo entienda */
            
        }catch (PDOException $e){
            echo "Error ".$e->getMessage(); /* Si hay error lo imprime en pantalla */
        }