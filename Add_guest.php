<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $guest_fname = $_POST['guest_fname'];
   $guest_lname = $_POST['guest_lname'];
   $guest_degree=$_POST['guest_degree'];
   $guest_position=$_POST['guest_position'];
 $sql = "insert into `guest` (guest_fname, guest_lname, guest_degree, guest_position)
 values ('$guest_fname','$guest_lname', '$guest_degree', '$guest_position')";
 $result=mysqli_query($conn,$sql);
 if($result){
  header('location:Add_guest.php');
 }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add Guest Information</title>


   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>Add guest Information </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <p>First Name</p>
      <input type="text" name="guest_fname" required placeholder="enter the First name">
      <p>Last Name</p>
      <input type="text" name="guest_lname" required placeholder="enter the Last name">
      <p>Degree</p>
      <select name="guest_degree">
         <option value="Bachelor">Bachelor</option>
         <option value="Master">Master</option>
         <option value="PHD">PHD</option>
      </select>
      <p>Position</p>
      <input type="text" name="guest_position" required placeholder="enter the position">
      <input type="submit" name="submit" value="Add guest" class="form-btn">
      <p> done adding guest ?  <a href="Librarian_See_guest.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>