DROP DATABASE IF EXISTS Booking;
CREATE DATABASE IF NOT EXISTS ;
USE Booking;

DROP TABLE IF EXISTS Users;
CREATE TABLE IF NOT EXISTS Users( 
 
    userId int not null primary key AUTO_INCREMENT,
    Full_Name varchar(25),
    email varchar(60),
    phone_Number varchar(60),
    User_Name varchar(60),
    Password varchar(60)
);