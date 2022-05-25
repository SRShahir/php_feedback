<?php
define('DB_HOST','localhost');
define('DB_USER','shahir');
define('DB_PASS','12345');
define('DB_NAME','php_dev');

//Create Collection
$conn=new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check the connection
if($conn->connect_error){
    die('Connecction Failed'.$conn->connect_error);
}