SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
-- -------------
-- Tạo database:
-- -------------
CREATE DATABASE IF NOT EXISTS database_ndmanh;
USE database_ndmanh;
-- -------------
-- tạo các bảng:
-- -------------
-- tạo bảng salaries
DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries`(
`emp_no` INT(10) NOT NULL AUTO_INCREMENT,
`salary` INT(11) NOT NULL,
`from_date` DATE NULL,
`to_date` DATE NULL,
PRIMARY KEY(`emp_no`) using BTREE
)ENGINE = InnoDB;
-- tạo bảng titles
DROP TABLE IF EXISTS titles;
CREATE TABLE titles(emp_no int(10) NOT NULL AUTO_INCREMENT,
title varchar(50) NULL,
from_date date NULL,
to_date date NULL,
PRIMARY KEY(emp_no) using BTREE
)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
-- tạo bảng employees
DROP TABLE IF EXISTS employees;
CREATE TABLE employees(emp_no int(10) AUTO_INCREMENT NOT NULL,
birth_date DATE NULL,
first_name varchar(14) NULL,
last_name varchar(16) NULL,
gender int(10) NOT NULL,
hire_date date NULL,
PRIMARY KEY(emp_no) using BTREE
)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
-- tạo bảng dept_manager
DROP TABLE IF EXISTS dept_manager;
CREATE TABLE dept_manager(dept_no char(4) NOT NULL,
emp_no int(10) NOT NULL,
from_date date NULL,
to_date date NULL,
PRIMARY KEY(dept_no) using BTREE
)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
-- tạo bảng dept_emp
DROP TABLE IF EXISTS dept_emp;
CREATE TABLE dept_emp(emp_no int(10) AUTO_INCREMENT NOT NULL,
dept_no char(4) NOT NULL,
from_date date NULL,
to_date date NULL,
PRIMARY KEY(emp_no) using BTREE
)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
-- tạo bảng departments
DROP TABLE IF EXISTS departments;
CREATE TABLE departments(dept_no char(4) NOT NULL,
dept_name varchar(4) NULL,
PRIMARY KEY(dept_no) using BTREE
)ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;
SET FOREIGN_KEY_CHECKS = 1;