<?php
if(isset($_REQUEST['firstName']) and isset($_REQUEST['lastName']) and  isset($_REQUEST['birthYear']) and isset($_REQUEST['countryList']) and isset($_REQUEST['infected']) ){
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
    $birthYear = $_REQUEST['birthYear'];
    $country_id = $_REQUEST['countryList'];
    $infected = $_REQUEST['infected'];

    require "connection/connection.php";
    $query = "INSERT INTO patients(`country_id`, `first_name`, `last_name`, `birth_year`, `infected`) VALUES ('".$country_id."', '".$firstName."', '" .$lastName. "', '" .$birthYear."', '" .$infected. "');";
    $result = mysqli_query($connection, $query);
    header("Location: addPerson.php");
} else{
    setcookie("notification", "Add person failed.", time() + 3600*24, "/");
    header("Location: addPerson.php");
}