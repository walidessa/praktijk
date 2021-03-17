<?php
// maak contact met de mysqlserver en database
include ("./connect_db.php");

$id = $_POST["id"];
$burgerservicenummer = $_POST["burgerservicenummer"];
$email = $_POST["email"];
$phonenumber = $_POST["phonenumber"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$gander = $_POST["gander"];
$date_of_birth = $_POST["date_of_birth"];


$sql = "UPDATE `project` 
        SET `burgerservicenummer` = '$burgerservicenummer',
        `email` = '$email', 
        `phonenumber` = '$phonenumber', 
        `firstname` = '$firstname', 
        `infix` = '$infix', 
        `lastname` = '$lastname',
        `password` = '$password',
        `gander` = '$gander',
        `date_of_birth` = '$date_of_birth'
        WHERE `project`.`id` = $id;";

// echo $sql;exit();

mysqli_query($conn, $sql);

header("Location: ./read.php");
?>