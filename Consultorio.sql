-- MySQL Workbench Synchronization
-- Generated: 2019-04-12 15:21
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: almej

-- BASE DE DATOS CONSULTORIO

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `consultorio`.`Paciente` 
CHARACTER SET = utf8 , COLLATE = utf8_general_ci ,
DROP COLUMN `idPac`,
CHANGE COLUMN `Nombre` `Nombre` VARCHAR(50) NULL DEFAULT NULL ,
CHANGE COLUMN `Apellidos` `Apellidos` VARCHAR(100) NULL DEFAULT NULL ,
CHANGE COLUMN `Enfermedad` `Enfermedad` VARCHAR(50) NULL DEFAULT NULL ,
CHANGE COLUMN `Urgencia` `Urgencia` VARCHAR(50) NULL DEFAULT NULL ,
CHANGE COLUMN `Alergias` `Alergias` VARCHAR(200) NULL DEFAULT NULL ,
CHANGE COLUMN `Comentario` `Comentario` VARCHAR(45) NULL DEFAULT NULL ,
CHANGE COLUMN `Presion` `Presion` VARCHAR(5) NULL DEFAULT NULL ,
CHANGE COLUMN `Telefono` `Telefono` INT(11) NULL DEFAULT NULL ,
ADD COLUMN `idPaciente` INT(11) NOT NULL FIRST,
ADD COLUMN `Orden_idOrden` INT(11) NOT NULL AFTER `Telefono`,
ADD COLUMN `Cita_idCita` INT(11) NOT NULL AFTER `Orden_idOrden`,
DROP PRIMARY KEY,
ADD PRIMARY KEY (`idPaciente`, `Orden_idOrden`, `Cita_idCita`),
ADD INDEX `fk_Paciente_Orden_idx` (`Orden_idOrden` ASC),
ADD INDEX `fk_Paciente_Cita1_idx` (`Cita_idCita` ASC);
;

CREATE TABLE IF NOT EXISTS `consultorio`.`Cita` (
  `idCita` INT(11) NOT NULL,
  `fecha` DATE NOT NULL,
  `hora` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idCita`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `consultorio`.`Usuario` (
  `idUsuario` INT(11) NOT NULL,
  `Nombre` VARCHAR(50) NULL DEFAULT NULL,
  `Contrasena` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `consultorio`.`Orden` (
  `idOrden` INT(11) NOT NULL,
  `fechaR` VARCHAR(45) NULL DEFAULT NULL,
  `fechaE` VARCHAR(45) NULL DEFAULT NULL,
  `Especificacion` VARCHAR(45) NULL DEFAULT NULL,
  `Colores_idColores` INT(11) NOT NULL,
  `Doctor_idDoctor` INT(11) NOT NULL,
  `Tipo_Pro_idTipo_Pro` INT(11) NOT NULL,
  PRIMARY KEY (`idOrden`, `Colores_idColores`, `Doctor_idDoctor`, `Tipo_Pro_idTipo_Pro`),
  INDEX `fk_Orden_Colores1_idx` (`Colores_idColores` ASC),
  INDEX `fk_Orden_Doctor1_idx` (`Doctor_idDoctor` ASC),
  INDEX `fk_Orden_Tipo_Pro1_idx` (`Tipo_Pro_idTipo_Pro` ASC),
  CONSTRAINT `fk_Orden_Colores1`
    FOREIGN KEY (`Colores_idColores`)
    REFERENCES `consultorio`.`Colores` (`idColores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orden_Doctor1`
    FOREIGN KEY (`Doctor_idDoctor`)
    REFERENCES `consultorio`.`Doctor` (`idDoctor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Orden_Tipo_Pro1`
    FOREIGN KEY (`Tipo_Pro_idTipo_Pro`)
    REFERENCES `consultorio`.`Tipo_Pro` (`idTipo_Pro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `consultorio`.`Doctor` (
  `idDoctor` INT(11) NOT NULL,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
  `Apellidos` VARCHAR(45) NULL DEFAULT NULL,
  `Cedula` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idDoctor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `consultorio`.`Colores` (
  `idColores` INT(11) NOT NULL,
  `Color` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idColores`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE TABLE IF NOT EXISTS `consultorio`.`Tipo_Pro` (
  `idTipo_Pro` INT(11) NOT NULL,
  `Tipo` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipo_Pro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE `consultorio`.`Paciente` 
ADD CONSTRAINT `fk_Paciente_Orden`
  FOREIGN KEY (`Orden_idOrden`)
  REFERENCES `consultorio`.`Orden` (`idOrden`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_Paciente_Cita1`
  FOREIGN KEY (`Cita_idCita`)
  REFERENCES `consultorio`.`Cita` (`idCita`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
