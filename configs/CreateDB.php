<?php


function initializeDB()
{
    $config = require("config.php");

    $con = mysqli_connect($config['host'], $config['username'], $config['password']);
    
    
    
    $stmt = mysqli_prepare($con, 'DROP DATABASE IF EXISTS Hw4DB');
    mysqli_stmt_execute($stmt);

    $stmt = mysqli_prepare($con,'CREATE DATABASE Hw4DB;' );
    mysqli_stmt_execute($stmt);

    mysqli_select_db($con,"Hw4DB");

    //Create data table
     $stmt = mysqli_prepare($con,'DROP TABLE IF EXISTS CHARTDATA;');
    mysqli_stmt_execute($stmt);

    $stmt = mysqli_prepare($con, 'CREATE TABLE CHARTDATA 
        (ID INT AUTO_INCREMENT,
        HASH VARCHAR(100) ,
        TITLE VARCHAR(50),
        DATA  VARCHAR(500),
         PRIMARY KEY (ID));');
    
     mysqli_stmt_execute($stmt);
    
   

    $stmt->close();
    
    $con->close();

    echo ("Database Successfully Initialized. Be sure to change check mysql login is correct.");
}


initializeDB();
