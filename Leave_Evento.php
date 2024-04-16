<?php
@include 'config.php';
session_start();
$username = $_SESSION['user_name'];
if(isset($_GET['LeaveID'])){
     $event_id=$_GET['LeaveID'];
    
     $sql = " update `user_form` set event_nu='0' where id=(select id from user_form where name = '$username')";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:Leave_Event.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>