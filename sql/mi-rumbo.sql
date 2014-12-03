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
-- Table `mi_rumbo`.`states`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`states` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`states` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `state` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`city_halls`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`city_halls` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`city_halls` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `city_hall` VARCHAR(100) NOT NULL,
  `state_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_city_halls_state1_idx` (`state_id` ASC),
  CONSTRAINT `fk_city_halls_state1`
    FOREIGN KEY (`state_id`)
    REFERENCES `mi_rumbo`.`states` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`districts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`districts` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`districts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `district` VARCHAR(100) NOT NULL,
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
-- Table `mi_rumbo`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`users` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `dni` VARCHAR(50) NULL,
  `name` VARCHAR(100) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `district_id` INT NOT NULL,
  `updated_at` DATETIME NOT NULL,
  `password` BINARY(60) NOT NULL,
  `remember_token` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `dni_UNIQUE` (`dni` ASC),
  INDEX `fk_users_districts1_idx` (`district_id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `fk_users_districts1`
    FOREIGN KEY (`district_id`)
    REFERENCES `mi_rumbo`.`districts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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
-- Table `mi_rumbo`.`projects_statuses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_statuses` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_statuses` (
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
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(200) NOT NULL,
  `problem` TEXT NOT NULL,
  `latitude` VARCHAR(45) NULL,
  `longitude` VARCHAR(45) NULL,
  `address` VARCHAR(200) NULL,
  `district_id` INT NOT NULL,
  `project_status_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` DATETIME NULL,
  `solution` TEXT NULL,
  `beneficiaries` TEXT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_proyectos_districts1_idx` (`district_id` ASC),
  INDEX `fk_proyectos_project_status1_idx` (`project_status_id` ASC),
  INDEX `fk_projects_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_proyectos_districts1`
    FOREIGN KEY (`district_id`)
    REFERENCES `mi_rumbo`.`districts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyectos_project_status1`
    FOREIGN KEY (`project_status_id`)
    REFERENCES `mi_rumbo`.`projects_statuses` (`id`)
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
  `project_id` INT NOT NULL,
  `category_id` INT NOT NULL,
  INDEX `fk_projects_cateories_projects1_idx` (`project_id` ASC),
  INDEX `fk_projects_cateories_categories1_idx` (`category_id` ASC),
  CONSTRAINT `fk_projects_cateories_projects1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_cateories_categories1`
    FOREIGN KEY (`category_id`)
    REFERENCES `mi_rumbo`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`comments`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`comments` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`comments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` TEXT NOT NULL,
  `project_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comments_projects1_idx` (`project_id` ASC),
  CONSTRAINT `fk_comments_projects1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects_editors`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_editors` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_editors` (
  `user_id` INT NOT NULL,
  `project_id` INT NOT NULL,
  INDEX `fk_table1_users1_idx` (`user_id` ASC),
  INDEX `fk_table1_projects1_idx` (`project_id` ASC),
  CONSTRAINT `fk_table1_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_projects1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`contacts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`contacts` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`contacts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type` ENUM('email','tel','facebook') NOT NULL,
  `contact` VARCHAR(200) NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_contacts_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_contacts_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`projects_followers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`projects_followers` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`projects_followers` (
  `user_id` INT NOT NULL,
  `project_id` INT NOT NULL,
  INDEX `fk_projects_followers_users1_idx` (`user_id` ASC),
  INDEX `fk_projects_followers_projects1_idx` (`project_id` ASC),
  CONSTRAINT `fk_projects_followers_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_projects_followers_projects1`
    FOREIGN KEY (`project_id`)
    REFERENCES `mi_rumbo`.`projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mi_rumbo`.`districts_followers`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mi_rumbo`.`districts_followers` ;

CREATE TABLE IF NOT EXISTS `mi_rumbo`.`districts_followers` (
  `users_id` INT NOT NULL,
  `districts_id` INT NOT NULL,
  INDEX `fk_districts_followers_users1_idx` (`users_id` ASC),
  INDEX `fk_districts_followers_districts1_idx` (`districts_id` ASC),
  CONSTRAINT `fk_districts_followers_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `mi_rumbo`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_districts_followers_districts1`
    FOREIGN KEY (`districts_id`)
    REFERENCES `mi_rumbo`.`districts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
