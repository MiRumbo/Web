-- INSERT INTO `mi_rumbo`.`users` (`email`, `dni`) VALUES ('mau+1@mail.com', '114740899');
-- INSERT INTO `mi_rumbo`.`users` (`email`, `dni`) VALUES ('mau+2@mail.com', '124740899');
-- INSERT INTO `mi_rumbo`.`users` (`email`, `dni`) VALUES ('mau+3@mail.com', '134740899');

-- MISCELLANEOUS

-- Categories
INSERT INTO `mi_rumbo`.`categories` (`category`) VALUES ('Obras y servicios');
INSERT INTO `mi_rumbo`.`categories` (`category`) VALUES ('Equipamiento');
INSERT INTO `mi_rumbo`.`categories` (`category`) VALUES ('Infraestructura urbana');
INSERT INTO `mi_rumbo`.`categories` (`category`) VALUES ('Prevención del delito');
INSERT INTO `mi_rumbo`.`categories` (`category`) VALUES ('Actividades recreativas, deportivas y culturales');

-- States
INSERT INTO `mi_rumbo`.`states` (`state`) VALUES ('México D.F.');

-- City Halls
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Miguel Hidalgo', 1);
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Cuauhtémoc', 1);
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Venustiano Carranza', 1);
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Coyoacán', 1);
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Iztapalapa', 1);
INSERT INTO `mi_rumbo`.`city_halls` (`city_hall`, `state_id`) VALUES ('Milpa Alta', 1);

-- Disctricts
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('Lomas de Chapultepec ', 1);
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('Condesa ', 2);
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('Federal ', 3);
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('Carmen Serdán ', 4);
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('Santa Cruz Meyehualco ', 5);
INSERT INTO `mi_rumbo`.`districts` (`district`, `city_hall_id`) VALUES ('San Salvador Cuauhtenco ', 6);

-- Projects' statuses
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('Sin aprobación');
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('Propuesta');
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('Votación');
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('Ejecución');
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('No ganador');
INSERT INTO `mi_rumbo`.`projects_statuses` (`status`) VALUES ('Finalizado');

-- Roles
INSERT INTO `mi_rumbo`.`roles` (`rol`) VALUES ('admin');
INSERT INTO `mi_rumbo`.`roles` (`rol`) VALUES ('moderator');
INSERT INTO `mi_rumbo`.`roles` (`rol`) VALUES ('citizen');