ALTER TABLE `mi_rumbo`.`roles` 
CHANGE COLUMN `rol` `role` VARCHAR(45) NOT NULL ;

ALTER TABLE `mi_rumbo`.`roles_users` 
DROP FOREIGN KEY `fk_roles_users_roles`;
ALTER TABLE `mi_rumbo`.`roles_users` 
CHANGE COLUMN `rol_id` `role_id` INT(11) NOT NULL ;
ALTER TABLE `mi_rumbo`.`roles_users` 
ADD CONSTRAINT `fk_roles_users_roles`
  FOREIGN KEY (`role_id`)
  REFERENCES `mi_rumbo`.`roles` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;