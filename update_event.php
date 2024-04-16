<?php

@include 'config.php';
$event_id=$_GET['updateID'];
$sql="select * from `event` where event_id=$event_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$event_name=$row['event_name'];
$event_topic=$row['event_topic'];
$guest_id=$row['guest_id'];
$event_date=$row['event_date'];

if(isset($_POST['submit'])){

   $event_name = $_POST['event_name'];
   $event_topic = $_POST['event_topic'];
   $guest_id = $_POST['guest_id'];
   $event_date = $_POST['event_date'];

         $sql = " update `event` set event_id='$event_id', event_name='$event_name', event_topic='$event_topic', guest_id='$guest_id', event_date='$event_id' where event_id='$event_id'";
         $result=mysqli_query($conn, $sql);
         
         if($result){
         header('location:Add_event.php');
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
   <title>Update Event information</title>

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>update Event Information</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <p>Name</p>
      <input type="text" name="event_name" required placeholder="update the event name"<?php echo $event_name; ?>>
      <p>Topic</p>
      <input type="text" name="event_topic" required placeholder="update the event topic"<?php echo $event_topic; ?>>
      <p>guest_id</p>
      <input type="text" name="guest_id" required placeholder="update the guest id"<?php echo $guest_id; ?>>
      <p>Date</p>
      <input type="date" name="event_date" required placeholder="enter the event date"<?php echo $event_date; ?>>
      
      <input type="submit" name="submit" value="Update Event" class="form-btn">
      <p> done updating events ?  <a href="Librarian_See_Event.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>