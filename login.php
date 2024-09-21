<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>

    <form action="login_check.php" method="post" >
    
    <h4>
        <?php
        error_reporting(0);
        session_start();
        session_destroy();
        echo $_SESSION['loginMesssage'];
        
        ?>
</h4>
         


    <div class="login">
         <h1 class="hed">Login Form</h1>
        <input type="text" name="username" placeholder="Username" id="username">
        <input type="password" name="password" placeholder="password" id="password">
        <a href="#" class="forgot">forgot password?</a>
        <input type="submit" value="Sign In">
    </div>
    <div class="shadow"></div>
    </form>
</body>

</html>