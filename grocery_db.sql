-- Create database
CREATE DATABASE IF NOT EXISTS grocery_db;
USE grocery_db;

-- Create Grocery Items table
CREATE TABLE IF NOT EXISTS grocery_items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL,
    expiration_date DATE
);

-- Insert records into Grocery Items table
INSERT INTO grocery_items (item_name, category, price, quantity, expiration_date) VALUES
('Apple', 'Fruits', 0.50, 100, '2025-11-15'),
('Banana', 'Fruits', 0.30, 150, '2025-11-10'),
('Milk', 'Dairy', 1.20, 50, '2025-10-30'),
('Bread', 'Bakery', 1.00, 40, '2025-10-28'),
('Eggs', 'Dairy', 2.50, 200, '2025-11-05');
