<?php
    session_start();

    // Database connection start 
    $servername = "localhost";    
    $user = "root";        
    $password = "";         
    $dbname = "techwizdb"; 

    // Create connection
    $con = mysqli_connect($servername, $user, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>