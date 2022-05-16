<?php
    include 'databaseConn.php'; // database connection

    // check if the user is logged in
    if(isset($_POST('send'))) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];

        // Inserting user input into the database
        $sql = "SELECT pass FROM sign WHERE email = '$email'";
        $conn = mysqli($link, $sql);

        // checking if the query is successful or not
        $getRow = mysqli_fetch_array($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <form action="login.php" method="POST">
        <h1>Login to your account</h1>
        <input type="email" name="email" id="email" placeholder="Email"><br>
        <input type="password" name="pass" id="pass" placeholder="Password"><br>
        <input type="submit" name="send" value="Sign Up">
    </form>
</body>

</html>