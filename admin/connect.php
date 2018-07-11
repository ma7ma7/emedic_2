<?php

$dsn = "mysql:host:localhost;dbname=emedic";
$usr = "root";
$pwd = "";
$opt = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);

try{
    $con = new PDO($dsn, $usr, $pwd, $opt);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Failed Connection" . $e->getMessage();  
}