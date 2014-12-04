ALTER TABLE `mi_rumbo`.`projects_media` 
ADD COLUMN `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `resource`,
ADD COLUMN `updated_at` DATETIME NULL AFTER `created_at`;
