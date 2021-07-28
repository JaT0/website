
<?php

session_start();

    include("connect.php");
    include("functions.php");

    
    

    $user_data = check_login($con);
$user_data['username'] = "New user";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mailt</title>

    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <nav>
        <ul>
            <li><a href="signUp.php">Sign up</a></li>
            <li><a href="signUp.html">Login</a></li>
        </ul>
    </nav>

    <h1> Hello, <?php echo $user_data['username']; ?> </h1>
    <a href="logout.php">logout</a>


</body>
</html>