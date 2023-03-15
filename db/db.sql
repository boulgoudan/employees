USE `employees`;

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_director` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `employees` (firstname, lastname, is_director) VALUES ('fn1','ln1',0),('fn2','ln2',0),('fn3','ln3',1);
