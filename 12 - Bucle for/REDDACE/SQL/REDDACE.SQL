
-- Base de datos: Reddace
CREATE DATABASE Reddace DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
USE Reddace;
-- -----------------------------------------------------
-- Tabla Personas
-- -----------------------------------------------------
CREATE TABLE Personas (
  Cedula INT(9) NOT NULL  PRIMARY KEY,
  Nombre1 VARCHAR(45) NOT NULL,
  Nombre2 VARCHAR(45) NOT NULL,
  Apellido1 VARCHAR(45) NOT NULL,
  Apellido2 VARCHAR(45) NOT NULL,
  Edad TINYINT(3) NOT NULL,
  Genero ENUM('M','F') NOT NULL,
  Fecha_naci DATE NOT NULL,
  Nacionalidad ENUM('V','E') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Usuarios
-- -----------------------------------------------------
CREATE TABLE Usuarios (
  ID_usuario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Nombre_user CHAR(10) NOT NULL,
  Contra VARCHAR(300) NOT NULL,
  Estado_user SET('Bloquiado','Activo','Eliminado') NOT NULL,
  Tipo SET('Gerente','Analista','Supor','Estudiante') NOT NULL,
  Personas_Cedula INT(9) NULL,
  Paso SET('0', '1', '2', '3') NOT NULL DEFAULT 0,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Telefonos
-- -----------------------------------------------------
CREATE TABLE Telefonos (
  ID_Telefono INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Codigo SMALLINT(4) NOT NULL,
  Numero INT(7) NOT NULL,
  Personas_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Correos
-- -----------------------------------------------------
CREATE TABLE Correos (
  ID_Correo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Dominio SET('@gmail.com','@hotmail.com') NOT NULL,
  Direccion_c VARCHAR(45) NOT NULL,
  Personas_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Control_acceso
-- -----------------------------------------------------
CREATE TABLE Control_acceso (
  ID_Control INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Entrada DATETIME NOT NULL,
  Estado ENUM('Fracaso','Activo') NOT NULL,
  Salidad DATETIME NULL,
  ID_usuario INT NOT NULL,
    FOREIGN KEY (ID_usuario)
    REFERENCES Usuarios (ID_usuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Seguridad
-- -----------------------------------------------------
CREATE TABLE Seguridad (
  ID_Seguridad INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Pregunta1 VARCHAR(45) NOT NULL,
  Pregunta2 VARCHAR(45) NOT NULL,
  Pregunta3 VARCHAR(45) NOT NULL,
  Pregunta4 VARCHAR(45) NOT NULL,
  Respuesta1 VARCHAR(45) NOT NULL,
  Respuesta2 VARCHAR(45) NOT NULL,
  Respuesta3 VARCHAR(45) NOT NULL,
  Respuesta4 VARCHAR(45) NOT NULL,
  ID_usuario INT NOT NULL,
    FOREIGN KEY (ID_usuario)
    REFERENCES Usuarios (ID_usuario)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Gerentes
-- -----------------------------------------------------
CREATE TABLE Gerentes (
  Personas_Cedula INT(9) NOT NULL PRIMARY KEY,
  Estado SET('Activo','Retiro') NOT NULL DEFAULT 'Activo',
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Redes_sosiales
-- -----------------------------------------------------
CREATE TABLE Redes_sosiales (
  Redes_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Nombre VARCHAR(45) NOT NULL,
  URLs TEXT NOT NULL,
  Gerentes_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Carreras
-- -----------------------------------------------------
CREATE TABLE Carreras (
  Espesialidad VARCHAR(65) NOT NULL PRIMARY KEY ,
  Duracion VARCHAR(10) NOT NULL,
  Fecha_agg DATE NULL,
  Titulo set('TSU', 'ING', 'TSU e ING' ,'LIS')	NOT NULL,
  Estado ENUM('Eliminado','Activo') NOT NULL DEFAULT 'Activo',
  Gerentes_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Tabla Estudiantes
-- -----------------------------------------------------
CREATE TABLE Estudiantes (
  Personas_Cedula INT(9) NOT NULL PRIMARY KEY,
  Inscrito ENUM('Si','No') NULL DEFAULT 'No',
  Estado SET('Graduado','Retiro','Conjelado','Retiro completo','Activo') NOT NULL DEFAULT 'Activo',
  Matricula VARCHAR(45) NULL,
  PNF VARCHAR(65) NULL,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (PNF)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Trabajador
-- -----------------------------------------------------
CREATE TABLE Trabajador (
  Personas_Cedula INT(9) NOT NULL PRIMARY KEY,
  Estado SET('Activo','Retiro','Espera') NOT NULL,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Analistas
-- -----------------------------------------------------
CREATE TABLE Analistas (
  Analista_Cedula INT(9) NOT NULL PRIMARY KEY,
  Gerentes_Cedula INT(9) NOT NULL,
  Codigo_Analista VARCHAR(45) NOT NULL,
  Estado SET('Espera','Activo','Retirado') NOT NULL DEFAULT 'Espera',
  Fecha_Contratado DATE NOT NULL,
  Fecha_Salida DATE NULL,
  Area VARCHAR(50) NULL,
  Ocupacion VARCHAR(50) NULL,
  Confirmar ENUM('si','no') NOT NULL DEFAULT 'no',
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Analista_Cedula)
    REFERENCES Trabajador (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Area)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Peticiones
-- -----------------------------------------------------
CREATE TABLE Peticiones (
  ID_Peticiones INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Solisitada DATE NOT NULL,
  Tipo SET('Reclamos','Solicitudes','Conjelar','Retiro','Equivalencia') NOT NULL,
  Carrera VARCHAR(65) NOT NULL,
  Trayecto SET('ts','t1','t2','t3','t4') NOT NULL,
  Fase ENUM('f1','f2') NOT NULL,
  Seccion CHAR(2) NULL,
  Matricula VARCHAR(45) NULL,
  Respondida DATE NULL,
  Respuesta TEXT NULL,
  Estado SET('Aprobado','Rechazado','En Espera') NOT NULL DEFAULT 'En Espera',
  Cedula_Estudiantes INT(9) NOT NULL,
  Cedula_Analista INT(9) NULL,
    FOREIGN KEY (Cedula_Estudiantes)
    REFERENCES Estudiantes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Cedula_Analista)
    REFERENCES Analistas (Analista_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Solicitudes
-- -----------------------------------------------------
CREATE TABLE Solicitudes (
  ID_Solicitudes INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Tipo_doc VARCHAR(45) NOT NULL,
  ID_Peticiones INT NOT NULL,
    FOREIGN KEY (ID_Peticiones)
    REFERENCES Peticiones (ID_Peticiones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Reclamos
-- -----------------------------------------------------
CREATE TABLE Reclamos (
  ID_Reclamos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID_Peticiones INT NOT NULL,
  Tipo_doc SET('nombre','cedula','nota','otro') NOT NULL,
  Original VARCHAR(45) NOT NULL,
  Error VARCHAR(45) NOT NULL,
    FOREIGN KEY (ID_Peticiones)
    REFERENCES Peticiones (ID_Peticiones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Recaudos
-- -----------------------------------------------------
CREATE TABLE Recaudos (
  Estudiantes_Cedula INT(9) NOT NULL PRIMARY KEY,
  Estado ENUM('Completo','Faltan') NULL,
  Cedula SET('NO','SI') NULL,
  Foto SET('NO','SI') NULL,
  Titulo SET('NO','SI') NULL,
  Carta_culminacion SET('NO','SI') NULL,
  Salud ENUM('NO', 'SI') NULL,
  Puntos TINYINT(2) NULL DEFAULT 0,
    FOREIGN KEY (Estudiantes_Cedula)
    REFERENCES Estudiantes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Horarios
-- -----------------------------------------------------
CREATE TABLE Horarios (
  ID_Horarios INT NOT NULL PRIMARY KEY ,
  Fecha_ini DATE NULL,
  Fecha_cul DATE NULL,
  Turno ENUM('Mañana','Tarde')NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Tabla Planificaciones
-- -----------------------------------------------------
CREATE TABLE Planificaciones (
  ID_Planificaciones INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Codigo VARCHAR(45) NOT NULL,
  Aprobado SET('NO','SI','Sin Respuesta') NOT NULL DEFAULT 'Sin Respuesta',
  Tipo SET('Recuperacion','Intensivos','Inscripcion') NOT NULL,
  Cantidad_E TINYINT(2) NOT NULL,
  Cantidad_M TINYINT(2) NOT NULL,
  Fecha DATE NOT NULL,
  Matricula VARCHAR(45) NULL,
  Espesialidad VARCHAR(65) NOT NULL,
  Trayecto SET('ts','t1','t2','t3','t4','t5') NOT NULL,
  Fase ENUM('f1','f2') NOT NULL DEFAULT 'f1',
  Seccion CHAR(2) NOT NULL,
  Horarios_ID INT NULL,
  Analistas_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Horarios_ID)
    REFERENCES Horarios (ID_Horarios)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Analistas_Cedula)
    REFERENCES Analistas (Analista_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Espesialidad)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Materias
-- -----------------------------------------------------
CREATE TABLE Materias (
  Codigo_Materias VARCHAR(45) NOT NULL PRIMARY KEY,
  Nombre VARCHAR(45) NULL,
  Fase SET('f1','f2','fc') NOT NULL DEFAULT 'f1',
  Trayecto SET('ts', 't1', 't2', 't3', 't4')NOT NULL ,
  Espesialidad VARCHAR(65) NOT NULL,
  Fecha_agg DATE NULL,
  Estado ENUM('Activo','Eliminado') NULL DEFAULT 'Activo',
  Gerentes_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Espesialidad)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Estados
-- -----------------------------------------------------
CREATE TABLE Estados (
  C_P_E INT NOT NULL PRIMARY KEY,
  Estado VARCHAR(45) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Municipios
-- -----------------------------------------------------
CREATE TABLE Municipios (
  C_P_M INT NOT NULL PRIMARY KEY,
  Municipio VARCHAR(45) NULL,
  C_P_E INT NOT NULL,
    FOREIGN KEY (C_P_E)
    REFERENCES Estados (C_P_E)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Parroquias
-- -----------------------------------------------------
CREATE TABLE Parroquias (
  IDP INT NOT NULL PRIMARY KEY,
  Parroquia VARCHAR(45) NULL,
  C_P_M INT NOT NULL,
    FOREIGN KEY (C_P_M)
    REFERENCES Municipios (C_P_M)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Direcciones
-- -----------------------------------------------------
CREATE TABLE Direcciones (
  ID_Direcciones INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Sector VARCHAR(45) NULL,
  Calle VARCHAR(45) NULL,
  Carrera VARCHAR(45) NULL,
  N_casa VARCHAR(45) NULL,
  Pnt_referen TEXT NULL,
  C_P_E INT NOT NULL,
  C_P_M INT NOT NULL,
  IDP INT NOT NULL,
  Personas_Cedula INT(9) NOT NULL,
    FOREIGN KEY (C_P_E)
    REFERENCES Estados (C_P_E)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (C_P_M)
    REFERENCES Municipios (C_P_M)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (IDP)
    REFERENCES Parroquias (IDP)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Personas_Cedula)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Procesos
-- -----------------------------------------------------
CREATE TABLE Procesos (
  ID_Procesos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Estado SET('En Espera','Finalizado','En Proceso','Cerada') NOT NULL DEFAULT 'En Espera',
  Tipo SET('Inscripcion','Reparacion','Intensivo','Adelanto') NOT NULL,
  Fecha_creada DATE NOT NULL,
  fecha_inicio DATE NOT NULL,
  FechePARAeditar_datos DATE NOT NULL,
  fecha_culmina DATE NOT NULL,
  Gerentes_Cedula INT(9) NOT NULL,
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Procesos_de_Estudiantes
-- -----------------------------------------------------
CREATE TABLE Procesos_de_Estudiantes (
  Procesos INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID_Procesos INT NOT NULL,
  Estado SET('Aprobado','Rechazado','En Espera') NOT NULL DEFAULT 'En Espera',
  Creado DATE NOT NULL,
  Espesialidad VARCHAR(65) NOT NULL,
  Trayecto_Actual SET('ts','t1','t2','t3','t4') NOT NULL,
  Fase_Actual ENUM('f1','f2') NOT NULL,
  Cedula_Estudiantes INT(9) NOT NULL,
  Cedula_Analista INT(9) NULL,
  Respuesta TEXT NULL,
  Matricula VARCHAR(45) NULL,
  Codigo_Planificaciones INT NULL,
    FOREIGN KEY (ID_Procesos)
    REFERENCES Procesos (ID_Procesos)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Cedula_Estudiantes)
    REFERENCES Estudiantes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Cedula_Analista)
    REFERENCES Analistas (Analista_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Codigo_Planificaciones)
    REFERENCES Planificaciones (ID_Planificaciones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Espesialidad)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Recuperaciones
-- -----------------------------------------------------
CREATE TABLE Recuperaciones (
  ID_Recuperaciones INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID_Procesos INT(11) NOT NULL,
  Tipo ENUM('Reparacion','Intensivo') NOT NULL DEFAULT 'Intensivo',
  Trayecto SET('ts','t1','t2','t3','t4') NOT NULL DEFAULT 'ts',
  Fase ENUM('f1','f2') NOT NULL DEFAULT 'f1',
  Codigo_Materias VARCHAR(45) NOT NULL,
  Espesialidad VARCHAR(65) NOT NULL,
  Periodo VARCHAR(4) NULL,
  Aprovar_materia SET('Aprobado','Rechazado','En Espera') NULL DEFAULT 'En Espera' ,
    FOREIGN KEY (ID_Procesos)
    REFERENCES Procesos_de_Estudiantes (Procesos)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Codigo_Materias)
    REFERENCES Materias (Codigo_Materias)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Espesialidad)
    REFERENCES Materias (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Avances
-- -----------------------------------------------------
CREATE TABLE Avances (
  ID_Avances INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  TrayectoN SET('t1','t2','t3','t4') NOT NULL DEFAULT 't1',
  FaseN ENUM('f1','f2') NOT NULL DEFAULT 'f1',
  Perriodo VARCHAR(4) NOT NULL,
  Estado_Aprobado SET('si','no','ns') NULL DEFAULT 'ns',
  Procesos_DE INT(11) NOT NULL,
    FOREIGN KEY (Procesos_DE)
    REFERENCES Procesos_de_Estudiantes (Procesos)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Inf_Equivalencia
-- -----------------------------------------------------
CREATE TABLE Inf_Equivalencia (
  Gerentes_Cedula INT(9) NOT NULL PRIMARY KEY,
  inf_Fuera TEXT NOT NULL,
  Inf_Dentro TEXT NOT NULL,
  Fecha_Creada DATE NOT NULL,
    FOREIGN KEY (Gerentes_Cedula)
    REFERENCES Gerentes (Personas_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Equibalencia
-- -----------------------------------------------------
CREATE TABLE Equibalencia (
  ID_Equibalencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Tipo ENUM('Dentro','Fuera') NOT NULL DEFAULT 'Dentro',
  Requisitos ENUM('Si','No') NOT NULL DEFAULT 'Si',
  Carrera_Estas VARCHAR(45) NOT NULL,
  Trayecto_Actual SET('ts','t1','t2','t3','t4') NOT NULL,
  Fase_Actual SET('f1','f2') NOT NULL,
  Matricula VARCHAR(55) NOT NULL,
  Carrera_Desea VARCHAR(45) NOT NULL,
  ID_Peticiones INT NOT NULL,
    FOREIGN KEY (ID_Peticiones)
    REFERENCES Peticiones (ID_Peticiones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Planificacion_de_Materias
-- -----------------------------------------------------
CREATE TABLE Planificacion_de_Materias (
  Planificacion_de_Materias INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Planificacione INT NOT NULL,
  Materia VARCHAR(45) NOT NULL,
    FOREIGN KEY (Planificacione)
    REFERENCES Planificaciones (ID_Planificaciones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Materia)
    REFERENCES Materias (Codigo_Materias)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Retiro
-- -----------------------------------------------------
CREATE TABLE Retiro (
  ID_Retiro INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Tipo ENUM('Temporal','Completo') NULL,
  Motivo VARCHAR(45) NULL,
  ID_Peticiones INT NOT NULL,
    FOREIGN KEY (ID_Peticiones)
    REFERENCES Peticiones (ID_Peticiones)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Inscripciones
-- -----------------------------------------------------
CREATE TABLE Inscripciones (
  id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID_Procesos INT NOT NULL,
  cupo SMALLINT(4) NOT NULL,
  Matricula VARCHAR(45) NULL,
  Espesialidad VARCHAR(65) NOT NULL,
    FOREIGN KEY (ID_Procesos)
    REFERENCES Procesos (ID_Procesos)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Espesialidad)
    REFERENCES Carreras (Espesialidad)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Planillas
-- -----------------------------------------------------
CREATE TABLE Planillas (
  ID_Planillas INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ID_Retiro INT NULL,
  ID_Equibalencia INT NULL,
  Cedula_Analista INT(9) NULL,
  Aprobado ENUM('No','Si') NULL DEFAULT 'No',
    FOREIGN KEY (ID_Retiro)
    REFERENCES Retiro (ID_Retiro)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (ID_Equibalencia)
    REFERENCES Equibalencia (ID_Equibalencia)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Cedula_Analista)
    REFERENCES Analistas (Analista_Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Archivos
-- -----------------------------------------------------
CREATE TABLE Archivos (
  ID_Archivos INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Creado INT(9) NOT NULL,
  Tipo SET('Nota','Recok','Historial','Otro') NOT NULL DEFAULT 'Otro',
  Arc_PDF LONGBLOB NOT NULL,
  Tipo_Envio SET('Ambos','Telefono','Correo') NOT NULL DEFAULT 'Correo',
  Mensaje TEXT NOT NULL,
  Para INT(9) NOT NULL,
    FOREIGN KEY (Creado)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
    FOREIGN KEY (Para)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
-- -----------------------------------------------------
-- Tabla Mensaje
-- -----------------------------------------------------
CREATE TABLE Mensaje (
  ID_Mensaje INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  Enviado INT(9) NOT NULL,
  Resivido VARCHAR(45) NULL,
  Mensaje VARCHAR(45) NULL,
  Fecha_Enviado DATE NULL,
  Fecha_Visto DATE NULL,
  Visto ENUM('Si','No') NULL DEFAULT 'No',
    FOREIGN KEY (Enviado)
    REFERENCES Personas (Cedula)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- -----------------------------------------------------
-- Funciones
-- -----------------------------------------------------
DELIMITER //
  CREATE FUNCTION Dint() RETURNS int(15)
      NO SQL
      DETERMINISTIC
  RETURN @Dint//
  DELIMITER ;

  DELIMITER //
  CREATE FUNCTION Ddate() RETURNS date
      NO SQL
      DETERMINISTIC
  RETURN @Ddate//
  DELIMITER ;

  DELIMITER //
  CREATE FUNCTION Dvarchar() RETURNS varchar(50)
      NO SQL
      DETERMINISTIC
  RETURN @Dvarchar
// DELIMITER ;
-- FIN Funciones
-- -----------------------------------------------------
-- procedure Editar_DatosBasico
-- -----------------------------------------------------
DELIMITER //
  CREATE PROCEDURE Editar_DatosBasico (CedulaE int(11), nom1 varchar(45),nom2 varchar(45),
  ape1 varchar(45), ape2 varchar(45))
  BEGIN 
    UPDATE personas set nombre1 = nom1,  nombre2 = nom2,  apellido1 = ape1 , apellido2 = ape2 
    WHERE Cedula = CedulaE ;
  END;
// DELIMITER ;
-- -----------------------------------------------------
-- procedure Direccion
-- -----------------------------------------------------
DELIMITER //
 CREATE PROCEDURE Direccion(Cedula varchar(15), sector varchar(50), calle varchar(50), carrera varchar(50), 
 numero_de_casa varchar(50), punto_referencia varchar(50), Estado int, Municipio int, parroquia int)
   BEGIN 
      INSERT INTO direcciones (ID_Direcciones, Personas_Cedula, Sector, Calle, Carrera, N_casa, Pnt_referen, C_P_E, C_P_M, IDP)
      VALUES                   (NULL,Cedula,  sector, calle, carrera, numero_de_casa,  punto_referencia, Estado, Municipio, parroquia);
  END;
// DELIMITER ;
-- -----------------------------------------------------
-- procedure Combo_box_direccion
-- -----------------------------------------------------
DELIMITER //
  CREATE PROCEDURE Combo_box_direccion(tipo enum('E','M','P'), codigo int)
    BEGIN 
      IF (tipo = 'E') THEN
        SELECT * FROM estados;
      END IF;
          IF (tipo = 'M') THEN  
          SELECT * FROM municipios WHERE  C_P_E = codigo;
      END IF;
          IF (tipo = 'P') THEN 
          SELECT * FROM parroquias WHERE C_P_M = codigo;
      END IF;
    END;
// DELIMITER ;
-- -----------------------------------------------------
-- procedure Contro_D_Seguridad
-- -----------------------------------------------------
DELIMITER // 
    CREATE PROCEDURE Contro_D_Seguridad (IN id_user int, IN estado1 enum('Activo','Fracaso'), IN fechaNueva DATETIME)
    begin

    IF(estado1 = 'Activo' ) THEN

      INSERT INTO control_acceso (
            control_acceso.estado, control_acceso.Entrada, control_acceso.ID_usuario)
      VALUE ( estado1, now(), id_user);
                                    
    ELSEIF (estado1 = 'Fracaso') THEN
    SET @numero=0; 
      SELECT @numero:=@numero+1 AS posicion, Entrada, now(), SEC_TO_TIME(TIMESTAMPDIFF(SECOND, Entrada , now())) HORAS  
        FROM control_acceso
        WHERE
            control_acceso.ID_usuario = id_user
            AND estado = 'Fracaso' 
            AND Entrada BETWEEN fechaNueva and now();
            
        IF (@numero <= 3 ) then
            INSERT INTO control_acceso (estado, Entrada, ID_usuario) 
          VALUES ('Fracaso', now(), id_user);
      END IF;
            
      IF (@numero >= 4 ) then
            INSERT INTO control_acceso (estado, Entrada, ID_usuario) 
            VALUES ('Bloquiado', now(), id_user);
      END IF;
    END IF;
    END
// DELIMITER ;
-- -----------------------------------------------------
-- View Direccion_Vista
-- -----------------------------------------------------
DELIMITER //
    CREATE VIEW Direccion_Vista AS
    SELECT d.Sector, d.Calle, d.Carrera, d.N_casa, d.Pnt_referen, d.Personas_Cedula,
                e.Estado , m.Municipio , p.Parroquia
    FROM Direcciones AS d
    INNER JOIN estados AS E 
    ON E.C_P_E = d.C_P_E
    INNER JOIN municipios AS m 
    ON m.C_P_M = d.C_P_M 
    INNER JOIN parroquias AS p
    ON p.IDP = d.IDP
    WHERE d.Personas_Cedula = Dint();
// DELIMITER ;
-- -----------------------------------------------------
-- View DatosPersonal_Vista
-- -----------------------------------------------------
DELIMITER //
  --  select * from (select @Dint:= 25568821  i) alias , DatosPersonal_Vista;
  CREATE VIEW DatosPersonal_Vista AS
  SELECT p.* , u.Contra ,
	   C.Direccion_c ,c.Dominio , 
        t.Codigo ,
        t.Numero ,
            t.ID_Telefono,
            c.ID_Correo
  FROM personas AS p
  INNER JOIN usuarios AS u
  ON u.Personas_Cedula = p.Cedula
  LEFT JOIN correos AS c
  ON c.Personas_Cedula = p.Cedula
  LEFT JOIN telefonos AS t
  ON t.Personas_Cedula = p.Cedula
  WHERE p.Cedula =  Dint();
// DELIMITER ;
-- -----------------------------------------------------
-- View Materia_Vista
-- -----------------------------------------------------
DELIMITER //
  CREATE VIEW Materia_Vista AS
  SELECT  m.* 
     FROM materias AS m
     WHERE m.Codigo_Materias = Dvarchar()
// DELIMITER ;
-- -----------------------------------------------------
-- Disparadores
-- -----------------------------------------------------
DELIMITER //
      CREATE TRIGGER usuario_bloquiado BEFORE INSERT ON control_acceso FOR EACH ROW BEGIN  
        if(new.estado = 'Bloquiado') then
          UPDATE usuarios SET estado = 'Bloquiado' WHERE usuarios.ID_usuario = new.ID_usuario;
        end if;
      END 
// DELIMITER ;

DELIMITER $$
  CREATE TRIGGER Borrar_Seguridad BEFORE DELETE ON usuarios FOR EACH ROW BEGIN
    DELETE FROM seguridad         WHERE seguridad.ID_usuario        =old.ID_usuario ;
    DELETE FROM control_acceso    WHERE control_acceso.ID_usuario   =old.ID_usuario ;
   END$$
DELIMITER ;

DELIMITER $$
  CREATE TRIGGER Borrar_Recuperacion BEFORE DELETE ON procesos_de_estudiantes FOR EACH ROW BEGIN
    DELETE FROM recuperaciones       WHERE recuperaciones.ID_Procesos        =old.Procesos ;
    DELETE FROM avances              WHERE avances.ID_Avances                =old.Procesos ;
   END$$
DELIMITER ;
DELIMITER $$
  CREATE TRIGGER Borrar_Peticion     BEFORE DELETE ON peticiones FOR EACH ROW BEGIN
    DELETE FROM solicitudes          WHERE solicitudes.ID_Peticiones        =old.ID_Peticiones ;
    DELETE FROM reclamos             WHERE reclamos.ID_Peticiones           =old.ID_Peticiones ;
   END$$
DELIMITER ;
