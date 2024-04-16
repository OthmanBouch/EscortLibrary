<?php


@include 'config.php';
$guest_num=$_GET['updateID'];
$sql="select * from `guest` where guest_num=$guest_num";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$guest_fname=$row['guest_fname'];
$guest_lname=$row['guest_lname'];
$guest_degree=$row['guest_degree'];
$guest_position=$row['guest_position'];

if(isset($_POST['submit'])){

   $guest_fname = $_POST['guest_fname'];
   $guest_lname = $_POST['guest_lname'];
   $guest_degree = $_POST['guest_degree'];
   $guest_position = $_POST['guest_position'];

         $sql = " update `guest` set guest_num='$guest_num', guest_fname='$guest_fname', guest_lname='$guest_lname', guest_degree='$guest_degree', guest_position='$guest_position' where guest_num='$guest_num'";
         $result=mysqli_query($conn, $sql);
         
         if($result){
         header('location:Add_guest.php');
         }else{
            die(mysqli_error($conn));
         }

};


?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update Guest information</title>

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>update Guest Information</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

<p>First name</p>
      <input type="text" name="guest_fname" required placeholder="Update the first name">
      <p>Last name</p>
      <input type="text" name="guest_lname" required placeholder="Update the last name">
      <p>Degree</p>
      <select name="guest_degree">
         <option value="PHD">PHD</option>
         <option value="MASTER">Master</option>
         <option value="BACHELOR">Bachelor</option>
      </select>
      <p>Position</p>
      <input type="text" name="guest_position" required placeholder="Update guest position">
      
      <input type="submit" name="submit" value="Update Guest" class="form-btn">
      <p> done updating guests ?  <a href="Librarian_See_Guest.php"><strong> Return</strong></a></p>
      
   </form>

</div>

</body>
</html>