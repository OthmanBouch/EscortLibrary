<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $event_name = $_POST['event_name'];
   $event_topic = $_POST['event_topic'];
   $guest_id = $_POST['guest_id'];
   $event_date = $_POST['event_date'];

 $sql = "insert into `event` (event_name, event_topic, guest_id, event_date)
 values ('$event_name','$event_topic','$guest_id', '$event_date')";
 $result=mysqli_query($conn,$sql);
 if($result){
  header('location:Add_event.php');
 }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add event Information</title>


   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">

<div class="form-container">

   <form action="" method="post">
      <h3>Add event Information </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <p>Name</p>
      <input type="text" name="event_name" required placeholder="enter the event name">
    <p>Topic</p>
      <input type="text" name="event_topic" required placeholder="enter the event topic">
 <p>guest ID</p>
   <input type="text" name="guest_id" required placeholder="enter the guest ID">
      <p>Date</p>
      <input type="date" name="event_date" required placeholder="enter the event date"> 
      <input type="submit" name="submit" value="Add Event" class="form-btn">
      <p> done adding events ?  <a href="Librarian_See_Event.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>