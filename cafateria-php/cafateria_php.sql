use cafateria_php;

select * from MyGuests ;
select * from products;

 -- SET SQL_SAFE_UPDATES = 0;
--  delete from  products;

drop table Admins;


CREATE TABLE MyGuests (
   guests_id INT AUTO_INCREMENT PRIMARY KEY ,
    firstName VARCHAR(30),
    lastName VARCHAR(30),
    email VARCHAR(50)  ,
    password VARCHAR(50),
     role enum('admin','customer') default 'customer',
    reg_date DATETIME
);




CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) unique,
    price DECIMAL(10, 2),
    stock_quantity INT,
    image VARCHAR(255) ,
  reg_date DATETIME,
  guests_id INT,
  FOREIGN KEY (guests_id) REFERENCES MyGuests (guests_id)

);

UPDATE MyGuests
SET role = 'admin'
WHERE guests_id = 1;

