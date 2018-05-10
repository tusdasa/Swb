<?php
session_start();
if (isset($_GET["username"]) && isset($_GET["password"]) && isset($_GET["new_password"])){
    if (isset($_SESSION["user"])!=TRUE){
        die("Please Log In");
    }
    $username= $_GET["username"];
    $pass= $_GET["password"];
    $new_pass= $_GET["new_password"];
    //$_SERVER['HTTP_REFERER']
    if (strcmp($pass, $new_pass)==0){
        echo $username.", Your password has been revised successfully";
        
    }else {
        echo $username.", password change unsuccessful";
    }
   
}