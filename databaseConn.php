<?php
    define("SERVER","localhost");
    define("USER","root");
    define("PASS","");
    define("DB","bizzy-database");

    $link_to_database=mysqli_connect(SERVER,USER,PASS,DB) or die();
?>