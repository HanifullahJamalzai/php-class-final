<?php

$db = mysqli_connect("localhost", "root", "", "php_final");

if(!$db){
    echo "You are Not Connected with DB";
}

// This file include authentication
include_once "auth.php";



?>