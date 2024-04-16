<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $room_nu = $_POST['room_nu'];
   $event_nu = $Post['event_nu'];
   

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type, room_nu, event_nu) VALUES('$name','$email','$pass','$user_type', '$room_nu', '$event_nu')";
         mysqli_query($conn, $insert);
         
         header('location:Add_User.php');
         
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add User form</title>

   <link rel="stylesheet" href="css/style.css">

</head>
<body    >
   
<div class="form-container">

   <form action="" method="post">
      <h3>Add User's Information </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p>Name</p>
      <input type="text" name="name" required placeholder="enter the new user name">
      <p>Last name</p>
      <input type="text" name="last_name" required placeholder="Enter the last name">
      <p>Email</p>
      <input type="email" name="email" required placeholder="enter the new user email">
      <p>Password</p>
      <input type="password" name="password" required placeholder="enter the new user password">
      <p>Confirm Password</p>
      <input type="password" name="cpassword" required placeholder="confirm the new user password">
      <p>Role</p>
      <select name="user_type">
         <option value="user">student</option>
      </select>
      <p>room number</p>
      <input type="text" name="room_nu"  placeholder="enter study room number if any ">
      <p>event number</p>
      <input type="text" name="event_nu"  placeholder="enter event number if any ">

      <input type="submit" name="submit" value="Add User" class="form-btn">
      <p> done adding Users ?  <a href="Librarian_See_User.php">Return to user page</a></p>
   </form>

</div>

</body>
</html>