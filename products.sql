-- products.sql
CREATE TABLE `products` (
    `product_id` INT AUTO_INCREMENT PRIMARY KEY,
    `product_name` VARCHAR(255) NOT NULL,
    `product_description` TEXT
);
-- Insert sample product data
INSERT INTO `products` (`product_name`, `product_description`)
VALUES
    ('Product A', 'Description for Product A'),
    ('Product B', 'Description for Product B');
