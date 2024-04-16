<?php

@include 'config.php';
$id=$_GET['updateID'];
$sql="select * from `book` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$title=$row['title'];
$author=$row['author'];
$field=$row['field'];
$status=$row['status'];
$shelf_num=$row['shelf_num'];

if(isset($_POST['submit'])){

   $title = $_POST['title'];
   $author = $_POST['author'];
   $field = $_POST['field'];
   $status = $_POST['status'];
   $shelf_num = $_POST['shelf_num'];

         $sql = " update `book` set id='$id', title='$title', author='$author', field='$field', status='$status', shelf_num='$shelf_num' where id='$id'";
         $result=mysqli_query($conn, $sql);
         
         if($result){
         header('location:Add_Book.php');
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
   <title>Book information</title>

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background: url(MainImageNOrep.jpg);background-repeat: no-repeat;background-size: 100%;">
   
<div class="form-container">

   <form action="" method="post">
      <h3>update Book's Information</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="text" name="title" required placeholder="enter book Title" value=<?php echo $title;?>>
      <input type="text" name="author" required placeholder="enter book author"value=<?php echo $author;?>>
      <input type="text" name="field" required placeholder="enter book Field" value=<?php echo $field;?>>
      <select name="status">
         <option value="Available">Available</option>
         <option value="Not Available">Not Available</option>
      </select>
      <input type="text" name="shelf_num" required placeholder="enter the shelf number">
      <input type="submit" name="submit" value="update book now" class="form-btn">
      <a href="Librarian_See_Book.php">Done</a>
      
   </form>

</div>

</body>
</html>