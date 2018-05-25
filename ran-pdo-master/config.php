<?php

/**
 * Configuration for database connection
 *
 */

$host       = "localhost";
$username   = "mysql";
$password   = "";
$dbname     = "test";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
              
              

/** Configuration for connecting phpmyadmin to an external Amazon/Alibaba Cloud RDS instance
 *
 *	
 
$host       = "RDS-Endpoint";
$username   = "<User-Name/Initial-Account-Details>";  
$password   = "<Account-Password (controlled authorized database at RDS Instance>";
$dbname     = "ran-pdo";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
              
*/