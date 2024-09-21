<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

$data = mysqli_connect("localhost","root","","schoolproject");

$sql = "SELECT * FROM user WHERE usertype = 'student' ";

$result = mysqli_query($data,$sql);







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

<body>

    <?php

    include 'admin_sidebar.php';


    ?>

    <div class="content">
        <h1>View Student</h1>


        <div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">password</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
           
                <?php
                    while($info=$result->fetch_assoc())
                    {

                    



               ?>



                <tbody>
                    <tr>
                        <td> <?php echo "{$info['username']}"  ?> </td>
                        <td> <?php echo "{$info['phone']}" ?></td>
                        <td> <?php echo "{$info['email']}"  ?> </td>
                        <td> <?php echo "{$info['password']}"  ?> </td>
                        
                        <td> <?php echo "<a href='delete.php?student_id={$info['id']}'> Delete </a>"  ?> </td>
                    </tr>
                    
                    
                </tbody>

                <?php
                    }
                  ?>

            </table>

        </div>















    </div>



</body>

</html>