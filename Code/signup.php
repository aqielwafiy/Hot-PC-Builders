<!DOCTYPE hmtl>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_POST['submit'])) {
        // removes backslashes
        $username = ($_POST['username']);
        //escapes special characters in a string
        
        $email    = ($_POST['email']);
        
        $password = ($_POST['password']);

        $query    = "INSERT into `user` (Username, Password, Email)
                     VALUES ('$username', '" . ($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<script>window.alert('Registration Success');</script>";
        } else {
            echo "<script>window.alert('Registration Fail');</script>";
        }
    } else {}
?>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
        <link rel="stylesheet" href="signup.css">
    </head>
 
    <body>
 
        <div class="form-wrapper">
 
            <h1>Sign up</h1>
             
            <form action="signup.php" method="POST">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" placeholder="Your User Name" required>
 
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Your Email" required>
 
                <label for="email">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
 

 
                <input type="submit" name="submit" value="submit"> 
            </form>
</div>
</body>
</html>