CREATE DATABASE australian_grocery_db;
USE australian_grocery_db;

CREATE TABLE grocery_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(150) NOT NULL,
    brand_name VARCHAR(100) NOT NULL,
    category VARCHAR(80) NOT NULL,
    country_of_origin VARCHAR(60) NOT NULL DEFAULT 'Australia',
    price DECIMAL(10,2) NOT NULL,
    stock_quantity INT NOT NULL DEFAULT 0,
    expiry_date DATE NULL
);