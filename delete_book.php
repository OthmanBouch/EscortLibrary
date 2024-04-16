<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $id=$_GET['deleteID'];

     $sql="delete from `book` where id='$id'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_Book.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>