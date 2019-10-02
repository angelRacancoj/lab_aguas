-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema lab-aguas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `lab-aguas` ;

-- -----------------------------------------------------
-- Schema lab-aguas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lab-aguas` ;
USE `lab-aguas` ;

-- -----------------------------------------------------
-- Table `lab-aguas`.`CARGO_PERSONAL`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`CARGO_PERSONAL` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`CARGO_PERSONAL` (
  `id_staff_position` INT NOT NULL,
  `name_staff_position` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_staff_position`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`EMPLOYEE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`EMPLOYEE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`EMPLOYEE` (
  `id_employee` INT NOT NULL,
  `name_employee` VARCHAR(45) NOT NULL,
  `DPI_employee` VARCHAR(13) NOT NULL,
  `phone_provider` VARCHAR(10) NULL,
  `staff_position` INT NOT NULL,
  PRIMARY KEY (`id_employee`),
  INDEX `fk_Empleado_Cargo-personal_idx` (`staff_position` ASC),
  CONSTRAINT `fk_Empleado_Cargo-personal`
    FOREIGN KEY (`staff_position`)
    REFERENCES `lab-aguas`.`CARGO_PERSONAL` (`id_staff_position`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`COSTUM_CLIENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`COSTUM_CLIENT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`COSTUM_CLIENT` (
  `id_costum_category` INT NOT NULL AUTO_INCREMENT,
  `name_costum_category` VARCHAR(45) NULL,
  `description` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_costum_category`, `description`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`CLIENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`CLIENT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`CLIENT` (
  `id_client` INT NOT NULL,
  `name_client` VARCHAR(45) NOT NULL,
  `direction_client` VARCHAR(45) NULL,
  `city_client` VARCHAR(45) NULL,
  `company_client` VARCHAR(45) NULL,
  `phone_client` VARCHAR(45) NULL,
  `phone_client_extra` VARCHAR(45) NULL,
  `phone_extra` VARCHAR(45) NULL,
  `fax_client` VARCHAR(45) NULL,
  `email_client` VARCHAR(45) NULL,
  `web_site_client` VARCHAR(45) NULL,
  `customer_category_id` INT NOT NULL,
  PRIMARY KEY (`id_client`),
  INDEX `fk_CLIENTE_CATEGORIA-CLIENTE1_idx` (`customer_category_id` ASC),
  CONSTRAINT `fk_CLIENTE_CATEGORIA-CLIENTE1`
    FOREIGN KEY (`customer_category_id`)
    REFERENCES `lab-aguas`.`COSTUM_CLIENT` (`id_costum_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`DEPARTMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`DEPARTMENT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`DEPARTMENT` (
  `id_department` INT NOT NULL AUTO_INCREMENT,
  `name_department` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_department`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`MUNICIPALITY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`MUNICIPALITY` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`MUNICIPALITY` (
  `id_municipality` INT NOT NULL AUTO_INCREMENT,
  `name_municipality` VARCHAR(45) NOT NULL,
  `department_id` INT NOT NULL,
  PRIMARY KEY (`id_municipality`),
  INDEX `fk_MUNICIPIO_DEPARTAMENTO1_idx` (`department_id` ASC),
  CONSTRAINT `fk_MUNICIPIO_DEPARTAMENTO1`
    FOREIGN KEY (`department_id`)
    REFERENCES `lab-aguas`.`DEPARTMENT` (`id_department`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`SAMPLE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`SAMPLE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`SAMPLE` (
  `id_sample` INT NOT NULL,
  `admission_date` DATE NOT NULL,
  `sampling_date` DATE NOT NULL,
  `batch` VARCHAR(45) NOT NULL,
  `sampling_time` TIME NOT NULL,
  `recipiente` VARCHAR(45) NULL,
  `is_refrigerated` TINYINT(1) NOT NULL,
  `temperature` DOUBLE NOT NULL,
  `sample_quantity` DOUBLE NOT NULL,
  `is_water_birth` TINYINT(1) NOT NULL,
  `caserio` VARCHAR(45) NULL,
  `observations` TINYTEXT NULL,
  `aldea` VARCHAR(45) NULL,
  `note_sample` TINYTEXT NULL,
  `aceptacion` TINYINT(1) NOT NULL COMMENT 'aceptacion: 1->Aceptado, 2->Rechazado,3->Bajo Condicion\n',
  `Boleta_de_pago` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  `municipality_id` INT NOT NULL,
  PRIMARY KEY (`id_sample`),
  INDEX `fk_MUESTRA_CLIENTE1_idx` (`client_id` ASC),
  INDEX `fk_MUESTRA_MUNICIPIO1_idx` (`municipality_id` ASC),
  CONSTRAINT `fk_MUESTRA_CLIENTE1`
    FOREIGN KEY (`client_id`)
    REFERENCES `lab-aguas`.`CLIENT` (`id_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MUESTRA_MUNICIPIO1`
    FOREIGN KEY (`municipality_id`)
    REFERENCES `lab-aguas`.`MUNICIPALITY` (`id_municipality`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`MEASURE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`MEASURE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`MEASURE` (
  `id_measure` INT NOT NULL AUTO_INCREMENT,
  `name_measure` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NULL,
  PRIMARY KEY (`id_measure`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`SUPPLY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`SUPPLY` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`SUPPLY` (
  `id_supply` INT NOT NULL AUTO_INCREMENT,
  `name_supply` VARCHAR(45) NOT NULL,
  `date_expiry` VARCHAR(45) NOT NULL,
  `quantity_available` DOUBLE NOT NULL,
  `security_sheet` TINYBLOB NULL,
  `measure_id` INT NOT NULL,
  PRIMARY KEY (`id_supply`),
  INDEX `fk_SUPPLY_MEASURE1_idx` (`measure_id` ASC),
  CONSTRAINT `fk_SUPPLY_MEASURE1`
    FOREIGN KEY (`measure_id`)
    REFERENCES `lab-aguas`.`MEASURE` (`id_measure`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`EQUIPMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`EQUIPMENT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`EQUIPMENT` (
  `id_equipment` INT NOT NULL AUTO_INCREMENT,
  `name_equipment` VARCHAR(45) NOT NULL,
  `model_equipment` VARCHAR(45) NOT NULL,
  `working_hours` INT NOT NULL,
  `maintenance_time` INT NOT NULL,
  PRIMARY KEY (`id_equipment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PARAMETER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PARAMETER` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PARAMETER` (
  `id_parameter` VARCHAR(10) NOT NULL,
  `name_parameter` VARCHAR(45) NOT NULL,
  `MR_code` VARCHAR(20) NOT NULL,
  `below_limit` TINYINT(1) NULL,
  `measure_id` INT NOT NULL,
  PRIMARY KEY (`id_parameter`),
  INDEX `fk_PARAMETER_MEASURE1_idx` (`measure_id` ASC),
  CONSTRAINT `fk_PARAMETER_MEASURE1`
    FOREIGN KEY (`measure_id`)
    REFERENCES `lab-aguas`.`MEASURE` (`id_measure`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PARAMETER_EQUIPMENT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PARAMETER_EQUIPMENT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PARAMETER_EQUIPMENT` (
  `id_parameter_equipment` INT NULL AUTO_INCREMENT,
  `equipment_id` INT NOT NULL,
  `parameter_id` VARCHAR(10) NOT NULL,
  `working_hours` DECIMAL UNSIGNED NOT NULL,
  INDEX `fk_PARAMETRO-EQUIPO_PARAMETRO1_idx` (`parameter_id` ASC),
  PRIMARY KEY (`id_parameter_equipment`),
  CONSTRAINT `fk_UTILIZA-EQUIPO_EQUIPO1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `lab-aguas`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETRO-EQUIPO_PARAMETRO1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `lab-aguas`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PARAMETER_SUPPLY`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PARAMETER_SUPPLY` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PARAMETER_SUPPLY` (
  `id_parameter_supply` INT NOT NULL AUTO_INCREMENT,
  `supply_id` INT NOT NULL,
  `parameter_id` INT NOT NULL,
  `amount_used` DOUBLE UNSIGNED NOT NULL,
  PRIMARY KEY (`id_parameter_supply`),
  INDEX `fk_PARAMETRO-INSUMO_PARAMETRO1_idx` (`parameter_id` ASC),
  CONSTRAINT `fk_UTILIZA-INSUMO_INSUMO1`
    FOREIGN KEY (`supply_id`)
    REFERENCES `lab-aguas`.`SUPPLY` (`id_supply`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETRO-INSUMO_PARAMETRO1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `lab-aguas`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PACKAGE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PACKAGE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PACKAGE` (
  `id_package` INT NOT NULL AUTO_INCREMENT,
  `name_package` VARCHAR(45) NOT NULL,
  `package_cost` DECIMAL UNSIGNED NOT NULL,
  PRIMARY KEY (`id_package`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PARAMENTER_PACKAGE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PARAMENTER_PACKAGE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PARAMENTER_PACKAGE` (
  `id_PP` INT NOT NULL AUTO_INCREMENT,
  `package_id` INT NOT NULL,
  `parameter_id` VARCHAR(10) NOT NULL,
  `LMA` DOUBLE NOT NULL,
  `LMP` DOUBLE NOT NULL,
  PRIMARY KEY (`id_PP`),
  INDEX `fk_PARAMETRO-PAQUETE_PARAMETRO1_idx` (`parameter_id` ASC),
  CONSTRAINT `fk_PARAMETRO-PAQUETE_PAQUETE1`
    FOREIGN KEY (`package_id`)
    REFERENCES `lab-aguas`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETRO-PAQUETE_PARAMETRO1`
    FOREIGN KEY (`parameter_id`)
    REFERENCES `lab-aguas`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PROVIDER`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PROVIDER` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PROVIDER` (
  `id_provider` INT NOT NULL AUTO_INCREMENT,
  `name_provider` VARCHAR(45) NOT NULL,
  `phone_provider` VARCHAR(15) NOT NULL,
  `direction_provider` TINYTEXT NULL,
  PRIMARY KEY (`id_provider`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`SHOPPING`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`SHOPPING` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`SHOPPING` (
  `id_shopping` INT NOT NULL AUTO_INCREMENT,
  `provider_id` INT NOT NULL,
  `supply_id` INT NULL,
  `equipment_id` INT NULL,
  `amount_purchased` DOUBLE UNSIGNED NULL,
  PRIMARY KEY (`id_shopping`),
  INDEX `fk_COMPRAS_INSUMO1_idx` (`supply_id` ASC),
  INDEX `fk_COMPRAS_EQUIPO1_idx` (`equipment_id` ASC),
  INDEX `fk_COMPRAS_PROVEEDOR1_idx` (`provider_id` ASC),
  CONSTRAINT `fk_COMPRAS_INSUMO1`
    FOREIGN KEY (`supply_id`)
    REFERENCES `lab-aguas`.`SUPPLY` (`id_supply`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_COMPRAS_EQUIPO1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `lab-aguas`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_COMPRAS_PROVEEDOR1`
    FOREIGN KEY (`provider_id`)
    REFERENCES `lab-aguas`.`PROVIDER` (`id_provider`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`ANALYSIS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`ANALYSIS` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`ANALYSIS` (
  `id_analysis` INT NOT NULL AUTO_INCREMENT,
  `date_analysis` DATE NOT NULL,
  `cost_analysis` DOUBLE NOT NULL,
  `employee_id` INT NOT NULL,
  `sample_id` INT NOT NULL,
  `package_id` INT NOT NULL,
  PRIMARY KEY (`id_analysis`),
  INDEX `fk_ANALISIS_Empleado1_idx` (`employee_id` ASC),
  INDEX `fk_ANALISIS_MUESTRA1_idx` (`sample_id` ASC),
  INDEX `fk_ANALISIS_PAQUETE1_idx` (`package_id` ASC),
  CONSTRAINT `fk_ANALISIS_Empleado1`
    FOREIGN KEY (`employee_id`)
    REFERENCES `lab-aguas`.`EMPLOYEE` (`id_employee`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ANALISIS_MUESTRA1`
    FOREIGN KEY (`sample_id`)
    REFERENCES `lab-aguas`.`SAMPLE` (`id_sample`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ANALISIS_PAQUETE1`
    FOREIGN KEY (`package_id`)
    REFERENCES `lab-aguas`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`MAINTENANCE`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`MAINTENANCE` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`MAINTENANCE` (
  `id_maintenance` INT NOT NULL AUTO_INCREMENT,
  `maintenance_date` DATE NOT NULL,
  `maintenance_cost` DECIMAL UNSIGNED NOT NULL,
  `equipment_id` INT NOT NULL,
  `provider_id` INT NOT NULL,
  PRIMARY KEY (`id_maintenance`),
  INDEX `fk_MANTENIMIENTO_EQUIPO1_idx` (`equipment_id` ASC),
  INDEX `fk_MANTENIMIENTO_PROVEEDOR1_idx` (`provider_id` ASC),
  CONSTRAINT `fk_MANTENIMIENTO_EQUIPO1`
    FOREIGN KEY (`equipment_id`)
    REFERENCES `lab-aguas`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MANTENIMIENTO_PROVEEDOR1`
    FOREIGN KEY (`provider_id`)
    REFERENCES `lab-aguas`.`PROVIDER` (`id_provider`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lab-aguas`.`PARAMETER_RESULT`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lab-aguas`.`PARAMETER_RESULT` ;

CREATE TABLE IF NOT EXISTS `lab-aguas`.`PARAMETER_RESULT` (
  `id_parameter_result` INT NOT NULL AUTO_INCREMENT,
  `result` DOUBLE NOT NULL,
  `analysis_id` VARCHAR(45) NOT NULL,
  `parameter_package_id` INT NOT NULL,
  PRIMARY KEY (`id_parameter_result`),
  INDEX `fk_RESULTADO_PARAMETRO_ANALISIS1_idx` (`analysis_id` ASC),
  INDEX `fk_RESULTADO_PARAMETRO_PARAMETRO_PAQUETE1_idx` (`parameter_package_id` ASC),
  CONSTRAINT `fk_RESULTADO_PARAMETRO_ANALISIS1`
    FOREIGN KEY (`analysis_id`)
    REFERENCES `lab-aguas`.`ANALYSIS` (`id_analysis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_RESULTADO_PARAMETRO_PARAMETRO_PAQUETE1`
    FOREIGN KEY (`parameter_package_id`)
    REFERENCES `lab-aguas`.`PARAMENTER_PACKAGE` (`id_PP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
