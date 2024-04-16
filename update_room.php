<?php

@include 'config.php';
$room_num=$_GET['updateID'];
$sql="select * from `room` where room_num=$room_num";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$floor=$row['floor'];
$hall=$row['hall'];
$roomid=$row['roomid'];

if(isset($_POST['submit'])){

   $floor = $_POST['floor'];
   $hall = $_POST['hall'];
   $roomid = $_POST['roomid'];

         $sql = " update `room` set room_num='$room_num', floor='$floor', hall='$hall', roomid='$roomid' where room_num='$room_num'";
         $result=mysqli_query($conn, $sql);
         
         if($result){
         header('location:Add_room.php');
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
   <title>Update Room information</title>

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>update Room's Information</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p>Room id</p>
      <input type="text" name="roomid" required placeholder="update the room id" <?php echo $roomid; ?>>
      <p>Floor</p>
      <select name="floor">
         <option value="1">1st</option>
         <option value="2">2nd</option>
         <option value="3">3rd</option>
      </select>
      <p>Hall</p>
      <select name="hall">
         <option value="east">east</option>
         <option value="north">north</option>
         <option value="west">west</option>
         <option value="south">south</option>
      </select>
      <input type="submit" name="submit" value="Update room" class="form-btn">
      <p> done updating rooms ?  <a href="Librarian_See_Room.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>