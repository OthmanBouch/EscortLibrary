<?php
include 'config.php';
session_start();
$username = $_SESSION['user_name'];
if(isset($_GET['AttendID'])){
     $event_id=$_GET['AttendID'];

     $sql = "update `user_form` set event_nu='$event_id' where id=(select id from user_form where name = '$username')";
     $result=mysqli_query($conn,$sql);
     if($result){
        header('location:User_See_Event.php');
     }else{
        die(mysqli_error($conn));
     }
}
?>
