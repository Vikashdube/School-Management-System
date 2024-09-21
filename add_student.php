<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}




$data = mysqli_connect("localhost","root" ,"","schoolproject");

if(isset($_POST['submit']))
{
    $username = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";


    $check = "SELECT * FROM user WHERE username = '$username'";

    $check_user= mysqli_query($data,$check);

    $row_count = mysqli_num_rows($check_user);

    if($row_count==1){
        echo "Username Already Exist. Try another username";
    }

    else{ 


    $sql = "INSERT INTO `user` ( `username`, `email`, `phone`, `usertype`, `password`)
              VALUES ('$username', '$user_email', '$user_phone', '$usertype','$user_password')";


     $result = mysqli_query($data,$sql);


    if($result){
        echo "<script type = 'text/javascript'>
       
        alert('Data uploaded successfuly');
       
        </script>";

    }else{
        echo "Connnection Faild". mysqli_connect_error();
    }
}
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body >

    <?php include 'admin_sidebar.php';   ?>

    <div class="content  ">
        <h1>Add Student</h1>
    </div>
 <center>
   <div class="container mx-4  ">

    <form action="#" method="post">
        <div class="form-group">
            <input type="text" name="name" class="form-control w-50 mt-4 "  placeholder="Enter your name">
        </div>

        <div class="form-group">
            <input type="text" name="email" class="form-control w-50 mt-3"  placeholder="Enter Gmail">
        </div>

        <div class="form-group">
            <input type="number" name="phone" class="form-control w-50 mt-3"  placeholder="Phone Number">
        </div>

        <div class="form-group">
           <input type="password" name="password" class="form-control w-50 mt-3" placeholder="Enter your password">
        </div>


        <button type="submit" name="submit" class="btn btn-primary w-50 mt-3">Submit</button>
    </form>

    </div>

    </center>












</body>

</html>