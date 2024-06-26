-- MySQL Script generated by MySQL Workbench
-- Fri May  3 21:16:17 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_parking
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `db_parking` ;

-- -----------------------------------------------------
-- Schema db_parking
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_parking` DEFAULT CHARACTER SET utf8mb4 ;
USE `db_parking` ;

-- -----------------------------------------------------
-- Table `db_parking`.`tb_funcionario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_parking`.`tb_funcionario` ;

CREATE TABLE IF NOT EXISTS `db_parking`.`tb_funcionario` (
  `cd_funcionario` INT NOT NULL AUTO_INCREMENT,
  `nm_funcionario` VARCHAR(100) NOT NULL,
  `nm_email` VARCHAR(255) NOT NULL,
  `cd_senha` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`cd_funcionario`),
  UNIQUE INDEX `nm_email_UNIQUE` (`nm_email` ASC) )
ENGINE = InnoDB
COMMENT = '	\n';


-- -----------------------------------------------------
-- Table `db_parking`.`tb_veiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `db_parking`.`tb_veiculo` ;

CREATE TABLE IF NOT EXISTS `db_parking`.`tb_veiculo` (
  `cd_veiculo` INT NOT NULL AUTO_INCREMENT,
  `cd_placa` VARCHAR(10) NOT NULL,
  `dt_entrada` DATETIME NOT NULL DEFAULT current_timestamp,
  `dt_saida` DATETIME NULL,
  `id_funcionario_entrada` INT NOT NULL,
  `id_funcionario_saida` INT NULL,
  PRIMARY KEY (`cd_veiculo`),
  INDEX `fk_tb_veiculo_tb_funcionario_idx` (`id_funcionario_entrada` ASC) ,
  INDEX `fk_tb_veiculo_tb_funcionario1_idx` (`id_funcionario_saida` ASC) ,
  CONSTRAINT `fk_tb_veiculo_tb_funcionario`
    FOREIGN KEY (`id_funcionario_entrada`)
    REFERENCES `db_parking`.`tb_funcionario` (`cd_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_veiculo_tb_funcionario1`
    FOREIGN KEY (`id_funcionario_saida`)
    REFERENCES `db_parking`.`tb_funcionario` (`cd_funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

insert into tb_funcionario values (null, 'Lucas Leme', 'lucas@gmail.com', '$2y$10$XjGsn8BkK4EFCI.mwMdVP.CbMw99LSTKqYcOV02AkM8Mavn3DEUli')
