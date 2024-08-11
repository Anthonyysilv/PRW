--Drop database with same name
DROP DATABASE IF EXISTS PHPCHATAPP_DB;
-- Create database if not exists
CREATE DATABASE IF NOT EXISTS PHPCHATAPP_DB;
-- Use database
USE PHPCHATAPP_DB;
-- Create table users
CREATE TABLE IF NOT EXISTS users (
    user_id INT(11) AUTO_INCREMENT PRIMARY KEY,
    unique_id VARCHAR(255),
    fname VARCHAR(255),
    lname VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    status VARCHAR(255)
);
-- Create table messages
CREATE TABLE IF NOT EXISTS messages (
	msg_id	INT(11) PRIMARY KEY AUTO_INCREMENT,
    incoming_msg_id VARCHAR(255),
    outgoing_msg_id VARCHAR(255),
    msg VARCHAR(255)
);