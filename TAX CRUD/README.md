
Create a table named *calculator_tax* inside phpmyadmin

```sql
-- Create the database
CREATE DATABASE calculator_tax;

-- Switch to the newly created database
USE calculator_tax;

-- Create the 'rates' table
CREATE TABLE rates (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50),
  value FLOAT
);

-- Insert data into the 'rates' table
INSERT INTO rates (name, value) VALUES
  ('CGT', 0.06),
  ('VAT', 0.12),
  ('VAT_GROSS', 112 / 100);

-- Create the 'philhealth_variables' table
CREATE TABLE philhealth_variables (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50),
  value FLOAT
);

-- Insert data into the 'philhealth_variables' table
INSERT INTO philhealth_variables (name, value) VALUES
  ('FLOOR', 10000),
  ('CEILING', 80000),
  ('RATE', 0.04);

-- Create the 'pagibig_variables' table
CREATE TABLE pagibig_variables (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50),
  value FLOAT
);

-- Insert data into the 'pagibig_variables' table
INSERT INTO pagibig_variables (name, value) VALUES
  ('FLOOR', 1500),
  ('CEILING', 5000),
  ('RATE_MIN', 0.01),
  ('RATE_MAX', 0.02);

-- Create the 'sss_variables' table
CREATE TABLE sss_variables (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50),
  value FLOAT
);

-- Insert data into the 'sss_variables' table
INSERT INTO sss_variables (name, value) VALUES
  ('FLOOR', 4249.99),
  ('CEILING', 4750),
  ('REGULAR_MIN', 180),
  ('REGULAR_MAX', 900),
  ('REGULAR_CUTOFF', 19750),
  ('MPF_MIN', 22.5),
  ('MPF_MAX', 450),
  ('MPF_CUTOFF', 29750),
  ('RANGE', 500),
  ('INCREASE', 22.5);
```

admin: karl@mail.com
password: 123

user: kyle@mail.com  
password: 123
