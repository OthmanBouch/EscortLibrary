<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $id=$_GET['deleteID'];

     $sql="delete from `user_form` where id=$id";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_User.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>