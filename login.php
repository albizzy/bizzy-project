<?php
    include 'databaseConn.php'; // database connection

    // check if the user is logged in
    if(isset($_POST('send'))) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
    }
?>