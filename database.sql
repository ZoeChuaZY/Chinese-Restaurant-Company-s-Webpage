-- Creating the database
CREATE DATABASE eatlemou CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Creating tables
USE eatlemou;

CREATE TABLE users (
u_id INT(10) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
icno VARCHAR(12),
dob DATE,
phoneno VARCHAR(10),
email VARCHAR(60),
username VARCHAR(20),
password VARCHAR(20),
bankcard VARCHAR(16),
role VARCHAR(3) DEFAULT 'CUS'
);

CREATE TABLE menu (
f_id INT(10) AUTO_INCREMENT PRIMARY KEY,
foodname VARCHAR(50),
category VARCHAR(10),
description VARCHAR(255),
price DOUBLE PRECISION(4,2),
image BLOB
);

CREATE TABLE orders (
o_id INT(50) AUTO_INCREMENT PRIMARY KEY,
c_id INT(10),
total DOUBLE PRECISION(5,2),
order_status VARCHAR(20) DEFAULT 'Pending',
FOREIGN KEY (c_id) REFERENCES customers(c_id)
);

CREATE TABLE orderdetails (
od_id INT(50) AUTO_INCREMENT PRIMARY KEY,
o_id INT(50),
f_id INT(10),
quantity INT(2),
FOREIGN KEY (o_id) REFERENCES orders(o_id),
FOREIGN KEY (f_id) REFERENCES menu(f_id)
);

CREATE TABLE feedback (
feedback_id INT(50) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
phoneno VARCHAR(11),
email VARCHAR(60),
enquiry TEXT,
branchname VARCHAR(50),
details TEXT,
FOREIGN KEY (branchname) REFERENCES branches(name)
);

CREATE TABLE branches (
branch_id INT(5) PRIMARY KEY,
state VARCHAR(50),
name VARCHAR(50),
address VARCHAR(255),
contactno VARCHAR(10)
);

CREATE TABLE booking (
book_id INT AUTO_INCREMENT PRIMARY KEY,
c_id INT(10),
no_of_guest INT(5),
branch_id INT(50),
bookdate DATE,
booktime TIME,
booktype TEXT,
bookbranch TEXT,
note TEXT,
FOREIGN KEY (c_id) REFERENCES customers(c_id),
FOREIGN KEY (branch_id) REFERENCES branches(branch_id)
);

CREATE TABLE vouchers (
    voucher_id INT AUTO_INCREMENT PRIMARY KEY,
    voucher_code VARCHAR(20) UNIQUE,
    value DECIMAL(10, 2),
    expiration_date DATE,
    is_used TINYINT(1) DEFAULT 0,
    customer_id INT,
    voucher_image BLOB,
    FOREIGN KEY (customer_id) REFERENCES customers(c_id)
);

CREATE TABLE payment (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    c_id INT,
    o_id INT,
    total DOUBLE(5,2),
    FOREIGN KEY (o_id) REFERENCES orders(o_id)
);