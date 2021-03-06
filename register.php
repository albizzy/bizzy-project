<!-- php codes -->
<?php
    include 'databaseConn.php'; // database connection

    // check if the user is logged in
    if(isset($_POST['send'])) {
        $firstName=$_POST['firstname'];
        $lastName=$_POST['lastname'];
        $phoneNo=$_POST['phone'];
        $email=$_POST['email'];
        $pass=password_hash($_POST['pass'],PASSWORD_DEFAULT);

        // Inserting user input into the database
        $sql= "INSERT INTO sign (firstname,lastname,phone,email,pass) VALUES ('$firstName','$lastName','$email','$phoneNo','$pass')";

        // checking if the query is successful or not
        $connection=mysqli_query($link, $sql);

        // if successful, redirect to login page
        if ($connection) {
            header("location:login.php");
            die();
        }
        else {
            echo "Sign up attempt was unsuccessful!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <form action="register.php" method="POST" autocomplete="off">
        <h1>Create account</h1>
        <input type="text" name="firstname" id="fname" placeholder="First Name"><br>
        <input type="text" name="lastname" id="lname" placeholder="Last Name"><br>
        <input type="text" name="phone" id="phone" placeholder="Phone Number"><br>
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <input type="password" name="pass" id="pass" placeholder="Password"><br>
        <input type="submit" name="send" value="Sign Up">
        <input type="text" name="hidden" autocomplete="false" style="display: none;"><br><br>
    </form>
</body>

</html>

