<?php
session_start();

 $data  = mysqli_connect("localhost","root","","schoolproject");

 if($data===false){
   echo "not connected form". mysqli_connect_error();
 }


 if(isset($_POST['apply']))
 {
    $data_name = $_POST['name'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    $data_message = $_POST['message'];



    $sql = "INSERT INTO `admission` ( `name`, `email`, `phone`, `message`) 
            VALUES ('$data_name', '$data_email', '$data_phone', '$data_message')" ;

    $result = mysqli_query($data,$sql);


    if($result){
         
        $_SESSION['message'] = "your application send successful";
        header("location:index.php");


    }else{
        echo "connection faild on sql". mysqli_connect_error();
    }
 }

?>