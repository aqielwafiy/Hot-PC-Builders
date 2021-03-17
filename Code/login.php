<!DOCTYPE hmtl>
<?php
include "db.php";

if(isset($_POST['but_submit'])){

    $Username = mysqli_real_escape_string($con,$_POST['username']);
    $Password = mysqli_real_escape_string($con,$_POST['password']);

    if ($Username != "" && $Password != ""){

        $sql_query = "select count(*) as cntUser from user where username='".$Username."' and password='".$Password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_result($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['Username'] = $Username;
            header('Location: homepage.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log In</title>
        <link rel="stylesheet" href="signup.css">
    </head>
 
    <body>
 
        <div class="form-wrapper">
 
            <h1>Log In</h1>
             
            <form method="post" action="">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" placeholder="Your User Name">

                <label for="email">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter Password">

                <input type="submit" value="Submit" name="but_submit" id="but_submit" />
            </form>
			<a href="signup.php"> <h4>Don't have an account?</h4> </a>
			
</div>
</body>
</html>