-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mi_rumbo
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mi_rumbo
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mi_rumbo` DEFAULT CHARACTER SET latin1 ;
USE `mi_rumbo` ;

-- -----------------------------------------------------
-- Table `mi_rumbo`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`users` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `dni` VARCHAR(50) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`roles` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `rol_UNIQUE` (`rol` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`roles_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`roles_users` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`roles_users` (
  `role_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  INDEX `fk_roles_users_roles_idx` (`role_id` ASC),
  INDEX `fk_roles_users_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_roles_users_roles`
    FOREIGN KEY (`role_id`)
    REFERENCES `mi_rumbo`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_roles_users_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`city_halls`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`city_halls` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`city_halls` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`districts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`districts` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`districts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `city_hall_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_districts_city_halls1_idx` (`city_hall_id` ASC),
  CONSTRAINT `fk_districts_city_halls1`
    FOREIGN KEY (`city_hall_id`)
    REFERENCES `mi_rumbo`.`city_halls` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects_status`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_status` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_status` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `status_UNIQUE` (`status` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects` (
  `id` INT NOT NULL,
  `title` VARCHAR(200) NOT NULL,
  `description` TEXT NOT NULL,
  `latitude` VARCHAR(45) NULL,
  `longitude` VARCHAR(45) NULL,
  `location_display` VARCHAR(200) NULL,
  `district_id` INT NOT NULL,
  `promoter` VARCHAR(100) NULL,
  `projects_status_id` INT NOT NULL,
  `user_id` INT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proyectos_districts1_idx` (`district_id` ASC),
  INDEX `fk_proyectos_projects_status1_idx` (`projects_status_id` ASC),
  INDEX `fk_projects_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_proyectos_districts1`
    FOREIGN KEY (`district_id`)
    REFERENCES `mi_rumbo`.`districts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectos_projects_status1`
    FOREIGN KEY (`projects_status_id`)
    REFERENCES `mi_rumbo`.`projects_status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects_media`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_media` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_media` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` ENUM('image', 'link_video', 'link') NOT NULL,
  `project_id` INT NOT NULL,
  `resource` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_projects_media_projects1_idx` (`project_id` ASC),
  CONSTRAINT `fk_projects_media_projects1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`categories` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `category_UNIQUE` (`category` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects_cateories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_cateories` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_cateories` (
  `projects_id` INT NOT NULL,
  `categories_id` INT NOT NULL,
  INDEX `fk_projects_cateories_projects1_idx` (`projects_id` ASC),
  INDEX `fk_projects_cateories_categories1_idx` (`categories_id` ASC),
  CONSTRAINT `fk_projects_cateories_projects1`
    FOREIGN KEY (`projects_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_cateories_categories1`
    FOREIGN KEY (`categories_id`)
    REFERENCES `mi_rumbo`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
