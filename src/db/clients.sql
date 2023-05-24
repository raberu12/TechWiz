CREATE TABLE clients (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (100) NOT NULL,
    email VARCHAR (200) NOT NULL UNIQUE,
    phone VARCHAR(20) NULL,
    address VARCHAR(200) NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP   

);

INSERT INTO clients (name, email, phone, address)
VALUES
('Bill', 'Gates@microsoft.com', '+123456789', 'USA'),
('Bob', 'Marley@gmail.com', '+123456789', 'USA'),
('Will', 'Willmail@ymail.com', '+123456789', 'USA'),
('Lebron', 'Lemail@yahoo.com', '+123456789', 'USA'),
('Rose', 's@gmail.com', '+123456789', 'USA'),
('Derick', 'd@gmail.com', '+123456789', 'USA');