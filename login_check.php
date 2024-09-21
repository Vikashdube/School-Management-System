<?php

error_reporting(0);
session_start();



$data = mysqli_connect("localhost", "root", "", "schoolproject");


if ($data === false) {
  echo "connection error" . mysqli_connect_error();
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {

  $name = $_POST['username'];
  $pass = $_POST['password'];

  $sql = "SELECT * FROM `user` WHERE  username = '" . $name . "' AND password = '" . $pass . "' ";

  $result = mysqli_query($data, $sql);
  $row = mysqli_fetch_array($result);



  if ($row["usertype"] == "admin") {
    $_SESSION['username'] =$name;
    header("location:adminhome.php");
    }
    
    
   else if ($row["usertype"] == "student") {
    $_SESSION['username'] =$name;  
    header("location:studenthome.php");
    } 
    
    else {

     
      $message= "This is an alert message!";
     
      $_SESSION['loginmessage']= $message;

      header("location:login.php");


    }

 

  }



