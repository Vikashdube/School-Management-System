<?php

session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}


$data = mysqli_connect("localhost","root","","schoolproject");

$sql = "SELECT * FROM admission";

$result = mysqli_query($data,$sql);




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <?php

 include 'admin_css.php';

?>



</head>
<body>

     <?php

     include 'admin_sidebar.php';




?>
   
   <div class="content">
    <center>
    <h1>Applied For Admission</h1> <br>
    </center>
     <!-- <table>
        <tr >
            <th style="padding: 20px; font-size: 15px;">Name</th>
            <th style="padding: 20px; font-size: 15px;">Email</th>
            <th style="padding: 20px; font-size: 15px;">Phone</th>
            <th style="padding: 20px; font-size: 15px;">Message</th>
        </tr>
     </table> -->


   
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

  <?php
  
  while ($info = $result->fetch_assoc())
  {

  

?>

  <tbody>
    <tr>
      <td>  <?php echo "{$info['name']}" ;  ?> </td>
      <td><?php echo "{$info['email']}" ;  ?></td>
      <td><?php echo "{$info['phone']}" ;  ?></td>
      <td><?php echo "{$info['message']}" ;  ?></td>
    </tr>
</tbody>

<?php
  }
?>

</table>












   </div>


   
</body>
</html>