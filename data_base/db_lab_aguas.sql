
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema water_laboratory
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema water_laboratory
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `water_laboratory` ;
USE `water_laboratory` ;

-- -----------------------------------------------------
-- Table `water_laboratory`.`PERSONAL_CHARGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PERSONAL_CHARGE` (
  `id_staff_position` INT NOT NULL AUTO_INCREMENT,
  `name_staff_position` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_staff_position`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`EMPLOYEE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`EMPLOYEE` (
  `id_employee` INT NOT NULL AUTO_INCREMENT,
  `name_employee` VARCHAR(60) NOT NULL,
  `DPI_employee` VARCHAR(13) NOT NULL,
  `phone_provider` VARCHAR(10) NULL,
  `PERSONAL_CHARGE_id_staff_position` INT NOT NULL,
  PRIMARY KEY (`id_employee`),
  CONSTRAINT `fk_EMPLOYEE_PERSONAL_CHARGE1`
    FOREIGN KEY (`PERSONAL_CHARGE_id_staff_position`)
    REFERENCES `water_laboratory`.`PERSONAL_CHARGE` (`id_staff_position`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_EMPLOYEE_PERSONAL_CHARGE1_idx` ON `water_laboratory`.`EMPLOYEE` (`PERSONAL_CHARGE_id_staff_position` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`COSTUM_CLIENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`COSTUM_CLIENT` (
  `id_costum_category` INT NOT NULL AUTO_INCREMENT,
  `name_costum_category` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL,
  PRIMARY KEY (`id_costum_category`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`CLIENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`CLIENT` (
  `id_client` INT NOT NULL,
  `name_client` VARCHAR(60) NOT NULL,
  `direction_client` VARCHAR(60) NULL,
  `city_client` VARCHAR(45) NULL,
  `company_client` VARCHAR(60) NULL,
  `phone_client` VARCHAR(15) NULL,
  `phone_client_extra` VARCHAR(15) NULL,
  `phone_extra` VARCHAR(15) NULL,
  `email_client` VARCHAR(45) NULL,
  `web_site_client` VARCHAR(45) NULL,
  `COSTUM_CLIENT_id_costum_category` INT NOT NULL,
  PRIMARY KEY (`id_client`),
  CONSTRAINT `fk_CLIENT_COSTUM_CLIENT1`
    FOREIGN KEY (`COSTUM_CLIENT_id_costum_category`)
    REFERENCES `water_laboratory`.`COSTUM_CLIENT` (`id_costum_category`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_CLIENT_COSTUM_CLIENT1_idx` ON `water_laboratory`.`CLIENT` (`COSTUM_CLIENT_id_costum_category` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`DEPARTMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`DEPARTMENT` (
  `id_department` INT NOT NULL AUTO_INCREMENT,
  `name_department` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_department`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MUNICIPALITY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`MUNICIPALITY` (
  `id_municipality` INT NOT NULL AUTO_INCREMENT,
  `name_municipality` VARCHAR(45) NOT NULL,
  `DEPARTMENT_id_department` INT NOT NULL,
  PRIMARY KEY (`id_municipality`),
  CONSTRAINT `fk_MUNICIPALITY_DEPARTMENT1`
    FOREIGN KEY (`DEPARTMENT_id_department`)
    REFERENCES `water_laboratory`.`DEPARTMENT` (`id_department`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_MUNICIPALITY_DEPARTMENT1_idx` ON `water_laboratory`.`MUNICIPALITY` (`DEPARTMENT_id_department` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SAMPLE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`SAMPLE` (
  `id_sample` INT NOT NULL AUTO_INCREMENT,
  `admission_date` DATE NOT NULL,
  `sampling_date` DATE NOT NULL,
  `batch` VARCHAR(45) NOT NULL,
  `sampling_time` TIME NOT NULL,
  `container` VARCHAR(45) NULL,
  `is_refrigerated` TINYINT(1) NOT NULL,
  `temperature` DOUBLE NOT NULL,
  `sample_quantity` DOUBLE NOT NULL,
  `is_water_birth` TINYINT(1) NOT NULL,
  `hamlet` VARCHAR(45) NULL,
  `observations` TINYTEXT NULL,
  `village` VARCHAR(45) NULL,
  `note_sample` TINYTEXT NULL,
  `acceptance` TINYINT(1) NOT NULL COMMENT 'aceptacion: 1->Aceptado, 2->Rechazado,3->Bajo Condicion\n',
  `Boleta_de_pago` VARCHAR(45) NULL,
  `client_id` INT NOT NULL,
  `MUNICIPALITY_id_municipality` INT NOT NULL,
  PRIMARY KEY (`id_sample`),
  CONSTRAINT `fk_MUESTRA_CLIENTE1`
    FOREIGN KEY (`client_id`)
    REFERENCES `water_laboratory`.`CLIENT` (`id_client`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SAMPLE_MUNICIPALITY1`
    FOREIGN KEY (`MUNICIPALITY_id_municipality`)
    REFERENCES `water_laboratory`.`MUNICIPALITY` (`id_municipality`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_MUESTRA_CLIENTE1_idx` ON `water_laboratory`.`SAMPLE` (`client_id` ASC) VISIBLE;

CREATE INDEX `fk_SAMPLE_MUNICIPALITY1_idx` ON `water_laboratory`.`SAMPLE` (`MUNICIPALITY_id_municipality` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MEASURE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`MEASURE` (
  `id_measure` INT NOT NULL AUTO_INCREMENT,
  `name_measure` VARCHAR(45) NOT NULL,
  `description` TINYTEXT NULL,
  PRIMARY KEY (`id_measure`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SUPPLY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`SUPPLY` (
  `id_supply` INT NOT NULL AUTO_INCREMENT,
  `name_supply` VARCHAR(45) NOT NULL,
  `date_expiry` DATE NOT NULL,
  `quantity_available` DOUBLE NOT NULL,
  `security_sheet` TINYBLOB NULL,
  `MEASURE_id_measure` INT NOT NULL,
  PRIMARY KEY (`id_supply`),
  CONSTRAINT `fk_SUPPLY_MEASURE1`
    FOREIGN KEY (`MEASURE_id_measure`)
    REFERENCES `water_laboratory`.`MEASURE` (`id_measure`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_SUPPLY_MEASURE1_idx` ON `water_laboratory`.`SUPPLY` (`MEASURE_id_measure` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`EQUIPMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`EQUIPMENT` (
  `id_equipment` INT NOT NULL AUTO_INCREMENT,
  `name_equipment` VARCHAR(45) NOT NULL,
  `model_equipment` VARCHAR(45) NOT NULL,
  `working_hours` INT NOT NULL,
  `maintenance_time` INT NOT NULL,
  PRIMARY KEY (`id_equipment`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER` (
  `id_parameter` VARCHAR(10) NOT NULL,
  `name_parameter` VARCHAR(45) NOT NULL,
  `MR_code` VARCHAR(20) NOT NULL,
  `below_limit` TINYINT(1) NULL,
  `MEASURE_id_measure` INT NOT NULL,
  PRIMARY KEY (`id_parameter`),
  CONSTRAINT `fk_PARAMETER_MEASURE1`
    FOREIGN KEY (`MEASURE_id_measure`)
    REFERENCES `water_laboratory`.`MEASURE` (`id_measure`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PARAMETER_MEASURE1_idx` ON `water_laboratory`.`PARAMETER` (`MEASURE_id_measure` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_EQUIPMENT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_EQUIPMENT` (
  `id_parameter_equipment` INT NULL AUTO_INCREMENT,
  `working_hours` DECIMAL NOT NULL,
  `EQUIPMENT_id_equipment` INT NOT NULL,
  `PARAMETER_id_parameter` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_parameter_equipment`),
  CONSTRAINT `fk_PARAMETER_EQUIPMENT_EQUIPMENT1`
    FOREIGN KEY (`EQUIPMENT_id_equipment`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETER_EQUIPMENT_PARAMETER1`
    FOREIGN KEY (`PARAMETER_id_parameter`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PARAMETER_EQUIPMENT_EQUIPMENT1_idx` ON `water_laboratory`.`PARAMETER_EQUIPMENT` (`EQUIPMENT_id_equipment` ASC) VISIBLE;

CREATE INDEX `fk_PARAMETER_EQUIPMENT_PARAMETER1_idx` ON `water_laboratory`.`PARAMETER_EQUIPMENT` (`PARAMETER_id_parameter` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_SUPPLY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_SUPPLY` (
  `id_parameter_supply` INT NOT NULL AUTO_INCREMENT,
  `amount_used` DOUBLE NOT NULL,
  `PARAMETER_id_parameter` VARCHAR(10) NOT NULL,
  `SUPPLY_id_supply` INT NOT NULL,
  PRIMARY KEY (`id_parameter_supply`),
  CONSTRAINT `fk_PARAMETER_SUPPLY_PARAMETER1`
    FOREIGN KEY (`PARAMETER_id_parameter`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETER_SUPPLY_SUPPLY1`
    FOREIGN KEY (`SUPPLY_id_supply`)
    REFERENCES `water_laboratory`.`SUPPLY` (`id_supply`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PARAMETER_SUPPLY_PARAMETER1_idx` ON `water_laboratory`.`PARAMETER_SUPPLY` (`PARAMETER_id_parameter` ASC) VISIBLE;

CREATE INDEX `fk_PARAMETER_SUPPLY_SUPPLY1_idx` ON `water_laboratory`.`PARAMETER_SUPPLY` (`SUPPLY_id_supply` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PACKAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PACKAGE` (
  `id_package` INT NOT NULL AUTO_INCREMENT,
  `name_package` VARCHAR(45) NOT NULL,
  `package_cost` DOUBLE NOT NULL,
  PRIMARY KEY (`id_package`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMENTER_PACKAGE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMENTER_PACKAGE` (
  `id_PP` INT NOT NULL AUTO_INCREMENT,
  `LMA` DOUBLE NOT NULL,
  `LMP` DOUBLE NOT NULL,
  `PACKAGE_id_package` INT NOT NULL,
  `PARAMETER_id_parameter` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_PP`),
  CONSTRAINT `fk_PARAMENTER_PACKAGE_PACKAGE1`
    FOREIGN KEY (`PACKAGE_id_package`)
    REFERENCES `water_laboratory`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMENTER_PACKAGE_PARAMETER1`
    FOREIGN KEY (`PARAMETER_id_parameter`)
    REFERENCES `water_laboratory`.`PARAMETER` (`id_parameter`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PARAMENTER_PACKAGE_PACKAGE1_idx` ON `water_laboratory`.`PARAMENTER_PACKAGE` (`PACKAGE_id_package` ASC) VISIBLE;

CREATE INDEX `fk_PARAMENTER_PACKAGE_PARAMETER1_idx` ON `water_laboratory`.`PARAMENTER_PACKAGE` (`PARAMETER_id_parameter` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PROVIDER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PROVIDER` (
  `id_provider` INT NOT NULL AUTO_INCREMENT,
  `name_provider` VARCHAR(45) NOT NULL,
  `phone_provider` VARCHAR(15) NOT NULL,
  `direction_provider` TINYTEXT NULL,
  PRIMARY KEY (`id_provider`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `water_laboratory`.`SHOPPING`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`SHOPPING` (
  `id_shopping` INT NOT NULL AUTO_INCREMENT,
  `amount_purchased` DOUBLE NOT NULL,
  `note_shopping` VARCHAR(200) NULL,
  `SUPPLY_id_supply` INT NULL,
  `PROVIDER_id_provider` INT NOT NULL,
  `EQUIPMENT_id_equipment` INT NULL,
  PRIMARY KEY (`id_shopping`),
  CONSTRAINT `fk_SHOPPING_SUPPLY1`
    FOREIGN KEY (`SUPPLY_id_supply`)
    REFERENCES `water_laboratory`.`SUPPLY` (`id_supply`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SHOPPING_PROVIDER1`
    FOREIGN KEY (`PROVIDER_id_provider`)
    REFERENCES `water_laboratory`.`PROVIDER` (`id_provider`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_SHOPPING_EQUIPMENT1`
    FOREIGN KEY (`EQUIPMENT_id_equipment`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_SHOPPING_SUPPLY1_idx` ON `water_laboratory`.`SHOPPING` (`SUPPLY_id_supply` ASC) VISIBLE;

CREATE INDEX `fk_SHOPPING_PROVIDER1_idx` ON `water_laboratory`.`SHOPPING` (`PROVIDER_id_provider` ASC) VISIBLE;

CREATE INDEX `fk_SHOPPING_EQUIPMENT1_idx` ON `water_laboratory`.`SHOPPING` (`EQUIPMENT_id_equipment` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`ANALYSIS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`ANALYSIS` (
  `id_analysis` INT NOT NULL AUTO_INCREMENT,
  `date_analysis` DATE NOT NULL,
  `cost_analysis` DOUBLE NOT NULL,
  `SAMPLE_id_sample` INT NOT NULL,
  `PACKAGE_id_package` INT NOT NULL,
  `EMPLOYEE_id_employee` INT NOT NULL,
  PRIMARY KEY (`id_analysis`),
  CONSTRAINT `fk_ANALYSIS_SAMPLE1`
    FOREIGN KEY (`SAMPLE_id_sample`)
    REFERENCES `water_laboratory`.`SAMPLE` (`id_sample`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ANALYSIS_PACKAGE1`
    FOREIGN KEY (`PACKAGE_id_package`)
    REFERENCES `water_laboratory`.`PACKAGE` (`id_package`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ANALYSIS_EMPLOYEE1`
    FOREIGN KEY (`EMPLOYEE_id_employee`)
    REFERENCES `water_laboratory`.`EMPLOYEE` (`id_employee`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_ANALYSIS_SAMPLE1_idx` ON `water_laboratory`.`ANALYSIS` (`SAMPLE_id_sample` ASC) VISIBLE;

CREATE INDEX `fk_ANALYSIS_PACKAGE1_idx` ON `water_laboratory`.`ANALYSIS` (`PACKAGE_id_package` ASC) VISIBLE;

CREATE INDEX `fk_ANALYSIS_EMPLOYEE1_idx` ON `water_laboratory`.`ANALYSIS` (`EMPLOYEE_id_employee` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`MAINTENANCE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`MAINTENANCE` (
  `id_maintenance` INT NOT NULL AUTO_INCREMENT,
  `maintenance_date` DATE NOT NULL,
  `maintenance_cost` DOUBLE NOT NULL,
  `EQUIPMENT_id_equipment` INT NOT NULL,
  `PROVIDER_id_provider` INT NOT NULL,
  PRIMARY KEY (`id_maintenance`),
  CONSTRAINT `fk_MAINTENANCE_EQUIPMENT1`
    FOREIGN KEY (`EQUIPMENT_id_equipment`)
    REFERENCES `water_laboratory`.`EQUIPMENT` (`id_equipment`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_MAINTENANCE_PROVIDER1`
    FOREIGN KEY (`PROVIDER_id_provider`)
    REFERENCES `water_laboratory`.`PROVIDER` (`id_provider`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_MAINTENANCE_EQUIPMENT1_idx` ON `water_laboratory`.`MAINTENANCE` (`EQUIPMENT_id_equipment` ASC) VISIBLE;

CREATE INDEX `fk_MAINTENANCE_PROVIDER1_idx` ON `water_laboratory`.`MAINTENANCE` (`PROVIDER_id_provider` ASC) VISIBLE;


-- -----------------------------------------------------
-- Table `water_laboratory`.`PARAMETER_RESULT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `water_laboratory`.`PARAMETER_RESULT` (
  `id_parameter_result` INT NOT NULL AUTO_INCREMENT,
  `result` DOUBLE NOT NULL,
  `ANALYSIS_id_analysis` INT NOT NULL,
  `PARAMENTER_PACKAGE_id_PP` INT NOT NULL,
  PRIMARY KEY (`id_parameter_result`),
  CONSTRAINT `fk_PARAMETER_RESULT_ANALYSIS1`
    FOREIGN KEY (`ANALYSIS_id_analysis`)
    REFERENCES `water_laboratory`.`ANALYSIS` (`id_analysis`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1`
    FOREIGN KEY (`PARAMENTER_PACKAGE_id_PP`)
    REFERENCES `water_laboratory`.`PARAMENTER_PACKAGE` (`id_PP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_PARAMETER_RESULT_ANALYSIS1_idx` ON `water_laboratory`.`PARAMETER_RESULT` (`ANALYSIS_id_analysis` ASC) VISIBLE;

CREATE INDEX `fk_PARAMETER_RESULT_PARAMENTER_PACKAGE1_idx` ON `water_laboratory`.`PARAMETER_RESULT` (`PARAMENTER_PACKAGE_id_PP` ASC) VISIBLE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;