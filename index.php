<?php

error_reporting(0);
session_start();
session_destroy();


if($_SESSION['message'])
{
  $message = $_SESSION['message'];

  echo "<script type = 'text/javascript'> 
         
            alert('$message');

       </script>" ;
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <nav>
    <label class="logo">w-School</label>

    <ul>
      <li><a href="">Home</a></li>
      <li><a href="">Contact</a></li>
      <li><a href="">Admission</a></li>
      <li><a href="login.php" class="btn btn-success">Login</a></li>

    </ul>
  </nav>

  <div class="section1">
    <label class="img_text">MMDU Engneering Collage</label>
    <img class="main_img" src="home.jpg" alt="photo">

  </div>

  <div class="container">

    <div class="row">
      <div class="col-md-4">
        <img class="welcome_img" src="mid.jpg" alt="">
      </div>

      <div class="col-md-8">
        <h1>Welcome to MMDU</h1>
        <p>Quality education is always research oriented and exposure driven, which is what makes MM(DU) the leader in cross country studies, in all fields ranging from engineering, hospitality, management, nursing, healthcare and regular under-graduation and post-graduation programs. The highly qualified, experienced, dedicated and professional.MM(DU) invests in youth’s potential and passion. Students are given the guidance and mentoring of the best faculty a mid-state-of-the-art infrastructure and world-class pedagogy. </p>
      </div>

    </div>


  </div>


  <center>
    <h1 class="tch">Our Teachers</h1>
  </center>
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <img class="teacher" src="t1.jpg" alt="">
        <h6 class="mt-2">Alexi thod</h6>
        <p>If you excel in mathematics and enjoy instructing young learners, you might consider becoming a mathematics teacher. While specific requirements vary by state and school, </p>
      </div>

      <div class="col-md-4">
        <img class="teacher" src="t2.jpg" alt="">
        <h6 class="mt-2">Alina </h6>
        <p>If you excel in science and enjoy instructing young learners, you might consider becoming a mathematics teacher. While specific requirements vary by state and school, </p>
      </div>

      <div class="col-md-4">
        <img class="teacher" src="t3.jpg" alt="">
        <h6 class="mt-2">Mario</h6>
        <p>If you excel in sociel science and enjoy instructing young learners, you might consider becoming a mathematics teacher. While specific requirements vary by state and school, </p>
      </div>



    </div>

  </div>


  <center>
    <h1 class="tch">Our Courses</h1>
  </center>

  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <img class="teacher" src="OIP.jpg" alt="">
        <h5 class="mt-2">web devlopment</h5>

      </div>

      <div class="col-md-4">
        <img class="teacher" src="c1.jpg" alt="">
        <h5 class="mt-2">Full stack </h5>

      </div>

      <div class="col-md-4">
        <img class="teacher" src="w1.jpg" alt="">
        <h5 class="mt-2">php full course</h5>

      </div>



    </div>

  </div>


  <!-------------- form -->

  <center>
    <h1 class="mt-5">Registration form</h1>
  </center>

  <form class="mt-4" action="data_check.php" method="post">
    <div class="form-group px-5">

      <input type="text" name="name" class="form-control" placeholder="Enter your name">

    </div>

    <div class="form-group px-5">

      <input type="email" name="email" class="form-control " placeholder="Enter your Email">
    </div>




    <div class="form-group px-5">

      <input type="text" name="phone" class="form-control " placeholder="Mobile phone">
    </div>

    

    
     
    <div class="form-group px-5">

      <textarea name="message" class="  form-contril w-100  "  rows="5" placeholder="message"></textarea>
    </div>



    <div class="px-5">
      <button type="submit" name="apply" value="apply" class="btn btn-primary w-100">Submit</button>
    </div>
  </form>


 
  <footer class="bg-dark text-white bg-dark ">
    <h1 class="text-center mt-5  ">All @ copy write by Vikash Jee👍👍</h1>
  </footer>



</body>

</html>