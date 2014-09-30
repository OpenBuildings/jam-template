DROP TABLE IF EXISTS `Test`;
CREATE TABLE `Test` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `TestModel` (`id`, `name`)
VALUES
  (1, 'Test');
