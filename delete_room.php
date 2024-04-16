<?php
@include 'config.php';
if(isset($_GET['deleteID'])){
     $room_num=$_GET['deleteID'];

     $sql="delete from `room` where room_num='$room_num'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Librarian_See_Room.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>