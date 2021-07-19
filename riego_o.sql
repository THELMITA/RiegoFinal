-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema riego
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema riego
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `riego` DEFAULT CHARACTER SET utf8 ;
USE `riego` ;

-- -----------------------------------------------------
-- Table `riego`.`actuador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`actuador` (
  `idactuador` INT NOT NULL,
  `estado` TINYINT NOT NULL,
  PRIMARY KEY (`idactuador`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `riego`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`usuario` (
  `idusuario` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(15) NOT NULL COMMENT 'Ejemplo\\nAdministrador (Asigna usuarios gestiona cuentas)\\nUsuario (Agendar riegos, crear cultivos y nonitorizar sus cultivos y riegos)\\n',
  `nombres` VARCHAR(15) NOT NULL,
  `apellidoPaterno` VARCHAR(15) NOT NULL,
  `apellidoMaterno` VARCHAR(15) NOT NULL,
  `nombreUsuario` VARCHAR(15) NOT NULL,
  `contrasenia` VARCHAR(32) NOT NULL,
  `ci` VARCHAR(15) NOT NULL,
  `genero` VARCHAR(1) NOT NULL COMMENT 'M=masculino\\nF=femenino',
  `telefonoCelular` VARCHAR(10) NOT NULL,
  `estado` TINYINT NOT NULL DEFAULT '1',
  `fechaRegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaActualizacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `riego`.`terreno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`terreno` (
  `idTerreno` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `cultivo` VARCHAR(45) NOT NULL COMMENT 'nombre representativo para diferenciar los cultivos de un usuario',
  `latitud` DOUBLE NOT NULL,
  `longitud` DOUBLE NOT NULL,
  `tamanio` MEDIUMINT NOT NULL COMMENT 'espacio fisicio del terreno en m2',
  `usuario_idUsuario` MEDIUMINT NOT NULL,
  PRIMARY KEY (`idTerreno`, `usuario_idUsuario`),
  INDEX `fk_terreno_usuario1_idx` (`usuario_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_terreno_usuario1`
    FOREIGN KEY (`usuario_idUsuario`)
    REFERENCES `riego`.`usuario` (`idusuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `riego`.`agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`agenda` (
  `idAgenda` INT NOT NULL AUTO_INCREMENT,
  `usuario_idUsuario` MEDIUMINT NOT NULL,
  `terreno_idTerreno` MEDIUMINT NOT NULL,
  `terreno_usuario_idUsuario` MEDIUMINT NOT NULL,
  `dia` DATETIME NOT NULL COMMENT 'dia de riego',
  `recordatorio` VARCHAR(60) NOT NULL,
  `tipo` TINYINT NOT NULL DEFAULT '0' COMMENT '0 Fecha de riego\\n1 fecha de cosecha',
  `estado` TINYINT NOT NULL DEFAULT '1',
  `fechaRegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaActualizacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAgenda`, `usuario_idUsuario`, `terreno_idTerreno`, `terreno_usuario_idUsuario`),
  INDEX `fk_agenda_terreno1_idx` (`terreno_idTerreno` ASC, `terreno_usuario_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_agenda_terreno1`
    FOREIGN KEY (`terreno_idTerreno` , `terreno_usuario_idUsuario`)
    REFERENCES `riego`.`terreno` (`idTerreno` , `usuario_idUsuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 15
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `riego`.`riego`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`riego` (
  `idRiego` INT NOT NULL AUTO_INCREMENT,
  `agenda_idAgenda` INT NOT NULL,
  `agenda_usuario_idUsuario` MEDIUMINT NOT NULL,
  `inicio` VARCHAR(5) NOT NULL COMMENT '08:35\\n09:25\\n',
  `fin` VARCHAR(5) NOT NULL COMMENT 'hora de fin del riego\\n09:00 ejemplo',
  `fechaRegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaActulizasion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` TINYINT(1) NULL DEFAULT '1',
  PRIMARY KEY (`idRiego`, `agenda_idAgenda`, `agenda_usuario_idUsuario`),
  INDEX `fk_riego_agenda1_idx` (`agenda_idAgenda` ASC, `agenda_usuario_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_riego_agenda1`
    FOREIGN KEY (`agenda_idAgenda` , `agenda_usuario_idUsuario`)
    REFERENCES `riego`.`agenda` (`idAgenda` , `usuario_idUsuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 25
DEFAULT CHARACTER SET = utf8mb3;


-- -----------------------------------------------------
-- Table `riego`.`sensor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `riego`.`sensor` (
  `idSensor` INT NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(10) NOT NULL COMMENT 'El modelo del sensor que se este usando (Ejemplo DHT11)',
  `lectura` DECIMAL(3,1) NOT NULL COMMENT 'El valor lecturardo desde el sensor (decimal)',
  `tipoLectura` VARCHAR(10) NOT NULL COMMENT 'Tipo de lectura realizada por ejemplo\\\\n-Temperatura\\\\n-Humedad',
  `fechaLectura` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha y hora de la lectura del sensor',
  `terreno_idTerreno` MEDIUMINT NOT NULL,
  `terreno_usuario_idUsuario` MEDIUMINT NOT NULL,
  `estado` TINYINT NOT NULL DEFAULT '1',
  `fechaRegistro` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechaActualizacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idSensor`, `terreno_idTerreno`, `terreno_usuario_idUsuario`),
  INDEX `fk_sensor_terreno1_idx` (`terreno_idTerreno` ASC, `terreno_usuario_idUsuario` ASC) VISIBLE,
  CONSTRAINT `fk_sensor_terreno1`
    FOREIGN KEY (`terreno_idTerreno` , `terreno_usuario_idUsuario`)
    REFERENCES `riego`.`terreno` (`idTerreno` , `usuario_idUsuario`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb3;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
