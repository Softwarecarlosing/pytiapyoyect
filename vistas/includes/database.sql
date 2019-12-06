create database brazos;

use brazos;

CREATE TABLE Pacientes(
  `idPaciente` INT NOT NULL,
  `nombrepaciente` TEXT(30) NOT NULL,
  `apellidopaterno` TEXT(30) NOT NULL,
  `apellidomaterno` TEXT(30) NOT NULL,
  `Edad` INT NOT NULL,
  `nombretutor` TEXT(30) NOT NULL,
  `apellidopaternotutor` TEXT(30) NOT NULL,
  `apellidomaternotutor` TEXT(30) NOT NULL,
  `parentezco` TEXT(20) NOT NULL)
  `nombrepaciente` TEXT(30) NOT NULL,
  `correoelectronico` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  PRIMARY KEY (`idPaciente`))
ENGINE = InnoDB;




CREATE TABLE Administradores(
  `idAdmin` INT NOT NULL,
  `nombreadmin` TEXT(30) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `apodo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB;


CREATE TABLE ManoAfectacion(
  `idManoAfectacion` INT NOT NULL,
  `idPaciente` INT NOT NULL,
  `anchoMunon` DOUBLE NOT NULL,
  `largoMunon` DOUBLE NOT NULL,
  `anchoMuneca` DOUBLE NOT NULL,
  `superheroe` TEXT(25) NOT NULL,
  PRIMARY KEY (`idManoAfectacion`))
ENGINE = InnoDB;



CREATE TABLE ManoSaludable(
  `idManoSaludable` INT NOT NULL,
  `idPaciente` INT NOT NULL,
  `largodedomenique` DOUBLE NOT NULL,
  `largodedoanular` DOUBLE NOT NULL,
  `largodedomedio` DOUBLE NOT NULL,
  `largodedopulgar` DOUBLE NOT NULL,
  `largodorso` DOUBLE NOT NULL,
  PRIMARY KEY (`idManoSaludable`))
ENGINE = InnoDB;


CREATE TABLE Socioeconomico(
  `idEstudioSocioEconomico` INT NOT NULL,
  `idPaciente` INT NOT NULL,
  `calle` VARCHAR(40) NOT NULL,
  `colonia` VARCHAR(25) NOT NULL,
  `municipio` VARCHAR(25) NOT NULL,
  `estado` TEXT(20) NOT NULL,
  `condicion` VARCHAR(30) NOT NULL,
  `salario` INT NOT NULL,
  PRIMARY KEY (`idEstudioSocioEconomico`))
ENGINE = InnoDB;

