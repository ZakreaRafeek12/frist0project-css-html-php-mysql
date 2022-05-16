
<?php

$username = "root"; 
$password = "";     
$database = new PDO("mysql:host=localhost;dbname=book;charset=utf8;",$username,$password);

$addData = $database->prepare("SELECT * FROM bookdata");
$addData->execute();

foreach($addData AS $result){
echo "<h3>" . $result['BName'] . "</h3>";  
echo "<h3>" . $result['BNo'] . "</h3>";
echo "<h3>" . $result['Bpage'] . "</h3>";
echo "<h3>" . $result['price'] . "</h3>";
};
?>

