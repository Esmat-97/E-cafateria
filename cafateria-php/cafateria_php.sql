use cafateria_php;

select * from MyGuests ;
select * from products;
select * from orders;

 -- SET SQL_SAFE_UPDATES = 0;
--  delete from  products;

drop table orders;


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


CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    order_date datetime,
     status enum('accepted','pending') default 'pending',
	product_name  varchar(50) ,
    guests_id INT NOT NULL,
    FOREIGN KEY (guests_id) REFERENCES MyGuests (guests_id),
     FOREIGN KEY (product_name) REFERENCES products (product_name)
);

INSERT INTO orders (order_date,product_name,guests_id)
                  VALUES ('2024-03-23 10:00:00','tea','1');
UPDATE MyGuests
SET role = 'admin'
WHERE guests_id = 1;

