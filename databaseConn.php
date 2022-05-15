<?php
    define("SERVER", "localhost");
    define("USER", "root");
    define("PASS", "");
    define("DB", "mydb");
    
    // Create connection
    $link = mysqli_connect(SERVER, USER, PASS, DB) or die();

    // Check connection
    if (!$link) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    // sql to create table
    $sql = "CREATE TABLE Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    phone VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    pass VARCHAR(300) NOT NULL,
    )";
    
    if (mysqli_query($link, $sql)) {
      echo "Table Users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($link);
    }
    
    mysqli_close($link);
?>