ALTER TABLE `mi_rumbo`.`roles_users` 
ADD COLUMN `created_at` DATETIME NOT NULL AFTER `user_id`,
ADD COLUMN `updated_at` DATETIME NOT NULL AFTER `created_at`;

ALTER TABLE `mi_rumbo`.`roles_users` 
DROP FOREIGN KEY `fk_roles_users_roles`;
ALTER TABLE `mi_rumbo`.`roles_users` 
CHANGE COLUMN `role_id` `rol_id` INT(11) NOT NULL ;
ALTER TABLE `mi_rumbo`.`roles_users` 
ADD CONSTRAINT `fk_roles_users_roles`
  FOREIGN KEY (`rol_id`)
  REFERENCES `mi_rumbo`.`roles` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
  
ALTER TABLE `mi_rumbo`.`projects` 
ADD COLUMN `cost` DECIMAL NULL AFTER `beneficiaries`;

ALTER TABLE `mi_rumbo`.`projects_cateories` 
RENAME TO  `mi_rumbo`.`projects_categories` ;

ALTER TABLE `mi_rumbo`.`projects_categories` 
ADD COLUMN `created_at` DATETIME NOT NULL AFTER `category_id`,
ADD COLUMN `updated_at` DATETIME NOT NULL AFTER `created_at`;