USE db_darwin;

CREATE TABLE IF NOT EXISTS ft_table (
	id INT AUTO_INCREMENT PRIMARY KEY,
	login VARCHAR (255) DEFAULT 'toto' NOT NULL,
	`group` ENUM('staff', 'student', 'other') NOT NULL,
	creation_date DATE NOT NULL
);
