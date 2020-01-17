<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "webdev-periode4";

$connection = new mysqli($servername, $username, $password, $database);

if(!$connection->connect_error){
}
else{
    die("Connection failed: ".$connection->connect_error);
}

?>