<?php

$username = "root"; 
$password = "";     
$database = new PDO("mysql:host=localhost;dbname=book;charset=utf8;",$username,$password);

$addData = $database->prepare("SELECT * FROM bookdata WHERE BName = ahmed");
$addData = $addData->fetch(PDO::FETCH_ASSOC);



?>