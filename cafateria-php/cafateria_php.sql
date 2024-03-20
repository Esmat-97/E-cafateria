use cafateria_php;
select * from  MyGuests;

-- SET SQL_SAFE_UPDATES = 0;
-- delete from  MyGuests;


drop table MyGuests;


CREATE TABLE MyGuests (
    id INT AUTO_INCREMENT ,
    firstName VARCHAR(30),
    lastName VARCHAR(30),
    email VARCHAR(50) PRIMARY KEY ,
    password VARCHAR(50),
     role enum('admin','customer'),
    reg_date DATETIME
);


CREATE TABLE Admins (
    id INT AUTO_INCREMENT ,
    firstName VARCHAR(30),
    lastName VARCHAR(30),
    email VARCHAR(50) PRIMARY KEY ,
    password VARCHAR(50),
     role enum('admin','customer'),
    reg_date DATETIME
);


INSERT INTO MyGuests (firstName, lastName, email, password, role, reg_date)
VALUES ('John', 'Doe', 'john@example.com', 'password123', 'customer', NOW());
