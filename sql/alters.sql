ALTER TABLE `mi_rumbo`.`users` 
ADD COLUMN `remember_token` VARCHAR(100) NULL AFTER `password`;

ALTER TABLE `mi_rumbo`.`users` 
CHANGE COLUMN `password` `password` VARCHAR(255) NOT NULL ;