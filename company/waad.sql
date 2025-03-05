

CREATE TABLE `departments`(
id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
`name` VARCHAR(255) NOT NULL
);


CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) -- ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci


ALTER TABLE users ADD COLUMN dept_id INT(10);

ALTER TABLE users ADD CONSTRAINT fk_deptid FOREIGN KEY (dept_id) references departments(id);

ALTER TABLE `users` ADD UNIQUE(`username`);