<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $title =  $_POST['title'];
   $author = $_POST['author'];
   $field = $_POST['field'];
   $status = $_POST['status'];
   $shelf_num = $_POST['shelf_num'];

 $sql = "insert into `book` (title, author, field, status, shelf_num)
 values ('$title','$author','$field','$status','$shelf_num')";
 $result=mysqli_query($conn,$sql);
 if($result){
  header('location:Add_Book.php');
 }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Add book Information</title>


   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">

<div class="form-container">

   <form action="" method="post">
      <h3>Add book Information </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <p>Title</p>
      <input type="text" name="title" required placeholder="enter the title">
      <p>Author</p>
      <input type="text" name="author" required placeholder="enter the author">
      <p>Field</p>
      <input type="text" name="field" required placeholder="enter the field">
      <p>Availability</p>
      <select name="status">
         <option value="Available">Available</option>
         <option value="Not available">Not available</option>
      </select>
      <p>shelf number</p>
      <input type="text" name="shelf_num" required placeholder="enter the shelf number">
      <input type="submit" name="submit" value="Add Book" class="form-btn">
      <p> done adding books ?  <a href="Librarian_See_Book.php"><strong> Return</strong></a></p>
   </form>

</div>

</body>
</html>