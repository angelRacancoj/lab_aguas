-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema water_laboratory
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `water_laboratory` ;

-- -----------------------------------------------------
-- Schema water_laboratory
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `water_laboratory` ;
USE `water_laboratory` ;

-- -----------------------------------------------------
-- Table `water_laboratory`.`DEPARTMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`DEPARTMENT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`DEPARTMENT` (
  `id_department` INT AUTO_INCREMENT NOT NULL,
  `name_department` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_department`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MUNICIPALITY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`MUNICIPALITY` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`MUNICIPALITY` (
  `id_municipality` INT AUTO_INCREMENT NOT NULL,
  `name_municipality` VARCHAR(45) NOT NULL,
  `department_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_municipality`),
  INDEX `fk_MUNICIPALITY_DEPARTMENT1_idx` (`department_id` ASC),
  CONSTRAINT `fk_MUNICIPALITY_DEPARTMENT1`
    FOREIGN KEY (`department_id`)
    REFERENCES `water_laboratory`.`DEPARTMENT` (`id_department`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`COSTUM_CLIENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`COSTUM_CLIENT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`COSTUM_CLIENT` (
  `id_costum_category` INT AUTO_INCREMENT NOT NULL,
  `name_costum_category` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id_costum_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`CLIENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`CLIENT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`CLIENT` (
  `dpi_client` BIGINT(14) NOT NULL,
  `name_client` VARCHAR(60) NOT NULL,
  `direction_client` VARCHAR(60) NULL DEFAULT NULL,
  `city_client` VARCHAR(45) NULL DEFAULT NULL,
  `company_client` VARCHAR(60) NULL DEFAULT NULL,
  `phone_client` VARCHAR(15) NOT NULL,
  `phone_client_extra` VARCHAR(15) NULL DEFAULT NULL,
  `phone_extra` VARCHAR(15) NULL DEFAULT NULL,
  `email_client` VARCHAR(45) NULL DEFAULT NULL,
  `web_site_client` VARCHAR(45) NULL DEFAULT NULL,
  `costum_client_id` INT DEFAULT NULL,
  PRIMARY KEY (`dpi_client`),
  INDEX `fk_CLIENT_COSTUM_CLIENT1_idx` (`costum_client_id` ASC),
  CONSTRAINT `fk_CLIENT_COSTUM_CLIENT1`
    FOREIGN KEY (`costum_client_id`)
    REFERENCES `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SAMPLE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`SAMPLE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`SAMPLE` (
  `id_sample` INT AUTO_INCREMENT NOT NULL,
  `admission_date` DATE NOT NULL,
  `sampling_date` DATE NOT NULL,
  `batch` VARCHAR(45) NOT NULL,
  `sampling_time` TIME NOT NULL,
  `container` VARCHAR(45) NULL DEFAULT NULL,
  `is_refrigerated` TINYINT(1) NOT NULL,
  `temperature` DOUBLE NOT NULL,
  `sample_quantity` DOUBLE NOT NULL,
  `is_water_birth` TINYINT(1) NOT NULL,
  `hamlet` VARCHAR(45) NULL DEFAULT NULL,
  `observations` TINYTEXT NULL DEFAULT NULL,
  `village` VARCHAR(45) NULL DEFAULT NULL,
  `note_sample` TINYTEXT NULL DEFAULT NULL,
  `acceptance` TINYINT(1) NOT NULL COMMENT 'aceptacion: 1->Aceptado, 2->Rechazado,3->Bajo Condicion',
  `Boleta_de_pago` VARCHAR(45) NULL DEFAULT NULL,
  `municipality_id` INT DEFAULT NULL,
  `client_dpi` BIGINT(14) DEFAULT NULL,
  PRIMARY KEY (`id_sample`),
  INDEX `fk_SAMPLE_MUNICIPALITY1_idx` (`municipality_id` ASC),
  INDEX `fk_SAMPLE_CLIENT1_idx` (`client_dpi` ASC),
  CONSTRAINT `fk_SAMPLE_MUNICIPALITY1`
    FOREIGN KEY (`municipality_id`)
    REFERENCES `water_laboratory`.`MUNICIPALITY` (`id_municipality`),
  CONSTRAINT `fk_SAMPLE_CLIENT1`
    FOREIGN KEY (`client_dpi`)
    REFERENCES `water_laboratory`.`CLIENT` (`dpi_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PACKAGE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PACKAGE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PACKAGE` (
  `id_package` VARCHAR(10) NOT NULL,
  `name_package` VARCHAR(45) NOT NULL,
  `package_cost` DOUBLE NOT NULL,
  PRIMARY KEY (`id_package`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`STAFF_POSITION`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`STAFF_POSITION` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`STAFF_POSITION` (
  `id_staff_position` INT AUTO_INCREMENT NOT NULL,
  `name_staff_position` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_staff_position`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`EMPLOYEE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`EMPLOYEE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`EMPLOYEE` (
  `dpi_employee` BIGINT(14) NOT NULL,
  `password` VARCHAR(400) NOT NULL,
  `name_employee` VARCHAR(60) BINARY NOT NULL,
  `is_active` TINYINT(1) NOT NULL,
  `phone_employee` VARCHAR(10) NULL DEFAULT NULL,
  `staff_position_id` INT DEFAULT NULL,
  PRIMARY KEY (`dpi_employee`),
  INDEX `fk_EMPLOYEE_PERSONAL_CHARGE1_idx` (`staff_position_id` ASC),
  CONSTRAINT `fk_EMPLOYEE_PERSONAL_CHARGE1`
    FOREIGN KEY (`staff_position_id`)
    REFERENCES `water_laboratory`.`STAFF_POSITION` (`id_staff_position`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`ANALYSIS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`ANALYSIS` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`ANALYSIS` (
  `id_analysis` INT AUTO_INCREMENT NOT NULL,
  `date_analysis` DATE NOT NULL,
  `cost_analysis` DOUBLE NOT NULL,
  `sample_id` INT DEFAULT NULL,
  `package_id` VARCHAR(10) DEFAULT NULL,
  `employee_dpi` BIGINT(14) DEFAULT NULL,
  PRIMARY KEY (`id_analysis`),
  INDEX `fk_ANALYSIS_SAMPLE1_idx` (`sample_id` ASC),
  INDEX `fk_ANALYSIS_PACKAGE1_idx` (`package_id` ASC),
  INDEX `fk_ANALYSIS_EMPLOYEE1_idx` (`employee_dpi` ASC),
  CONSTRAINT `fk_ANALYSIS_SAMPLE1`
    FOREIGN KEY (`sample_id`)
    REFERENCES `water_laboratory`.`SAMPLE` (`id_sample`),
  CONSTRAINT `fk_ANALYSIS_PACKAGE1`
    FOREIGN KEY (`package_id`)
    REFERENCES `water_laboratory`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ANALYSIS_EMPLOYEE1`
    FOREIGN KEY (`employee_dpi`)
    REFERENCES `water_laboratory`.`EMPLOYEE` (`dpi_employee`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`EQUIPMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`EQUIPMENT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`EQUIPMENT` (
  `id_equipment` INT AUTO_INCREMENT NOT NULL,
  `name_equipment` VARCHAR(45) NOT NULL,
  `model_equipment` VARCHAR(45) NOT NULL,
  `working_hours` INT NOT NULL,
  `maintenance_time` INT NOT NULL,
  PRIMARY KEY (`id_equipment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PROVIDER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PROVIDER` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PROVIDER` (
  `id_provider` INT NOT NULL,
  `name_provider` VARCHAR(45) NOT NULL,
  `phone_provider` VARCHAR(15) NOT NULL,
  `direction_provider` TINYTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_provider`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MAINTENANCE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`MAINTENANCE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`MAINTENANCE` (
  `id_maintenance` INT AUTO_INCREMENT NOT NULL,
  `maintenance_date` DATE NOT NULL,
  `maintenance_cost` DOUBLE NOT NULL,
  `equipment_id` INT DEFAULT NULL,
  `provider_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_maintenance`),
  INDEX `fk_MAINTENANCE_EQUIPMENT1_idx` (`equipment_id` ASC),
  INDEX `fk_MAINTENANCE_PROVIDER1_idx` (`provider_id` ASC),
  CONSTRAINT `fk_MAINTENANCE_EQUIPMENT1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`),
  CONSTRAINT `fk_MAINTENANCE_PROVIDER1`
    FOREIGN KEY (`provider_id`)
    REFERENCES `water_laboratory`.`PROVIDER` (`id_provider`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MEASURE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`MEASURE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`MEASURE` (
  `id_measure` INT AUTO_INCREMENT NOT NULL,
  `name_measure` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id_measure`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PARAMETER` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER` (
  `id_parameter` VARCHAR(10) NOT NULL,
  `name_parameter` VARCHAR(45) NOT NULL,
  `MR_code` VARCHAR(20) NOT NULL,
  `below_limit` TINYINT(1) NULL DEFAULT NULL,
  `measure_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_parameter`),
  INDEX `fk_PARAMETER_MEASURE1_idx` (`measure_id` ASC),
  CONSTRAINT `fk_PARAMETER_MEASURE1`
    FOREIGN KEY (`measure_id`)
    REFERENCES `water_laboratory`.`MEASURE` (`id_measure`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_PACKAGE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PARAMETER_PACKAGE` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_PACKAGE` (
  `id_PP` INT AUTO_INCREMENT NOT NULL,
  `LMA` DOUBLE NOT NULL,
  `LMP` DOUBLE NOT NULL,
  `parameter_id` VARCHAR(10) DEFAULT NULL,
  `package_id` VARCHAR(10) DEFAULT NULL,
  PRIMARY KEY (`id_PP`),
  INDEX `fk_PARAMENTER_PACKAGE_PARAMETER1_idx` (`parameter_id` ASC),
  INDEX `fk_PARAMETER_PACKAGE_PACKAGE1_idx` (`package_id` ASC),
  CONSTRAINT `fk_PARAMENTER_PACKAGE_PARAMETER1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`),
  CONSTRAINT `fk_PARAMETER_PACKAGE_PACKAGE1`
    FOREIGN KEY (`package_id`)
    REFERENCES `water_laboratory`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_EQUIPMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PARAMETER_EQUIPMENT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_EQUIPMENT` (
  `id_parameter_equipment` INT AUTO_INCREMENT NOT NULL,
  `working_hours` DOUBLE NOT NULL,
  `equipment_id` INT DEFAULT NULL,
  `parameter_id` VARCHAR(10) DEFAULT NULL,
  PRIMARY KEY (`id_parameter_equipment`),
  INDEX `fk_PARAMETER_EQUIPMENT_EQUIPMENT1_idx` (`equipment_id` ASC),
  INDEX `fk_PARAMETER_EQUIPMENT_PARAMETER1_idx` (`parameter_id` ASC),
  CONSTRAINT `fk_PARAMETER_EQUIPMENT_EQUIPMENT1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`),
  CONSTRAINT `fk_PARAMETER_EQUIPMENT_PARAMETER1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_RESULT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PARAMETER_RESULT` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_RESULT` (
  `id_parameter_result` INT AUTO_INCREMENT NOT NULL,
  `result` DOUBLE NOT NULL,
  `analysis_id` INT DEFAULT NULL,
  `parameter_package_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_parameter_result`),
  INDEX `fk_PARAMETER_RESULT_ANALYSIS1_idx` (`analysis_id` ASC),
  INDEX `fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1_idx` (`parameter_package_id` ASC),
  CONSTRAINT `fk_PARAMETER_RESULT_ANALYSIS1`
    FOREIGN KEY (`analysis_id`)
    REFERENCES `water_laboratory`.`ANALYSIS` (`id_analysis`),
  CONSTRAINT `fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1`
    FOREIGN KEY (`parameter_package_id`)
    REFERENCES `water_laboratory`.`PARAMETER_PACKAGE` (`id_PP`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SUPPLY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`SUPPLY` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`SUPPLY` (
  `id_supply` INT AUTO_INCREMENT NOT NULL,
  `name_supply` VARCHAR(45) NOT NULL,
  `date_expiry` DATE NOT NULL,
  `quantity_available` DOUBLE NOT NULL,
  `security_sheet` TINYBLOB NULL DEFAULT NULL,
  `measure_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_supply`),
  INDEX `fk_SUPPLY_MEASURE1_idx` (`measure_id` ASC),
  CONSTRAINT `fk_SUPPLY_MEASURE1`
    FOREIGN KEY (`measure_id`)
    REFERENCES `water_laboratory`.`MEASURE` (`id_measure`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_SUPPLY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`PARAMETER_SUPPLY` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_SUPPLY` (
  `id_parameter_supply` INT AUTO_INCREMENT NOT NULL,
  `amount_used` DOUBLE NOT NULL,
  `parameter_id` VARCHAR(10) DEFAULT NULL,
  `supply_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_parameter_supply`),
  INDEX `fk_PARAMETER_SUPPLY_PARAMETER1_idx` (`parameter_id` ASC),
  INDEX `fk_PARAMETER_SUPPLY_SUPPLY1_idx` (`supply_id` ASC),
  CONSTRAINT `fk_PARAMETER_SUPPLY_PARAMETER1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`),
  CONSTRAINT `fk_PARAMETER_SUPPLY_SUPPLY1`
    FOREIGN KEY (`supply_id`)
    REFERENCES `water_laboratory`.`SUPPLY` (`id_supply`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SHOPPING`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `water_laboratory`.`SHOPPING` ;

CREATE TABLE IF NOT EXISTS `water_laboratory`.`SHOPPING` (
  `id_shopping` INT AUTO_INCREMENT NOT NULL,
  `amount_purchased` DOUBLE NOT NULL,
  `date_shopping` DATE NOT NULL,
  `note_shopping` VARCHAR(200) NULL DEFAULT NULL,
  `supply_id` INT NULL DEFAULT NULL,
  `equipment_id` INT NULL DEFAULT NULL,
  `provider_id` INT DEFAULT NULL,
  PRIMARY KEY (`id_shopping`),
  INDEX `fk_SHOPPING_SUPPLY1_idx` (`supply_id` ASC),
  INDEX `fk_SHOPPING_PROVIDER1_idx` (`provider_id` ASC),
  INDEX `fk_SHOPPING_EQUIPMENT1_idx` (`equipment_id` ASC),
  CONSTRAINT `fk_SHOPPING_EQUIPMENT1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`),
  CONSTRAINT `fk_SHOPPING_PROVIDER1`
    FOREIGN KEY (`provider_id`)
    REFERENCES `water_laboratory`.`PROVIDER` (`id_provider`),
  CONSTRAINT `fk_SHOPPING_SUPPLY1`
    FOREIGN KEY (`supply_id`)
    REFERENCES `water_laboratory`.`SUPPLY` (`id_supply`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

--Ingreso de las Puestos
INSERT INTO `water_laboratory`.`STAFF_POSITION` (`name_staff_position`) VALUES ('Administrador');
INSERT INTO `water_laboratory`.`STAFF_POSITION` (`name_staff_position`) VALUES ('Secretaria');
INSERT INTO `water_laboratory`.`STAFF_POSITION` (`name_staff_position`) VALUES ('Laboratorista');

--Ingreso de las Medidas
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Unidad');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Galon');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Litro');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Mililitro');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Kilogramo');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Gramo');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Miligramo');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Toneladas');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Libras');
INSERT INTO `water_laboratory`.`MEASURE` (`name_measure`) VALUES ('Onzas');

--Ingreso de los tipos de Clientes. 
INSERT INTO `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`, `name_costum_category`, `description`) VALUES ('1', 'empresa privada', 'todo tipo de empresa privada');
INSERT INTO `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`, `name_costum_category`, `description`) VALUES ('2', 'empresa mixta', 'todo tipo de empresa privada');
INSERT INTO `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`, `name_costum_category`, `description`) VALUES ('3', 'entidad gobierno', 'toda entidad gubernamental');
INSERT INTO `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`, `name_costum_category`, `description`) VALUES ('4', 'estudiante', 'para cualquier estudiante');
INSERT INTO `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`, `name_costum_category`, `description`) VALUES ('5', 'ONG', 'todo tipo de ONGs');

--Ingreso de los Departamentos.
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Alta Verapaz');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Baja Verapaz');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Chimaltenango');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Chiquimula');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('El Progreso');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Escuintla');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Guatemala');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Huehuetenango');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Izabal');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Jalapa');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Jutiapa');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Peten');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Quetzaltenango');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Quiche');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Retalhuleu');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Sacatepequez');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('San Marcos');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Santa Rosa');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Solola');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Suchitepequez');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Totonicapan');
INSERT INTO `water_laboratory`.`DEPARTMENT` (`name_department`) VALUES ('Zacapa');


--Ingreso de los Municipios
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Cobán', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Cruz Verapaz', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Cristóbal Verapaz', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tactic', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tamahú', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tucurú', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Panzós', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Senahú', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Carchá', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Chamelco', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Lanquín', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa María Cahabón', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chisec', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chahal', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Fray Bartolomé de las Casas', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Catalina La Tinta', 1);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Raxruha', 1);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Salamá', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Cubulco', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Granados', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Purulhá', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Rabinal', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Jerónimo', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Miguel Chicaj', 2);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Cruz El Chol', 2);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chimaltenango', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Acatenango', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('El Tejar', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Parramos', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Patzicía', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Patzún', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Andrés Itzapa', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José Poaquil', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Comalapa', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Martín Jilotepeque', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Miguel Pochuta', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Yepocapa', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Apolonia', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Cruz Balanyá', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tecpán Guatemala', 3);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Zaragoza', 3);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chiquimula', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Camotán', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Concepción Las Minas', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Esquipulas', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Ipala', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Jocotán', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Olopa', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Quezaltepeque', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Jacinto', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José La Arada', 4);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Ermita', 4);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Guastatoya', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('El Jícaro', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Morazán', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('S. Agustín Acasaguastlán', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Antonio La Paz', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Cristóbal Acasaguastlán', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Sanarate', 5);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Sansare', 5);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Escuintla', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Guanagazapa', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Iztapa', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('La Democracia', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('La Gomera', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Masagua', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Nueva Concepción', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Palín', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Vicente Pacaya', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Lucía Cotzumalguapa', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Sipacate', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Siquinalá', 6);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tiquisate', 6);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Guatemala', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Catarina Pinula', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José Pinula', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José del Golfo', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Palencia', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chinautla', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Ayampuc', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Mixco', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Sacatepéquez', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Sacatepéquez', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Raymundo', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chuarrancho', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Fraijanes', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Amatitlán', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Villa Nueva', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Villa Canales', 7);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Petapa', 7);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Huehuetenango', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Aguacatán', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chiantla', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Colotenango', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Concepción Huista ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Cuilco', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Jacaltenango ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('La Democracia ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('La Libertad ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Malacatancito', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Nentón ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Antonio Huista ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Gaspar Ixchil ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Ildefonso Ixtahuacán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Atitán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Ixcoy ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Mateo Ixtatán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Miguel Acatán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Nécta ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Soloma ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Rafael La Independencia ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Rafael Pétzal ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Sebastián Coatán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Sebastián Huehuetenango ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Ana Huista ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Bárbara ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Cruz Barillas ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Eulalia ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santiago Chimaltenango ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Tectitán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Todos Santos Cuchumatán ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Unión Cantinil ', 8);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santiago Petatán ', 8);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Puerto Barrios', 9);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('El Estor', 9);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Livingston', 9);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Los Amates', 9);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Morales', 9);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Jalapa', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Mataquescuintla', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Monjas', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Carlos Alzatate', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Luis Jilotepeque', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Manuel Chaparrón', 10);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pedro Pinula', 10);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Agua Blanca', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Asuncion Mita', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Atescatempa', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Comapa', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Conguaco', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Adelanto', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Progreso', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Jalpatagua', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Jerez', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Jutiapa', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Moyuta', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Pasaco', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Quesada', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Jose Acatempa', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Catarina Mita', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Yupiltepeque', 11);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Zapotitlan', 11);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Dolores', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Flores, Santa Elena de la Cruz', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('La Libertad', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Melchor de Mencos', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Poptun', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Andres', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Benito', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Francisco', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Jose', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Luis', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Ana', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sayaxche', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Las Cruces', 12);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Chal', 12);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Almolonga', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Cabrican', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Cajola', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Cantel', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Coatepeque', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Colomba', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Concepcion Chiquirichapa', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Palmar', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Flores Costa Cuca', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Genova', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Huitan', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('La Esperanza', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Olintepeque', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Palestina de los Altos', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Quetzaltenango', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Salcaja', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Carlos Sija', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Juan Ostuncalco', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Francisco La Union', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Martin Sacatepequez', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Mateo', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Miguel Siguila', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sibilia', 13);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Zunil', 13);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Cruz del Quiche', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Canilla', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chajul', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chicaman', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chiche', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chichicastenango', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chinique', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Cunen', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Ixcan', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Joyabaj', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Pachalum', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Patzite', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sacapulas', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Andres Sajcabaja', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Antonio Ilotenango', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Bartolome Jocotenango', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Juan Cotzal', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Pedro Jocopilas', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Maria Nebaj', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Uspantan', 14);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Zacualpa', 14);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Champerico', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Asintal', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Nuevo San Carlos', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Retalhuleu', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Andres Villa Seca', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Felipe', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Martin Zapotitlan', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Sebastian', 15);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Cruz Mulua', 15);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Alotenango', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('La Antigua Guatemala', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Ciudad Vieja', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Jocotenango', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Magdalena Milpas Altas', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Pastores', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Antonio Aguas Calientes', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Bartolome Milpas Altas', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Lucas Sacatepequez', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Miguel Dueñas', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Catarina Barahona', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Lucia Milpas Altas', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Maria de Jesus', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santiago Sacatepequez', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santo Domingo Xenacoj', 16);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sumpango', 16);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Marcos', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Ayutla', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Catarina', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Camitancillo', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Concepción Tutuapa', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Quetzal', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Rodeo', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('El Tumbador', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Ixchiguan', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('La Reforma', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Malacatan', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Nuevo Progreso', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Ocos', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Pajapita', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Esquipulas Palo Gordo', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Antonio Sacatepequez', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Cristobal Cucho', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Jose Ojetenam', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Lorenzo', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Miguel Ixtahuacán', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Pablo', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Pedro Sacatepequez', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Rafael Pie de la Cuesta', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sibinal', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Sipacapa', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Tacana', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Tajucumulco', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Tejutla', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Rio Blanco', 17);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('La Blanca', 17);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Barberena', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Casillas', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Chiquimulilla', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Cuilapa', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Guazacapan', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Monterrico', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Nueva Santa Rosa', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Oratorio', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Pueblo Nuevo Viñas', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Juan Tecuaco', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Rafael Las Flores', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Cruz Naranjo', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Maria Ixhuatan', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Rosa de Lima', 18);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Taxisco', 18);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Solola', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Concepcion', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Nahuala', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Panajachel', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Andres Semetabaj', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Antonio Palopo', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Jose Chacaya', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Juan La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Lucas Toliman', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Marcos La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Pablo La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('San Pedro La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Catarina Ixtahuacán', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Catarina Palopo', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Clara La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Cruz La Laguna', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Lucia Utatlan', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santa Maria Visitacion', 19);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`,`department_id`) VALUES ('Santiago Atitlan', 19);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Mazatenango', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Chicacao', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Cuyotenango', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Patulul', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Pueblo Nuevo', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Río Bravo', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Samayac', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('S. Antonio Suchitepéquez', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Bernardino', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Francisco Zapotitlán', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Gabriel', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José El Ídolo', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San José La Maquina', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Juan Bautista', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Lorenzo', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Miguel Panán', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Pablo Jocopilas', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Bárbara', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('S. Domingo Suchitepéquez', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santo Tomás La Unión', 20);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Zunilito', 20);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Totonicapán', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Momostenango', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Andrés Xecul', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Bartolo Aguas Calientes', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Cristóbal Totonicapán', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Francisco El Alto', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa Lucía La Reforma', 21);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Santa María Chiquimula', 21);

INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Zacapa', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Cabañas', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Estanzuela', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Gualán', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Huité', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('La Unión', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Río Hondo', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Diego', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('San Jorge', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Teculután', 22);
INSERT INTO `water_laboratory`.`MUNICIPALITY` (`name_municipality`, `department_id`) VALUES ('Usumatlán', 22);