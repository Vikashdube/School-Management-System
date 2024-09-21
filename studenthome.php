<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
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
<body>

   <header class="header">

      <a href="" class="text-black ">Student Dashbord</a>
      
      <div class="logout">
        <a href="logout.php" class="btn btn-primary">Logout</a>
      </div>


   
   </header>
   

   <aside>
      <ul>
        <li>
            <a href="" class="text-black">My Courses</a>
        </li>

        <li>
            <a href="" class="text-black">My Result</a>
        </li>

        
      </ul>
   </aside>


   <div class="content">
    <h1>Siderbar Accordion</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, quaerat, maxime eos perspiciatis corporis perferendis voluptatibus deleniti dignissimos impedit dolorem repellendus debitis. Incidunt earum omnis quae. Ad voluptate repudiandae quo quae molestias amet minima dolorum ullam labore animi suscipit facere, dignissimos aperiam nobis optio velit praesentium sit laborum omnis cum.</p>

   </div>


   
</body>
</html>