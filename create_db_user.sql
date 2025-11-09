-- Create database user for Pharmacist Evolve
-- Run this manually: mysql -u root -p < create_db_user.sql

CREATE DATABASE IF NOT EXISTS poimendb;
CREATE USER IF NOT EXISTS 'pharmacist'@'localhost' IDENTIFIED BY 'PharmacistPass2024!';
GRANT ALL PRIVILEGES ON poimendb.* TO 'pharmacist'@'localhost';
FLUSH PRIVILEGES;

SELECT 'Database user created successfully!' AS status;
