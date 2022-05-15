<!-- php codes -->
<?php
    include 'databaseConn.php';

    // passing values to the database

    if(isset($_POST['send'])) {
        $firstName=$_POST['firstname'];
        $lastName=$_POST['lastname'];
        $phoneNo=$_POST['phone'];
        $email=$_POST['email'];
        $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);

        // Inserting user input into the database
        $sql= "INSERT INTO users (firstname,lastname,email,phone,pass) VALUES ('$firstName','$lastName','$email','$phoneNo','$pass')";

        //connecting sql query and the database
        $connection=mysqli_query($link_to_database, $sql);

        // conditions

        if ($connection) {
            header("location:login.php");
            die();
        }

        else {
            echo "Sign up attempt was unsuccessful!";
        }
    }
?>

