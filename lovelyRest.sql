CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO categories (name) values ('pastries');

CREATE TABLE IF NOT EXISTS `meals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `size` enum('M','S','F') DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `category-id` int,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`category-id`) REFERENCES categories (id)
) ;

INSERT INTO `meals` (name, `price`, `size`, `note`, `category-id`) VALUES
	( 'pitza', 5000, 'S', 'with mashroom' ,1),
	( 'hambreger', 7000, 'M', 'two person',1),
	( 'hotdog', 10000, 'F', 'with hot',1);

