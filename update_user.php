<?php

@include 'config.php';
$id=$_GET['updateID'];
$sql="Select * from `user_form` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$user_type=$row['user_type'];
$room_nu=$row['room_nu'];
$event_nu=$row['event_nu'];

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $room_nu = $_POST['room_nu'];
   $event_nu = $_POST['event_nu'];

   $sql = " update `user_form` set id='$id', name='$name', email='$email', password='$pass', user_type='$user_type', room_nu='$room_nu', event_nu='$event_nu' where id=$id";
   
   $result=mysqli_query($conn,$sql);
   if($result){
    header('location:Librarian_See_User.php');

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
   <title>Update User</title>

   <link rel="stylesheet" href="css/style.css">
  

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>Update user's information</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="name" required placeholder="enter your name" value=<?php echo $name;?>>
      <input type="email" name="email" required placeholder="enter your email" value=<?php echo $name;?>>
      <input type="password" name="password" required placeholder="enter your password" value=<?php echo $password;?>>
      <input type="password" name="cpassword" required placeholder="confirm your password" value=<?php echo $password;?>>
      <select name="user_type">
         <option value="user">student</option>
      </select>
      <p>room number</p>
      <input type="text" name="room_nu"  placeholder="enter study room number if any ">
      <p>event number</p>
      <input type="text" name="event_nu"  placeholder="enter event numberif any ">


      <input type="submit" name="submit" value="Update now" class="form-btn">
      <p> Done ? <a href="Librarian_See_User.php">return</a></p>
   </form>

</div>

</body>
</html>