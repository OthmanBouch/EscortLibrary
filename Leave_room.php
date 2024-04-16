<?php
@include 'config.php';
if(isset($_GET['LeaveID'])){
     $id=$_GET['LeaveID'];

     $sql = " update `user_form` set room_nu='0' where id='$id'";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:User_Leave.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>