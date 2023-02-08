# learning-app
a site for polytechnic students to access thier study materials
create a database jagan in localhost and create a table using the following sql query

CREATE TABLE `students` (
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `branch` varchar(10) NOT NULL,
 `sem` varchar(2) NOT NULL,
 `dob` date NOT NULL,
 PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
