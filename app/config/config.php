<?php
    // Database params
    define('DB_HOST', 'Localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'denmoda');
    // // APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));
    // // URLROOT dynamics links
    // define('URLROOT', 'http://denmoda.test');
    define('URLROOT', 'http://localhost:8080/denmoda');
    // // SITENAME
    define('SITENAME', 'DenModa');

    // $server = "localhost";
    // $username = "root";
    // $password = ""; 
    // $dbname = "denmoda";

    // try{
    //     $connect = new PDO("mysql:host=$server;dbname=$dbname","$username","$password");
    //     $connect -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // }catch (PDOException $e) {
    //     die("Failed to connect with the database");
    // }


?>