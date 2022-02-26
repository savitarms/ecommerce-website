<?php 

$connect = new PDO("mysql:host=localhost;dbname=savstore", "root", "");

if(!$connect){
    die("erro".mysqli_connect_error());
}

?>