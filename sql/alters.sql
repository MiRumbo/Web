ALTER TABLE `mi_rumbo`.`users` 
ADD COLUMN `remember_token` VARCHAR(100) NULL AFTER `password`;

ALTER TABLE `mi_rumbo`.`users` 
CHANGE COLUMN `password` `password` VARCHAR(255) NOT NULL ;

ALTER TABLE `mi_rumbo`.`projects` 
CHANGE COLUMN `created_at` `created_at` DATETIME NOT NULL DEFAULT now() ,
CHANGE COLUMN `goals` `solution` TEXT NOT NULL ,
CHANGE COLUMN `updated_at` `updated_at` DATETIME NOT NULL DEFAULT now() ,
ADD COLUMN `beneficiaries` TEXT NULL AFTER `updated_at`;

ALTER TABLE `mi_rumbo`.`projects` 
CHANGE COLUMN `description` `problem` TEXT NOT NULL ,
CHANGE COLUMN `solution` `solution` TEXT NULL ;

ALTER TABLE `mi_rumbo`.`projects` 
DROP FOREIGN KEY `fk_proyectos_project_status1`;
ALTER TABLE `mi_rumbo`.`projects` 
CHANGE COLUMN `project_status_id` `project_status_id` INT(11) NOT NULL DEFAULT 2 ;
ALTER TABLE `mi_rumbo`.`projects` 
ADD CONSTRAINT `fk_proyectos_project_status1`
  FOREIGN KEY (`project_status_id`)
  REFERENCES `mi_rumbo`.`projects_statuses` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
