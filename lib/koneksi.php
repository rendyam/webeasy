<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "webeasy";

    //$mysqli = mysqli_connect($host, $user, $pass, $db);
    //$mysqli = new mysqli($host, $user, $pass, $db);
    
    
    mysql_connect($host,$user,$pass) or die(mysql_error());
    mysql_select_db($db) or die(mysql_error());
?>