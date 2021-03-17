<?php
    include("./connect_db.php");

    include("./functions.php");

    $burgerservicenummer = sanitize($_POST["burgerservicenummer"]);
    $email = sanitize($_POST["email"]);
    $phonenumber = sanitize($_POST["phonenumber"]);
    $firstname = sanitize($_POST["firstname"]);
    $infix = sanitize($_POST["infix"]);
    $lastname = sanitize($_POST["lastname"]);
    $password = sanitize($_POST["password"]);
    $gander = sanitize($_POST["gander"]);
    $date_of_birth = sanitize($_POST["date_of_birth"]);



    // Dit is de sql-query die de ingevulde gegevens wegschrijft naar de tabel users

    $sql = "INSERT INTO `project` (`id`, `burgerservicenummer`, `email`, `phonenumber`, `firstname`, `infix`, `lastname`, `password`,`gander`, `date_of_birth`) 
    VALUES (NULL, '$burgerservicenummer', '$email', '$phonenumber', '$firstname', '$infix', '$lastname', '$password', '$gander', '$date_of_birth');";

    //Dit is de functie die de query $sql via de verbinding $conn naar de datebase stuurt.
    mysqli_query($conn, $sql);

    header("Location: ./read.php");

?>

