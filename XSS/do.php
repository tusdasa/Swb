<?php
session_start();
if (isset($_SESSION["user"])!=TRUE){
    die("Please Log In");
}
if(isset($_POST["username"]) && isset($_POST["title"])&& isset($_POST["message"])){
    
    $username=$_POST["username"];
    //$username=htmlspecialchars($username);
    $title=$_POST["title"];
    //$title=htmlspecialchars($title);
    $message=$_POST["message"];
    //$message=htmlspecialchars($message);
    
    echo "<html>";
    echo "<head>";
    echo "<meta charset='utf-8'>";
    echo "<body>";
    echo "<table>";
    echo "<thead>Message:</thead>";
    echo "<tr>";
    echo "<td >";
    echo "Username";
    echo "</td>";
    echo "<td>";
    echo "Title";
    echo "</td>";
    echo "<td>";
    echo "Message";
    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='width:200px'>";
    echo $username;
    echo "</td>";
    echo "<td style='width:200px'>";
    echo $title;
    echo "</td>";
    echo "<td style='width:200px'>";
    echo $message;
    echo "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</body>";
    echo "</head>";
    echo "</html>";
    
    
    
}else {
    echo "无效";
}