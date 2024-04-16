<?php

@include 'config.php';
$shelf_id=$_GET['updateID'];
$sql="select * from `shelf` where shelf_id=$shelf_id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$shelf_row=$row['shelf_row'];
$shelf_position=$row['shelf_position'];
$room_id=$row['room_id'];

if(isset($_POST['submit'])){

   $shelf_row = $_POST['shelf_row'];
   $shelf_position = $_POST['shelf_position'];
   $room_id = $_POST['room_id'];

         $sql = " update `shelf` set shelf_id='$shelf_id', shelf_row='$shelf_row', shelf_position='$shelf_position', room_id='$room_id' where shelf_id='$shelf_id'";
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
      <p>shelf row</p>
    <select name="shelf_row">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
      </select>
      <p>shelf position</p>
    <select name="shelf_position">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
         <option value="9">9</option>
         <option value="10">10</option>
         <option value="11">11</option>
         <option value="12">12</option>
         <option value="13">13</option>
         <option value="14">14</option>
         <option value="15">15</option>
         <option value="16">16</option>
         <option value="17">17</option>
         <option value="18">18</option>
         <option value="19">19</option>
         <option value="20">20</option>
      </select>
      <p>room number</p>
      <input type="text" name="room_id" required placeholder="enter the room number">
      <input type="submit" name="submit" value="update shelf" class="form-btn">
      <p> done updating shelf ?  <a href="Librarian_See_shelf.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>