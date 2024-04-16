<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $guest_num=$_GET['deleteID'];

     $sql="delete from `guest` where guest_num='$guest_num'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_Guest.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>